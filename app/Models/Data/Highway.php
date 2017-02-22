<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


/**
 * App\Models\Data\Highway
 *
 * @property integer $id
 * @property integer $concessionaire_id
 * @property string $code
 * @property string $name
 * @property string $short
 * @property integer $office_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Data\Office $office
 * @property-read \App\Models\Data\Concessionaire $concessionaire
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereConcessionaireId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereShort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereOfficeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property float $lng
 * @property float $lat
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Highway whereLat($value)
 */
class Highway extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'code', 'office_id', 'concessionaire_id', 'lat', 'lng'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function office()
    {
        return $this->belongsTo('App\Models\Data\Office');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function concessionaire()
    {
        return $this->belongsTo('App\Models\Data\Concessionaire');
    }
}
