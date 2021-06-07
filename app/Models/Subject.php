<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentSubject;

class Subject extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasMany(StudentSubject::class);
    }
}
