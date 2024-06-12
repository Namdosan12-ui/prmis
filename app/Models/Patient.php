<?php

// app/Models/Patient.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'address'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function laboratoryResults()
    {
        return $this->hasMany(LaboratoryResult::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
