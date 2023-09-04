<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_title',
        'description',
        'address',
        'social_media',
        'google_map',
        'contact_details',
        'phone',
        'mobile_number',
        'email',
        'footer_text',
    ];
}
