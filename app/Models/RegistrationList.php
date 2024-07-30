<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationList extends Model
{
    protected $table = 'registrations'; 

    protected $fillable = [
        'name', 'email', 'phone', 'organization', 'status'
    ];
}
