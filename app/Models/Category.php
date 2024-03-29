<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
    public $timestamps = false;
    const ACTIVE = 1;
    const INACTIVE = 0;
}
