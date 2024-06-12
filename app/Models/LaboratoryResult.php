<?php
// app/Models/LaboratoryResult.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryResult extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'result', 'date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
