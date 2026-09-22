<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    
    // Apne database table ka exact naam yahan likhein
    protected $table = 'certificates'; 
    
    protected $fillable = [
        'student_name', 
        'enrollment_number', 
        'institute_name', 
        'programme_name', 
        'completion_date', 
        'batch'
    ];
}