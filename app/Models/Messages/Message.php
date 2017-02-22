<?php
namespace App\Models\Messages;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Models\Messages\Message
 *
 * @property integer $id
 * @property string $message
 * @property boolean $is_seen
 * @property boolean $deleted_from_sender
 * @property boolean $deleted_from_receiver
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $project_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $time_ago
 * @property-read \App\Models\Application $conversation
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereIsSeen($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereDeletedFromSender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereDeletedFromReceiver($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereApplicationId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Messages\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{

    protected $table = 'messages';

    public $timestamps = true;
    public $fillable = ['message',
        'is_seen', 'deleted_from_sender',
        'deleted_from_receiver',
        'user_id', 'application_id', 'project_id'];

    public function getTimeAgoAttribute()
    {
        $date = new Carbon($this->attributes['created_at']);
        $now = $date->now();
        return $date->diffForHumans($now, true);
    }

    public function conversation()
    {
        return $this->belongsTo('App\Models\Application');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
