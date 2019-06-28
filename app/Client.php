<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name', 'second_name', 'father_name', 'mother_name', 'ci', 'gender', 'phone', 'birthday', 'status'
    ];
    
    // Aca uso para dejar las iniciales en mayuscula
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }
    public function setSecondNameAttribute($value)
    {
        $this->attributes['second_name'] = ucfirst($value);

    }
    public function setFatherNameAttribute($value)
    {
        $this->attributes['father_name'] = ucfirst($value);

    }
    public function setMothertNameAttribute($value)
    {
        $this->attributes['mother_name'] = ucfirst($value);
    }

}
