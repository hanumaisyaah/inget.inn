<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Notification extends Model
{
    use HasFactory;
    protected $table = 'notification';

    protected $fillable = [    
        'user_id',    
        'remind_schedule_at',
        'remind_schedule_format',
        'remind_assignment_at',
        'remind_assignment_format',
    ];

    public function user() 
    {        
        return $this->belongsTo(User::class);
    }
}
