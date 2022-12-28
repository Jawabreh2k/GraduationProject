<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Executive extends Authenticatable
{
    public function IssueType()
    {
        return $this->belongsTo(IssueType::class, 'issue_type_id');
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'executive_tasks','executive_id','task_id');
    }

    use HasFactory;
}
