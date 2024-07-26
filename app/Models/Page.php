<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'content', "slug"];

    public $translatable = ['title','content'];


    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function subPages()
    {
        return $this->hasMany(SubMenu::class);
    }
}
