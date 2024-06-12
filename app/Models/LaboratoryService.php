<?php
// app/Models/LaboratoryService.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];
}
