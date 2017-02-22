<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Responsibility;

/**
 * App\Models\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Application[] $applications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Backpack\PermissionManager\app\Models\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Backpack\PermissionManager\app\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property boolean $activated
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Messages\Message[] $messages
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereActivated($value)
 * @property-read \App\Models\UserData $details
 * @property integer $contractor_category_id
 * @property-read \App\Models\Data\Contractor_Category $contractorCategory
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereContractorCategoryId($value)
 */
class User extends Authenticatable
{

    use CrudTrait;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'contractor_category_id', 'activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * User details depends on user type
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function details()
    {
        return $this->hasOne('App\Models\UserData');
    }


    /**
     * User's applications
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications()
    {
        return $this->hasMany('App\Models\Application');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function messages()
    {
        return $this->hasManyThrough('App\Models\Messages\Message', 'App\Models\Application');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contractorCategory()
    {
        return $this->belongsTo('App\Models\Data\Contractor_Category');
    }

}
