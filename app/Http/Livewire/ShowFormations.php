<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowFormations extends Component
{
    public $formation;

    public function mount()
    {
        $this->formation = \App\Models\Formation::where('id', 1)->first();
    }

    public function render()
    {
        return view('livewire.show-formations');
    }
}
