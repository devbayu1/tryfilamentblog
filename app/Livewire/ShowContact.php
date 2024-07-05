<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ShowContact extends Component
{
    public function render()
    {
        return view('livewire.show-contact')->title('Contact Us');
    }
}
