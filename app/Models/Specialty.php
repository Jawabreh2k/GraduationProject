<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = ['name', 'description', 'collage_id'];
    protected $table = 'specialties';

    public function Collage()
    {
        return $this->belongsTo(Collage::class, 'collage_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'specialty_id');
    }

    use HasFactory;
}
