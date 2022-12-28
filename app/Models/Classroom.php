<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name', 'description','collage_id'];
    protected $table = 'classrooms';

    public function Collage()
    {
        return $this->belongsTo(Collage::class, 'collage_id');
    }
    use HasFactory;
}
