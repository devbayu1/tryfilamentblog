<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ShowHome extends Component
{
    #[Title('Home')]
    public function render()
    {
        return view('livewire.show-home');
    }
}
