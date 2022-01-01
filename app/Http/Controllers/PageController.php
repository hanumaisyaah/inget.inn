<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Assignment;
use App\Models\User;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{    
    public function landingPage() {
        return view('index');
    }
    
    public function home()
    {                
        $user = Auth::user();                
        $todayDate = Carbon::now('GMT+7')->toDateString();
        $todayDay = Carbon::now('GMT+7')->format('l');
        $assignments = DB::table('assignment')
                        ->where('user_id', Auth::user()->id)
                        ->whereRaw('DATEDIFF(due_date, "' . $todayDate . '") <= 3')
                        ->where('due_date', '>', $todayDate)
                        ->where('status', 'DOING')
                        ->orderBy('due_date','asc')
                        ->orderBy('due_time','asc')->get();
        $schedules = DB::table('schedule')
                        ->where('user_id', Auth::user()->id)
                        ->where('day', '=', $todayDay)
                        ->orderBy('start','asc')->get();
        return view('home', ['user' => $user, 
                            'assignments' => $assignments,
                            'schedules' => $schedules]);        
    }    

    public function settingAccount()
    {        
        $user = Auth::user();                
        return view('setting.account', ['user' => $user]);
    }

    public function settingNotification()
    {        
        $user = Auth::user();                
        $notification = Notification::where('user_id', $user->id)->first();                   
        return view('setting.notification', ['notification' => $notification]);
    }

    public function settingResetData()
    {        
        $user = Auth::user();        
        return view('setting.resetData', ['user' => $user]);
    }

    public function emailConfirmation() {
        return view('confirmEmail');
    }

    public function getAccountForResetPassword(Request $request) {
        $user = User::where('email', $request->get('email'))->first();
        if ($user->first()) {
            return view('resetPassword', ['user' => $user]);
        } else {
            return redirect()->route('email_confirmation');
        }
    }

    public function resetPassword(Request $request, $id) {
        $user = User::find($id);
        $password = $request->get('password');
        $confirmPassword = $request->get('confirm_password');
        if($password == $confirmPassword) {
            $user->password = Hash::make($request->get('password'));            
            $user->save();
            return redirect()->route('home')
                ->with('success', 'Password Successfully Reset');
        } else {
            return redirect()->route('reset_password');
        }          
    }

    public function calendar() {
        return view('calendar');
    }    
}
