<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * @package App\Models
 * @property-read int $id
 * @property string $name
 * @property string $code
 * @property string $symbol
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 */
class Currency extends Model
{
    protected $table = 'currency';
}
