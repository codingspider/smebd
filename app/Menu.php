<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
<<<<<<< HEAD
   protected $table = 'menus';
    
    public function parent() {
    
    return $this->hasOne('App\Menu', 'id', 'parent_id')->orderBy('parent_id');
    
    }
    
    public function children() {
    
    return $this->hasMany('App\Menu', 'parent_id', 'id')->orderBy('parent_id');
    
    }
    
    public static function tree() {
    
    return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', '0')->orderBy('parent_id')->get();
    
    }

=======
    protected $table = 'menus';
 
    public function parent()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }
 
    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
}
