<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    // protected $fillables = [
    //     'doctor_id', 'patient_id', 'date', 'time', 'phone_number', 'message'
    // ];

    protected $guarded = [];

    public function doctor() {
        return $this->hasOne(Doctor::class);
    }

    public function patient() {
        return$this->belongsTo(Patient::class);
    }
}
