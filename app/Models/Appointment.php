<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;

    protected $fillable = [
        'patient_dni',
        'doctor_dni',
        'hour',
        'date',
        'status'  
      ];

      public static function listWithExtra ($dni) {
        return self::select('appointments.*', 'users.name', 'users.surname')
        ->join('users', 'users.dni', '=', $dni)
        ->get();
      }

      function patient() {
        return $this->belongsTo(User::class, 'patient_dni', 'dni');
      }

      function doctor() {
        return $this->belongsTo(User::class, 'doctor_dni', 'dni');
      }
}
