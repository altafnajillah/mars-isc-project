<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'name',
        'score'
    ];
    public function mentees()
    {
        return $this->hasMany(Mentee::class);
    }
}
