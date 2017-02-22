<?php

namespace App\Models\Fees\Highway;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Fees\Highway\ExtensionTime
 *
 * @property integer $id
 * @property integer $development_type_id
 * @property integer $development_detail_id
 * @property integer $amount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereDevelopmentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereDevelopmentDetailId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ExtensionTime whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ExtensionTime extends Model
{
    use CrudTrait;
}
