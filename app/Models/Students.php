<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    public function address()
    {
        return $this->hasOne(Address::class, 'student_id', 'student_id');
    }
}