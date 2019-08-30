<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'ID',
        'Name',
        'Created_At',
    ];
}
