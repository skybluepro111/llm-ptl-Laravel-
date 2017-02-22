<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Responsibility
 *
 * @property integer $id
 * @property integer $role_id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Responsibility whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Backpack\PermissionManager\app\Models\Role $role
 */
class Responsibility extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'description', 'role_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('Backpack\PermissionManager\app\Models\Role');
    }
}
