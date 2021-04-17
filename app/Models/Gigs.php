<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gigs extends Model
{
    use \Conner\Tagging\Taggable;

    protected $fillable = [
        'company_id',
        'country',
        'state',
        'address',
        'employment_type',
        'min_wage',
        'max_wage'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
