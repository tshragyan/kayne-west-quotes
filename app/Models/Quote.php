<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quotes
 * @package App\Models
 * @property int id
 * @property string quote
 */
class Quote extends Model
{
    protected $fillable = ['quote'];
}
