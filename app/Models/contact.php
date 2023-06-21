<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact extends Model
{
    use HasFactory;

    protected $table = "contact_info";
    protected $fillable = ["Name", "email", "subject", "message"];
    protected $primaryKey = "contactId";

    public $timestamps = false;
}
