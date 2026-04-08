<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pest\Arch\Blueprint;

class Notepad extends Model
{
    /** @use HasFactory<\Database\Factories\NotepadFactory> */
    use HasFactory;

    protected $fillable = ['title', 'body'];
}
