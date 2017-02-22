<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Payment_Type
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Payment_Type whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Payment_Type whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Payment_Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Payment_Type whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment_Type extends Model
{
    use CrudTrait;

    protected $fillable = ['name'];
}
