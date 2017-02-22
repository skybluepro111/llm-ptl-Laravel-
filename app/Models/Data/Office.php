<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Office
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Office whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Office whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Office whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $code
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Office whereCode($value)
 */
class Office extends Model
{
    use CrudTrait;

    protected $fillable = ['name'];
}
