<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model 
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug','content','pic','tag','visibility','publish','featured','position'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
