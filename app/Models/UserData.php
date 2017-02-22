<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Users\UserData
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $concessionaires
 * @property string $telephone
 * @property string $company
 * @property string $info
 * @property string $address
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereConcessionaires($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereTelephone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereCompany($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $contractor_category_id
 * @property integer $concessionaire_id
 * @property-read mixed $avatar
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereContractorCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereConcessionaireId($value)
 * @property string $name
 * @property string $registration_number
 * @property string $post_address
 * @property string $city
 * @property string $postcode
 * @property string $state
 * @property string $country
 * @property string $phone_office
 * @property string $fax_office
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereRegistrationNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData wherePostAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData wherePostcode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData wherePhoneOffice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserData whereFaxOffice($value)
 */
class UserData extends Model
{
    protected $fillable = [
        'user_id', 'concessionaire_id',
        'name', 'registration_number', 'address',
        'post_address', 'city', 'postcode', 'state',
        'country', 'phone_office', 'fax_office'
    ];

    public function getAvatarAttribute()
    {
        return url('img/ahmad.jpg');
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
