<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedReports extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'title',
        'NumberOfPost',
        'message',
        'posted_date',
    ];
           
}
