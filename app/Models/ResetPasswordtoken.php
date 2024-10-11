<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetPasswordtoken extends Model
{
    use HasFactory;


    protected $table="resetpassword_token";
    protected $primaryKey="id";

    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];
}
