<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * Security Detail: Using fillable attributes controls what inputs can be mass-assigned,
     * protecting the model against Mass Assignment Vulnerabilities (an attacker injecting
     * unexpected columns like 'is_admin' or database IDs).
     *
     * Security Detail: Eloquent operations (like ContactInquiry::create()) automatically 
     * use PDO parameterized statements under the hood. Parameterization separates the SQL query 
     * structure from the data, neutralizing SQL injection attempts by ensuring data is never 
     * evaluated as executable SQL commands.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'service',
        'message',
    ];
}
