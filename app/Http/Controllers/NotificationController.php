<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\Notification;

class NotificationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        $request->validate([        
            'remind_assignment_at' => 'required',
            'remind_assignment_format' => 'required',   
            'remind_schedule_at' => 'required',
            'remind_schedule_format' => 'required',                     
        ]);
        
        $notification = Notification::find($id);       

        $notification->remind_schedule_at = $request->get('remind_schedule_at');
        $notification->remind_schedule_format = $request->get('remind_schedule_format');
        $notification->remind_assignment_at = $request->get('remind_assignment_at');        
        $notification->remind_assignment_format = $request->get('remind_assignment_format');
        $notification->updated_at = NOW();                
                
        $user = new User;
        $user->id = $notification->user_id;
        $notification->user()->associate($user);
        $notification->save();        
        
        // redirect after add data
        
        return redirect()->route('notification')
            ->with('success', 'Notification Successfully Updated');
    }
}
