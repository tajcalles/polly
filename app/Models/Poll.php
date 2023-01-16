<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $casts = [
        'start_date' => 'datetime',
        'finish_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function getStartDateAttribute()
    {
        return $this->start_date->format('M d, Y');
    }

    public function getStartTimeAttribute()
    {
        return $this->start_date->format('h:i A');
    }

    public function getEndDateAttribute()
    {
        return $this->finish_date->format('M d, Y');
    }

    public function getEndTimeAttribute()
    {
        return $this->finish_date->format('h:i A');
    }

    public function getEndDateFormatAttribute()
    {
        return $this->finish_date->diffForHumans();
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
