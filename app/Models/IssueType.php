<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueType extends Model
{
    protected $table = 'issue_types';
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'issue_type_id');
    }

    public function executives()
    {
        return $this->hasMany(Executive::class, 'issue_type_id');
    }

    use HasFactory;
}
