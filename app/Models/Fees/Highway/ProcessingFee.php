<?php

namespace App\Models\Fees\Highway;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

/**
 * App\Models\Fees\Highway\ProcessingFee
 *
 * @property integer $id
 * @property integer $development_type_id
 * @property integer $development_detail_id
 * @property integer $contractor_category_id
 * @property integer $amount
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereDevelopmentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereDevelopmentDetailId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereContractorCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereAmount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Fees\Highway\ProcessingFee whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Data\Development_Type $developmentType
 * @property-read \App\Models\Data\Development_Details $developmentDetail
 * @property-read \App\Models\Data\Contractor_Category $contractorCategory
 */
class ProcessingFee extends Model
{
    use CrudTrait;
    protected $table = 'highway_processing_fees';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function developmentType()
    {
        return $this->belongsTo('App\Models\Data\Development_Type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function developmentDetail()
    {
        return $this->belongsTo('App\Models\Data\Development_Details');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contractorCategory()
    {
        return $this->belongsTo('App\Models\Data\Contractor_Category');
    }

    /**
     * @return string
     */
    public function developmentTypeName()
    {
        return $this->developmentType->name;
    }

    /**
     * @return string
     */
    public function developmentDetailName()
    {
        return $this->developmentDetail->name;
    }

    /**
     * @return string
     */
    public function contractorCategoryName()
    {
        return $this->contractorCategory->name;
    }

}
