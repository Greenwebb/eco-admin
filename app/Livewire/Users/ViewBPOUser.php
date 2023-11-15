<?php

namespace App\Livewire\Users;

use App\Models\User;
use App\Models\UserFile;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ViewBPOUser extends Component
{    
    public $user, $user_files;

    public function mount($id){
        // Set the connection to the second database
        $this->user = User::on('cc_database')->where('global_key', $id)->first(); 
        $user_id = User::on('auth_database')->where('global_key', $id)->first()->id; 
        $this->user_files = UserFile::on('auth_database')->where('user_id', $user_id)->get();
    }
    public function render()
    {
        return view('livewire.users.view-b-p-o-user')->layout('layouts.app');
    }

    public function changeBPOStatus($status){
        User::on('cc_database')
        ->where('global_key', $this->global_key)
        ->update(['status' => $status]);
        User::on('cc_auth')
        ->where('global_key', $this->global_key)
        ->update(['status' => $status]);
    }
}
