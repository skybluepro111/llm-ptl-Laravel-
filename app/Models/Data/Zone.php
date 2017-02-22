<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Zone
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Zone whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Zone whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Zone whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Zone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Zone extends Model
{
    use CrudTrait;

    protected $fillable = ['name'];
}
