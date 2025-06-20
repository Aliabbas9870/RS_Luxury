<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    // Each page belongs to one site
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
