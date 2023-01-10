<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'subject', 'message', 'read_at'];

    protected $dates = ['read_at'];


    /**
     * @return false|string
     */
    public function getAvatarNameAttribute()
    {
        return substr($this->name, 0, 2);
    }


    /**
     * Determine if a message has not been read.
     *
     * @return bool
     */
    public function isRead()
    {
        return $this->read_at !== null;
    }

    /**
     * Determine if a message has been read.
     *
     * @return bool
     */
    public function isNotRead()
    {
        return $this->read_at === null;
    }


    /**
     * Mark message as read
     */
    public function markAsRead()
    {
        if (is_null($this->read_at)) {
            $this->forceFill(["read_at" => $this->freshTimestamp()])->save();
        }
    }

    public function scopeUnreadMessagesCount($query)
    {
        return $query->where("read_at", null)->count();
    }

    public function scopeSentByAdmin($query)
    {
        return $query->whereNotNull("sent_by");
    }

    public function scopeReceived($query)
    {
        return $query->whereNull("sent_by");
    }
}
