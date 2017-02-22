<?php

namespace App\Models\Fees\Ad;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Fees\Ad\ServicesFee
 *
 * @property integer $id
 * @property string $name
 * @property integer $amount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ServicesFee whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ServicesFee whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ServicesFee whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ServicesFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ServicesFee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ServicesFee extends Model
{
    use CrudTrait;
    protected $table = 'ad_services_fees';

    protected $fillable = ['name', 'amount'];
}
