<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    use HasFactory;

    protected $table = 'education_levels';
    protected $fillable = ['name'];

    public function persons()
    {
        return $this->belongsToMany(Person::class)
            ->withPivot('year')
            ->withTimestamps();
    }
}
