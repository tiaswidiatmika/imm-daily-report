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
    
    public $selected;
    public $keys = '';
    public $array = '';

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
        
        $this->users = User::where('alias', 'like', "%{$this->$wireModel}%")->take(10)->get();
        
    }

    public function clickResult($result, $wireModel, $userCollectionType)
    {
        
        $this->$wireModel = $result;
        
        array_push($this->$userCollectionType, $result);
        $this->$wireModel = '';

        $this->users = collect();
    }

    public function removeSelectedUser($needle, $hayStack)
    {
        $needleKey = array_search($needle, $this->$hayStack);
        
        unset($this->$hayStack[$needleKey]);
    }

    public function showarray()
    {
        $this->array = json_encode($this->usersAvailable);
        $this->keys = json_encode(array_keys($this->usersAvailable));
    }
}
