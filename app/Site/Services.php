<?php

namespace App\Site;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'sessao',
        'title',        
        'description'
    ];
}
