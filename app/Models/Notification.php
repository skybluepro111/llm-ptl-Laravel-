<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Notification
 *
 * @property integer $id
 * @property string $department
 * @property integer $application_id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Application $application
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereDepartment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification bPO()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification bKPA()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification pW()
 * @mixin \Eloquent
 */
class Notification extends Model
{

    protected $fillable = ['department', 'application_id', 'status'];

    /**
     * Application
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }

    /**
     * Get notifications for BPO department
     * @param $query
     * @return mixed
     */
    public function scopeBPO($query)
    {
        return $query->whereDepartment('bpo')->get();
    }

    /**
     * Get notifications for BUT department
     * @param $query
     * @return mixed
     */
    public function scopeBUT($query)
    {
        return $query->whereDepartment('but')->get();
    }

    /**
     * Get notifications for BKPA department
     * @param $query
     * @return mixed
     */
    public function scopeBKPA($query)
    {
        return $query->whereDepartment('bkpa')->get();
    }

    /**
     * Get notifications for BKPA department
     * @param $query
     * @return mixed
     */
    public function scopePW($query)
    {
        return $query->whereDepartment('pw')->get();
    }

}
