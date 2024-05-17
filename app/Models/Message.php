<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Attachment;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        "message",
        "sender_id",
        "receiver_id",
        "group_id",
        "conversation_id"
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, "sender_id");
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, "receiver_id");
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function attachtments()
    {
        return $this->hasMany(MessageAttachment::class);
    }
}
