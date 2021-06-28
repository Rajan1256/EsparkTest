<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    public function educationdetails()
    {
        return $this->hasOne('App\EducationDetails');
    }
    public function wordexperiences()
    {
        return $this->hasOne('App\WordExperience');
    }
    
}
