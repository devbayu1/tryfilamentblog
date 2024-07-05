<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Title;

class ShowService extends Component
{
    #[Title('Services')]
    public function render()
    {
        return view('livewire.show-service', [
            'services' => Service::all()
        ]);
    }
}
