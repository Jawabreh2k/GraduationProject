<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    protected $fillable = ['name', 'description'];
    protected $table = 'collages';

    public function Specialty()
    {
        return $this->hasMany(Collage::class, 'collage_id');
    }

    public function Classroom()
    {
        return $this->hasMany(Collage::class, 'collage_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'collage_id');
    }

    use HasFactory;
}
