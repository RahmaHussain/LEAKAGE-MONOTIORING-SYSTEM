<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserPage extends Component
{
    public $user;
    protected $rules = [
        'user.name'=>['required'],
        'user.email'=>['required'],
        'user.location'=>['required'],
        'user.user_type'=>['required'],
    ];
    public function mount(){
        $this->user=new User();
        $this->user->email = "abc@jkci.or.tz";
    }
    public function save(){
        $this->validate();
        $this->user->password = encrypt('12345');
        $this->user->save();
    }
    public function render()
    {
        return view('livewire.user-page');
    }
}
