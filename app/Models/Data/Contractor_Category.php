<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Contractor_Category
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Contractor_Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Contractor_Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Contractor_Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Contractor_Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Contractor_Category extends Model
{
    use CrudTrait;

    protected $fillable = ['name'];
}
