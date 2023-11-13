<?php

namespace App\Livewire\Users;

use App\Traits\UserTrait;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CallCenterListView extends Component
{
    use UserTrait;
    public $bpos;

    public function render()
    {
        // DB::connection('auth_database')->beginTransaction();

        try {
            // Retrieve products from the second database
            $this->bpos = DB::connection('auth_database')
                ->table('users')
                ->join('b_p_o_s', 'users.id', '=', 'b_p_o_s.user_id') // Replace 'user_id' with the actual common column
                ->where('users.type', 'bpo')
                ->orderBy('users.created_at', 'desc')
                ->get();
            // Commit the transaction
            // DB::connection('auth_database')->commit();
            // Pass the products data to the view
            return view('livewire.users.call-center-list-view')->layout('layouts.app');
        
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::connection('auth_database')->rollback();
        
            // Handle the exception
            session()->flash('errorMessage', 'Error: ' . $e->getMessage());
        
            return view('livewire.users.call-center-list-view')->layout('layouts.app');
        }
        
        // $this->bpos = $this->user_group('call center');
    }
}
