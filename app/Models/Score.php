<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'commit',
        'mentor',
        'evaluation',
        'addition',
        'motm'
    ];

    public function mentees()
    {
        return $this->hasMany(Mentee::class, 'score_id');
    }
}
