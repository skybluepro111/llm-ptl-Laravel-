<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Authority
 *
 * @property integer $id
 * @property string $name
 * @property string $short
 * @property integer $zone_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Data\Zone $zone
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereShort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereZoneId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Authority whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Authority extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'short', 'zone_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zone()
    {
        return $this->belongsTo('App\Models\Data\Zone');
    }
}
