<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $highway_id
 * @property integer $authority_id
 * @property string $type
 * @property string $category
 * @property string $concession
 * @property float $location
 * @property string $direction
 * @property string $from_city
 * @property string $to_city
 * @property string $area
 * @property string $coordinates
 * @property string $slug
 * @property string $documents
 * @property string $note
 * @property string $region
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $documents_application
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Payment $payment
 * @property-read \App\Models\Data\Highway $highway
 * @property-read \App\Models\Phase $phase
 * @property-read \App\Models\Project $project
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Messages\Message[] $messages
 * @property-read \App\Models\Data\Authority $authority
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereHighwayId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereAuthorityId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereConcession($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereDirection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereFromCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereToCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereCoordinates($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereDocuments($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model
{

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'category', 'highway_id', 'authority_id', 'location', 'area', 'direction',
        'from_city', 'to_city', 'coordinates', 'type',
        'slug', 'status', 'user_id', 'created_at', 'documents', 'note',
        'region_code'
    ];

    public $timestamps = true;


    /*****
     * | Attributes
     */

    /**
     * Parse documents json
     * @param $value
     * @return mixed
     */
    public function getDocumentsAttribute($value)
    {
        if ($value == '[]') $value = '{"pay":"static\/img\/resit.pdf"}';
        return json_decode($value);
    }

    /**
     * @return static
     */
    public function getDocumentsApplicationAttribute()
    {
        return collect($this->documents)->except('pay');
    }


    /*****
     * | Relations
     */

    /**
     * Applicant user account
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Pay information
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }

    /**
     * Highway
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function highway()
    {
        return $this->belongsTo('App\Models\Data\Highway');
    }

    /**
     * Application's current phase
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phase()
    {
        return $this->hasOne('App\Models\Phase');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project()
    {
        return $this->hasOne('App\Models\Project');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Messages\Message');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function authority()
    {
        return $this->belongsTo('App\Models\Data\Authority');
    }

}
