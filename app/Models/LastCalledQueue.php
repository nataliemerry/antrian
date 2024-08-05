<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastCalledQueue extends Model
{
    use HasFactory;

    protected $fillable = [
        'queue_number', 
        'service_name', 
        'is_current'
    ];
    
}
