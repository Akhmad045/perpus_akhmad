<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    Protected $table = "Admin";

    public $incrementing = "false";

    Protected $primaryKey = "AdminID";

    Protected $keyType = "string";

    Protected $guarded = [];
}
