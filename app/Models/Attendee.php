<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;
    protected $primaryKey = 'AttendeeID';

    public function event(){
        return $this->belongsTo(Event::class,'EventID','EventID');
    }
    public function user(){
        return $this->belongsTo(User::class,'UserID','UserID');
    }
}
