<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        "event_title",
        "event_date",
        "event_st_time",
        "event_end_time",
        "event_content",
        "event_is_active",
        "event_banner_path",
    ];
}
