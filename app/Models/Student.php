<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    protected $table = 'students';
    protected $fillable = ['name', 'student_number', 'password', 'collage_id', 'specialty_id'];

    public function Collage()
    {
        return $this->belongsTo(Collage::class, 'collage_id');
    }

    public function Specialty()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'student_id');
    }


    use HasFactory;
}
