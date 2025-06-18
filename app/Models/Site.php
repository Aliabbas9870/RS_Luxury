<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    // One site has many pages
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
public function faqs()
{
    return $this->hasMany(Faq::class);
}

}
