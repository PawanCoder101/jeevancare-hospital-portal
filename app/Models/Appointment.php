<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone',
        'doctor_id',
        'appointment_date',
        'appointment_time',
        'notes',
    ];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
