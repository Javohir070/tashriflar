<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SubMenu extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['page_id', 'menu_id', "name"];

    public $translatable = ['name'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
