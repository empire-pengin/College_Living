<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['college_name','undergraduate','remittance','rent'
,'where_live','sex','part','troble','frend','from','accident','image'];
}

