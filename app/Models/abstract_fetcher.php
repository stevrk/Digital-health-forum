<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Abstract_fetcher extends Model
{
    protected $table = 'abstracts';

    protected $fillable = [
        'name', 'phone', 'email', 'organization', 'title', 'abstract', 'download_status',
    ];
}
