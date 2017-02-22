<?php

namespace App\Models\Fees\Ad;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Fees\Ad\ProcessingFee
 *
 * @property integer $id
 * @property string $name
 * @property string $zone_1
 * @property string $zone_2
 * @property string $zone_3
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereZone1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereZone2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereZone3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Ad\ProcessingFee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProcessingFee extends Model
{
    use CrudTrait;
    protected $table = 'ad_processing_fees';

    protected $fillable = ['name', 'zone_1', 'zone_2', 'zone_3'];
}
