<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    protected $fillable = [
        'name',
        'nim',
        'active',
        'angkatan',
        'mentor_id',
        'score',
        'scores_id'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function scores()
    {
        return $this->belongsTo(Score::class, 'scores_id');
    }
}
