<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    //

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function candidateProfile()
    {
        return $this->belongsTo(CandidateProfile::class);
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
