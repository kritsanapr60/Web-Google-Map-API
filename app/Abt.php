<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abt extends Model
{
    //use Notifiable;
    protected $table = 'abt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name', 'Address', 'Province','Register_date','Certificate_date1','Certificate_date2','Category','Latitude','Longitude','Picture_1','Picture_2','Picture_3','Status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];
}
