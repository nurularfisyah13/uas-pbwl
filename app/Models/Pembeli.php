<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $guarded = [];
}
