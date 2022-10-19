<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RS extends Model
{
    use HasFactory;
    protected $table = "rumah_sakit";
    protected $primaryKey = "id";
    protected $guarded = ['id'];
    public $timestamps = false;
}
