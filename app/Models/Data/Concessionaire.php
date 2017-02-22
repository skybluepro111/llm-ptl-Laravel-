<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Data\Concessionaire
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $postcode
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire wherePostcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Data\Concessionaire whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Concessionaire extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'address', 'postcode', 'city', 'phone', 'state', 'country'];
}
