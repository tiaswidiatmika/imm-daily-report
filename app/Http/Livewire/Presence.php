<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Presence extends Component
{
    public $allowDuplicateSearches = false;
    public $searchAvailable = '';
    public $searchSickLeave = '';
    public $searchAnnualLeave = '';
    public $users = [];
    public $usersAvailable = [];
    public $usersSickLeave = [];
    public $usersAnnualLeave = [];
    // public $result;

    public function mount()
    {
        $this->users = collect();
    }

    public function render()
    {
        return view('livewire.presence');
    }

    public function search($wireModel)
    {
        if (empty($this->$wireModel)) {
            return collect();
        }
        // dd($this->$wireModel);
        $this->users = User::where('alias', 'like', "%{$this->$wireModel}%")->take(10)->get();
        // return User::where('alias', 'like', '%' . $searchTerm . '%')->take(10)->get();
    }

    public function clickResult($result, $wireModel, $userCollectionType)
    {
        // $userCollectionType = 'user' .
        $this->$wireModel = $result;
        // $this->$userCollectionType = $result;
        array_push($this->$userCollectionType, $result);
        $this->$wireModel = '';

        $this->users = collect();
    }

    public function removeSelectedUser() // $userCollectionType)
    {
        // return 'asdf';
        dd(collect());
        // unset($this->$userCollectionType[$index]);
        // dd($this->userCollectionType);
    }
}
