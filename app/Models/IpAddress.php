<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model{
    use HasFactory;

    public $table = 'ip_addresses';

    protected $fillable = ['ip_address', 'created_at', 'updated_at'];
}
