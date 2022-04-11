<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
	// use HasFactory;

	public $table = 'clubs';

	protected $fillable = [
		'stadiums_id', 'name', 'logo', 'url', 'thropy', 'created_at', 'updated_at'
	];
}
