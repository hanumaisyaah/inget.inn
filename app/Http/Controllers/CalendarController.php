<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Assignment;
use App\Models\Schedule;
use Auth;

class CalendarController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $assignments = Assignment::all()->where('user_id', Auth::user()->id);    
        $schedules = Schedule::all()->where('user_id', Auth::user()->id);    
        $days = array('Sunday' => 0, 'Monday' => 1, 'Tuesday' => 2, 'Wednesday' => 3, 'Thursday' => 4, 'Friday' => 5, 'Saturday' => 6);        
        return view('calendar', ['assignments' => $assignments, 'schedules' => $schedules, 'days' => $days]);
    }
}
