<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class Development_Details extends Model
{
    use CrudTrait;

    protected $fillable = ['name', 'development_type_id'];

    private $type;

    /**
     * @param $query
     * @param $id
     * @param $type
     * @param $contractor_category_id
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function scopeFees($query, $id, $type, $contractor_category_id)
    {
        $this->type = $type;
        return $query->whereDevelopmentTypeId($id)
            ->with(array('processing_fees' => function ($query) use ($type, $contractor_category_id) {
                $query->where($type . '_processing_fees.contractor_category_id', $contractor_category_id);
            }))->get();
    }

    /**
     * @return mixed
     */
    public function development_type()
    {
        return $this->belongsTo('App\Models\Data\Development_Type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function processing_fees()
    {
        switch ($this->type) {
            case 'highway':
                return $this->hasMany('App\Models\Fees\Highway\ProcessingFee', 'development_detail_id');
                break;
            case 'ad':
                return $this->hasMany('App\Models\Fees\Ad\ProcessingFee', 'development_detail_id');
                break;
        }

    }

    /**
     * @param $type
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services_fees($type)
    {
        switch ($type) {
            case 'highway':
                return $this->hasMany('App\Models\Fees\Highway\ServicesFee', 'development_detail_id');
                break;
            case 'ad':
                return $this->hasMany('App\Models\Fees\Ad\ServicesFee', 'development_detail_id');
                break;
        }

    }
}
