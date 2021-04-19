<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gigs extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = [
        'company_id',
        'role',
        'country_id',
        'state_id',
        'address',
        'employment_type',
        'min_wage',
        'max_wage'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
