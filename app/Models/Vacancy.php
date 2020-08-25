<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacancy
 * @package App\Models
 *
 * @property-read int $id
 * @property string $title
 * @property string $description
 * @property int $salary_from
 * @property int $salary_to
 * @property Carbon $archived_at
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 */
class Vacancy extends Model
{
    protected $table = 'vacancies';

    protected $dates = ['created_at', 'updated_at', 'archived_at'];

    protected $casts = [
        'salary_from' => 'int',
        'salary_to' => 'int'
    ];
}
