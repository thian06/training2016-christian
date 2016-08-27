<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    
	public $table = "noticias";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "title",
		"text"
	];

	public static $rules = [
	    "title" => "required",
		"text" => "required"
	];

}
