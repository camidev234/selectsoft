<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Person_experience extends Model
{
    use HasFactory;

    public function candidate() :BelongsTo {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }
}
