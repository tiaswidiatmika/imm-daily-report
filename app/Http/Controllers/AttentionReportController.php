<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;

class AttentionReportController extends Controller
{
    protected $firstDayOfWork = 0;
    protected $groupName;
    protected $currentShift;
    protected $dayOfYear;
    protected $rotation = 'departure';
    // protected 
    // public function __construct()
    // {
    //     $this->getCurrentShift();
    // }

    

    public function getCurrentShift()
    {
        $availableShift = ['Pagi Pertama', 'Pagi Kedua', 'Siang Pertama', 'Siang Kedua', 'Malam Pertama', 'Malam Kedua', 'off', 'off'];
        // get today's day of year
        $dayOfYear = $this->dayOfYear = Carbon::now()->isoFormat('DDD') + $this->firstDayOfWork;
        $divisionResult = $dayOfYear / 8;
        $remainder = $dayOfYear % 8;

        $print = [];
        // division result accounts to current 'puteran'
        if (isEven($divisionResult)) {
            $this->rotation = 'arrival';
        }

        if ($remainder === 0){
            // remainder accounts to current shift
            $this->currentShift = $availableShift[7];
        }else {
            $this->currentShift = $availableShift[$remainder-1];
        }
        array_push($print, [
            'day' => $this->dayOfYear,
            'shift' => $this->currentShift,
            'puteran' => $this->rotation
        ]);
        
        $user = User::all();
        dd($user);
        return json_encode($print);
        
    }
    public function index()
    {
        // dd(1%8);
        // dd([$this->currentShift, $this->dayOfYear, $this->rotation]);
    }
}
