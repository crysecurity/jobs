<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 * @package App\Models
 *
 * @property-read int $id
 * @property string $name
 * @property string $description
 * @property string $phone
 * @property string $email
 * @property string $tin
 * @property string $iec
 * @property string $logo
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 */
class Company extends Model
{
    protected $table = 'company';
}
