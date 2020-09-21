<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Advertisement extends Model
{
    protected $fillable = ['id', 'text', 'highlighted_text', 'button_tex', 'image', 'url', 'status', 'created_by', 'updated_by'];
}
