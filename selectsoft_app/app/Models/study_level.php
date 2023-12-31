<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class study_level extends Model
{
    use HasFactory;

    public function education_person() :HasMany {
        return $this->hasMany(Education_person::class);
    }

    public function Vacancie_Study()
    {
        return $this->hasMany(Vacancie_study::class, 'study_level_id');
    }
}
