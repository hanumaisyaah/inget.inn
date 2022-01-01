<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $schedules = Schedule::all()->sortBy('start','ASC');                     
        $schedules = Schedule::where('user_id', Auth::user()->id)->orderBy('start','asc')->get();
        return view('schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();                
        return view('schedule.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required',            
            'day' => 'required',
            'start' => 'required',
            'end' => 'required',            
        ]);
        
        $authUser = Auth::user();   
        $schedule = new Schedule;
        $schedule->user_id = $authUser->id;
        $schedule->course = $request->get('course');
        $schedule->room = $request->get('room');
        $schedule->location = $request->get('location');
        $schedule->teacher = $request->get('teacher');
        $schedule->contact = $request->get('contact') ?? '-';        
        $schedule->day = $request->get('day');
        $schedule->start = $request->get('start');
        $schedule->end = $request->get('end');

        $user = new User;
        $user->id = $schedule->user_id;
        $schedule->user()->associate($user);
        $schedule->save();         
        
        // redirect after add data
        return redirect()->route('schedule.index')
            ->with('success', 'Schedule Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        return view('schedule.edit', ['schedule' => $schedule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course' => 'required',
            'room' => 'required',
            'day' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
                  
        $schedule = Schedule::find($id);
        $schedule->course = $request->get('course');
        $schedule->room = $request->get('room');
        $schedule->location = $request->get('location');
        $schedule->teacher = $request->get('teacher');
        $schedule->contact = $request->get('contact') ?? '-';
        $schedule->day = $request->get('day');
        $schedule->start = $request->get('start');
        $schedule->end = $request->get('end');

        $user = new User;
        $user->id = $schedule->user_id;
        $schedule->user()->associate($user);
        $schedule->save();   
        
        // redirect after update data
        return redirect()->route('schedule.index', $schedule->id)
            ->with('success', 'Schedule Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::find($id)->delete();
        return redirect()->route('schedule.index')
            ->with('success', 'Schedule Successfully Deleted');
    }

    public function reset_schedule($id)
    {
        Schedule::where('user_id', $id)->delete();
        return redirect()->route('reset_data')
            ->with('success', 'Schedule Successfully Reset');
    }
}
