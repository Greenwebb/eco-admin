<?php

namespace App\Livewire\Users;


use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ViewSeller extends Component
{    
    public $user;

    public function mount($id){
        // Set the connection to the second database
        $this->user = DB::connection('second_database')
        ->table('users')
        ->where('id', $id)
        ->get();
    }
    public function render()
    {
        return view('livewire.users.view-seller')->layout('layouts.app');
    }
}
