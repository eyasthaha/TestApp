<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{

    // use SoftDeletes;

    public $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'willing_to_work',
        'languages_known',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst($this->first_name) . ' ' . ucfirst($this->last_name)
        );
    }

    public function languages(){
        return $this->belongsToMany(Languages::class, 'id', 'languages_known');
    }
}
