<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // alles behalve id is fillable
    protected $fillable = [
        'project_code',
        'name',
        'status',
        'start_date',
    ];
}
