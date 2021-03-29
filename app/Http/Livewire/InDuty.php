<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class InDuty extends Component
{
    public $allowDuplicateSearches = false;

    // ! properties used for search input "Konter Foreigner"
    public $searchKonterForeigner = '';
    // public $usersKonterForeigner = ['Maida', 'Sembara'];
    public $usersKonterForeigner;
    public $usersExcluded;

    // ! properties  for search input "Konter Indonesia"
    public $searchKonterIndonesia = '';
    public $usersKonterIndonesia;
    // ! properties used for search input "Sakit"
    public $searchSakit = '';
    public $usersSakit = [];
    
    // ! $users is a variable to display list of user while typing on live search
    public $users;

    public function mount()
    {
        $this->users = [];
        $this->usersExcluded = [];

        $this->usersKonterForeigner = [];
        $this->usersKonterIndonesia = [];
    }

    public function render()
    {
        return view('livewire.in-duty');
    }

    public function search($wireModel)
    {
        if (empty($this->{$wireModel})) {
            $this->users = [];
            return;
        }
        $builder = User::where('alias', 'like', "%{$this->$wireModel}%");
        if ($this->allowDuplicateSearches) {
            $this->users = $builder
                ->take(10)
                ->get()
                ->pluck('alias')
                ->toArray();
        } else {
            // $this->users = array_diff($listOfUsers, $this->usersExcluded);
            $this->users = $builder
                ->whereNotIn('alias', $this->usersExcluded)
                ->take(10)
                ->get()
                ->pluck('alias')
                ->toArray();
        }
    }

    public function clickResult($result, $wireModel, $userCollectionType)
    {
        
        $this->$wireModel = $result; // manipulate component a wire model
        
        array_push($this->$userCollectionType, $result); // some business logic
        $this->$wireModel = ''; //resetting input inner text

        array_push($this->usersExcluded, $result);
        $this->users = []; // resetting </li> users
        // $this->emit($userCollectionType . 'Selected'); //emit a custom event
    }

    public function removeSelectedUser($needle, $hayStack)
    {
        $this->$hayStack = array_diff($this->$hayStack, [$needle] );
        $this->usersExcluded = array_diff($this->usersExcluded, [$needle]);
    }

    public function showarray()
    {
        $this->array = json_encode($this->usersAvailable);
        $this->keys = json_encode(array_keys($this->usersAvailable));
    }
}