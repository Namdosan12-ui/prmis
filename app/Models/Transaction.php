<?php
// app/Models/Transaction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'amount', 'type', 'date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
