<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasien";
    protected $primaryKey = "id";
    protected $guarded = ['id'];
    public $timestamps = false;

    public function RS()
    {
        return $this->hasMany('App\Models\RS','id', 'id_rs');
    }
}
