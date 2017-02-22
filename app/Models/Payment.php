<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Payment
 *
 * @property integer $id
 * @property integer $application_id
 * @property integer $fee
 * @property string $other
 * @property string $quantity
 * @property string $pay
 * @property float $sum
 * @property \Carbon\Carbon $payment_date
 * @property integer $bank
 * @property integer $state
 * @property string $slip_num
 * @property string $review
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Application $application
 * @property-read mixed $size
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereFee($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereOther($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment wherePay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereSum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment wherePaymentDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereBank($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereSlipNum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereReview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $development
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereDevelopment($value)
 * @property integer $development_type_id
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Payment whereDevelopmentTypeId($value)
 */
class Payment extends Model
{
    // TODO complete fillable fields
    protected $fillable = [
        'application_id', 'processing_fee_id', 'other', 'quantity',
        'check', 'pay', 'bank', 'width', 'height',
        'sum', 'slip_num', 'review', 'payment_date'
    ];

    protected $dates = ['payment_date', 'created_at', 'updated_at'];

    /**
     * Application
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fee()
    {
        return $this->belongsTo('App\Models\Data\Development_Details', 'processing_fee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function processing_fee()
    {
        $type = str_replace('billboard', 'ad', $this->application->type);
        if($type == 'ad') {
            return $this->belongsTo('App\Models\Fees\\' . ucfirst($type) . '\ServicesFee');
        }else {
            return $this->belongsTo('App\Models\Fees\\' . ucfirst($type) . '\ProcessingFee');

        }
    }

    /**
     * Get address mutator
     * @param $value
     * @return mixed
     */
    public function getSizeAttribute($value)
    {
        if (!$value) $value = '{"width":"","height":""}';
        return json_decode($value);
    }
}
