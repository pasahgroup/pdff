<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
      protected $fillable = [
        'first_name',
        'last_name',
        'photo',
        'nationality',
        'language',        
        'phone',
        'email',
        'pin',
        'commisioner_percent',
        'commisioner_desc',
        'status',
        'hear_about_us'
    ];
}
