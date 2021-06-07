<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ra;
use App\Models\Team;
use App\Models\StudentSubject;

class Student extends Model
{
    use HasFactory;

    public function ra()
    {
        return $this->belongsTo(Ra::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function subject()
    {
        return $this->hasMany(StudentSubject::class);
    }
}
