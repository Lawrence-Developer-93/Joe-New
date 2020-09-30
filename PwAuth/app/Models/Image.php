<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'image_info', 'project_id'];

    public function project() {
        return $this->belongsTo('App\Models\Project');
    }
}
