<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blockname extends Model
{
    protected $table = 'blockname';
    use SoftDeletes;
}
