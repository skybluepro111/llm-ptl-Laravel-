<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $fillable = [
            'visit', 'location', 'direction', 'applicant', 'concessionaire',
            'officer', 'feedback', 'status', 'project_id', 'questions'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
