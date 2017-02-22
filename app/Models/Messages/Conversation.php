<?php

namespace App\Models\Messages;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Messages\Conversation
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $highway_id
 * @property string $type
 * @property string $category
 * @property string $concession
 * @property string $location
 * @property string $direction
 * @property string $from_city
 * @property string $to_city
 * @property string $area
 * @property string $coordinates
 * @property string $zone
 * @property string $authority
 * @property string $slug
 * @property string $documents
 * @property string $note
 * @property string $region
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Messages\Message[] $messages
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereHighwayId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereConcession($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereDirection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereFromCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereToCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereCoordinates($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereZone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereAuthority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereDocuments($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $authority_id
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Conversation whereAuthorityId($value)
 */
class Conversation extends Model
{
    protected $table = 'applications';

    public function messages()
    {
        return $this->hasMany('App\Models\Messages\Message', 'conversation_id');
    }
}
