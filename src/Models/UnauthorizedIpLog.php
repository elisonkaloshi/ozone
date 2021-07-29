<?php

namespace Elison\Ozone\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnauthorizedIpLog extends Model
{
    use HasFactory;

    protected $fillable = ['ip'];
}
