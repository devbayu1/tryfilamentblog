<?php

namespace App\Livewire;

use App\Models\Projects;
use Livewire\Component;
use Livewire\Attributes\Title;

class ShowProject extends Component
{
    public function render()
    {
        $projects = Projects::orderBy('id','desc')->get();
        return view('livewire.show-project', [
            'projects' => $projects
        ])->title('Projects');
    }
}
