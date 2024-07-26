<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'page_id'];

    public $translatable = ['name'];

    public function page()
    {
       return $this->belongsTo(Page::class);
    }
    public function submenu()
    {
       return $this->hasMany(SubMenu::class);
    }
    public function submenus($id){

      return SubMenu::where('menu_id', $id)->get();

  }

    public function getSlug($id){

      $result = Page::where('id', $id)->get('slug');

      return $result[0]->slug;
  }
}
