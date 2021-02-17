<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Presence extends Component
{
    public $allowDuplicateSearches = false;
    public $searchTerm;
    // public $result;

    public function render()
    {
        return view('livewire.presence', [
            'users' => $this->search($this->searchTerm)
        ]);
    }

    public function search($searchTerm)
    {
        if (empty($this->searchTerm)) {
            return collect();
        }
        return User::where('alias', 'like', '%' . $searchTerm . '%')->take(10)->get();
    }

    // public function getUsersProperty()
    // {
    //     if (empty($this->searchTerm)) {
    //         return collect();
    //     }
    //     return User::where('alias', 'like', "{%$this->searchTerm%}")->take(10)->get();
    // }
}
