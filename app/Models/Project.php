<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property integer $id
 * @property integer $application_id
 * @property string $slug
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Application $application
 * @property-read \App\Models\Data\Inspection $inspection
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $num
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Project whereNum($value)
 */
class Project extends Model
{
    protected $fillable = [
        'application_id', 'slug', 'num', 'status', 'form',
        'documents'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function application()
    {
        return $this->belongsTo('App\Models\Application');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inspection()
    {
        return $this->hasOne('App\Models\Data\Inspection');
    }

    /**
     * @param $query
     * @return Project|\Illuminate\Database\Query\Builder
     */
    public function scopeBPO($query)
    {
        $responsibility = Responsibility::whereName('application_acceptance')
            ->orWhere('name', 'generate_work_lettter')
            ->orWhere('name', 'project_review')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)
            ->get())->pluck('application_id');
        $applications = Application::select('id')
            ->whereIn('id', $ids)->where('type','highway')
            ->get()->pluck('id');
        if($applications->count() > 0) {
            return $query->whereIn('application_id', $applications);
        }else {
            return collect([]);
        }
    }

    /**
     * @param $query
     * @return Project|\Illuminate\Database\Query\Builder
     */
    public function scopeBUT($query)
    {
        $responsibility = Responsibility::whereName('application_acceptance')
            ->orWhere('name', 'generate_work_lettter')
            ->orWhere('name', 'project_review')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)
            ->get())->pluck('application_id');

        $applications = Application::select('id')
            ->whereIn('id', $ids)->where('type','billboard')
            ->get()->pluck('id');
        if($applications->count() > 0) {
            return $query->whereIn('application_id', $applications);
        }else {
            return collect([]);
        }
    }

    /**
     * @param $query
     * @return Project|\Illuminate\Database\Query\Builder
     */
    public function scopePW($query)
    {
        $responsibility = Responsibility::whereName('technical_review')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)
            ->get())->pluck('application_id');

        $applications = Application::select('id')
            ->whereIn('id', $ids)->get()->pluck('id');

        if($applications->count() > 0) {
            return $query->whereApplicationId($applications);
        }else {
            return collect([]);
        }
    }

    /**
     * Get documents
     * @param $value
     * @return static
     */
    public function getDocumentsAttribute($value)
    {
        if ($value == '[]') $value = '{}';
        $json = json_decode($value, true);
        return collect($json);
    }

    /**
     * Set documents
     * @param $value
     */
    public function setDocumentsAttribute($value)
    {
        $this->attributes['documents'] = json_encode($value);
    }

    /**
     * Get meeting
     * @param $value
     * @return static
     */
    public function getMeetingAttribute($value)
    {
        if ($value == '[]') $value = '{}';
        $json = json_decode($value);
        return $json;
    }

    /**
     * Set meeting
     * @param $value
     */
    public function setMeetingAttribute($value)
    {
        $this->attributes['meeting'] = json_encode($value);
    }

    /**
     * Get KKR
     * @param $value
     * @return static
     */
    public function getKkrAttribute($value)
    {
        if ($value == '[]') $value = '{}';
        $json = json_decode($value);
        return $json;
    }

    /**
     * Set meeting
     * @param $value
     */
    public function setKkrAttribute($value)
    {
        $this->attributes['kkr'] = json_encode($value);
    }
}
