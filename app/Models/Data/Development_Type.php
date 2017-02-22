<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Development_Type
 *
 * @property integer $id
 * @property string $name
 * @property integer $application_category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Development_Type whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Development_Type whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Development_Type whereApplicationCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Development_Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Development_Type whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Development_Details[] $development_details
 */
class Development_Type extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'application_category_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function development_details()
    {
        return $this->hasMany('App\Models\Data\Development_Details');
    }
}
