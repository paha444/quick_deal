<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Tasks extends Model
{
	use CrudTrait;

    protected $table = "tasks";
    protected $primaryKey = "id";

    protected $guarded = ['id'];
}
