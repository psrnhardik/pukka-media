<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    use HasFactory;

    public $table = 'contacts';

    protected $fillable = ['name', 'email', 'phone', 'website', 'address', 'image', 'p_name', 'p_email', 'p_phone', 'created_at', 'updated_at'];
}
