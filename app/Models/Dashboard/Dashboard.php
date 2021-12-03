<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model 
{

    protected $table = "view_financial";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "sale_today",
        "sale_cash_today",
        "sale_cash_month",
        "sale_cash_year",
        "payable_cash_month",
        "payable_cash_year",
        "exes_cash_month",
        "exes_cash_year",
        "employee_salary"
    ];

   
}
