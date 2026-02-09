<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'status',
        'priority',
        'assigned_to'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignedAdmin()
    {
        return $this->belongsTo(Admin::class, 'assigned_to');
    }

    public function messages()
    {
        return $this->hasMany(TicketMessage::class, 'ticket_id');
    }
}
