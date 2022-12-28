<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function IssueType()
    {
        return $this->belongsTo(IssueType::class, 'issue_type_id');
    }

    public function Collage()
    {
        return $this->belongsTo(Collage::class, 'collage_id');
    }

    public function ClassRoom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function executives()
    {
        return $this->belongsToMany(Executive::class, 'executive_tasks', 'task_id', 'executive_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    use HasFactory;
}
