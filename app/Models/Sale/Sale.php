<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model 
{

    protected $table = "sale";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'system_user_id', 
        'sale_type_id',
        'description'
    ];

   
}
