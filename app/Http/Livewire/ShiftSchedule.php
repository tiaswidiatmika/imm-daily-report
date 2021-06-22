<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShiftSchedule extends Component
{
    public $numbering;
    public $users;
    public $spv;
    public $opises;

    public $availableShift = ['Off Kedua', 'Pagi Pertama', 'Pagi Kedua', 'Siang Pertama', 'Siang Kedua', 'Malam Pertama', 'Malam Kedua', 'Off Pertama'];
    public $firstDayOfWork = 0;
    public $dayOfYear;
    public $currentShift;
    public $shiftTime;
    public $terminal;

    public function mount()
    {
        $this->numbering = 1;
        $this->users =  \App\Models\User::all();
        $this->spv = $this->getSpv();
        $this->opises = $this->getOpis();
        $this->dayOfYear = $this->getDayOfYear();
        $this->currentShift = $this->shiftSchedule();
        $this->terminal = $this->getTerminal();
        $this->shiftTime = $this->getShiftTime();
    }
    function render()
    {
        return view('livewire.shift-schedule');
    }

    protected function getSpv()
    {
        return $this->users->where('role', 'spv')->first()->name;
    }

    protected function getOpis()
    {
        return $this->users->where('role', 'opis')->all();
    }

    protected function getDayOfYear()
    {
        return \Carbon\Carbon::now()->isoFormat('DDD') + $this->firstDayOfWork;

    }
    protected function shiftSchedule()
    {
        $currentShift = $this->availableShift[($this->dayOfYear%8)];
        return $currentShift;
    }

    protected function getShiftTime()
    {
        $availableTime = [
            'Pagi Pertama' => '05.00 - 14.00',
            'Pagi Kedua' => '05.00 - 14.00',
            'Siang Pertama' => '13.00 - 22.00',
            'Siang Kedua' => '13.00 - 22.00',
            'Malam Pertama' => '21.00 - 06.00',
            'Malam Kedua' => '21.00 - 06.00',
        ];

        return $availableTime[$this->currentShift];
    }

    protected function getTerminal()
    {
        return isEven ($this->dayOfYear/8) ? 'Kedatangan' : 'Keberangkatan';
    }
}
