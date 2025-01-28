<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shopping extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(int $value) => $value / 100,
            set: fn(int|float $value) => $value * 100
        );
    }

    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->quantity * $this->value
        );
    }
}
