<?php

namespace Thangbeo\Menu;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
	protected $table = "Menu";
	
	protected $fillable = ['title','link','image','parent_id','position','color','bold','status'];

	protected $guarded = ["id"];

	public function child()
	{
		return $this->hasMany(Menu::class, 'parent_id')->orderBy('position', 'asc');
	}

	public function activeChild() {
		return $this->hasMany(Menu::class, 'parent_id')->where('status', 1)->orderBy('position', 'asc');
	}

	public function sibling()
	{
		return $this->activeChild()->with('sibling');
	}

	public function parent() {
		return $this->belongsTo(Menu::class,'parent_id');
	}
}
