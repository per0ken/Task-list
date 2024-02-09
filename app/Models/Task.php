<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static latest()
 * @property mixed $id
 */
class Task extends Model
{
    use HasFactory;
}
