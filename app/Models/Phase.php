<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Phase
 *
 * @property integer $id
 * @property integer $application_id
 * @property integer $responsibility_id
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \App\Models\Application $application
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereResponsibilityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Phase whereDeletedAt($value)
 * @mixin \Eloquent
 */
class Phase extends Model
{
    use SoftDeletes;

    /**
     * Phase's application
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }

    /**
     * Responsibility
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsibility()
    {
        return $this->belongsTo('App\Models\Responsibility');
    }

    /**
     * User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
