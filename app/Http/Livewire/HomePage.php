<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $item = 0;

    public function mount()
    {
        $this->callNodeMCUAPI();
    }

    public function callNodeMCUAPI()
    {
        $this->item = rand(1, 100);
        $this->emit('valueUpdated', $this->item);
        $this->emitSelf('updated');
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
