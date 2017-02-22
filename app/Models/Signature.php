<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Signature
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $phase_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Signature whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Signature whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Signature wherePhaseId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Signature whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Signature whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Signature extends Model
{
    //
}
