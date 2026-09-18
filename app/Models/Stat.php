<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * A figure shown in the "My Completed Projects" section on the home page.
 */
class Stat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'label',
        'value',
        'suffix',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'value' => 'float',
        ];
    }

    /**
     * Scope to the display order used on the home page: the order they were added in.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('id');
    }

    /**
     * The value as the counter script expects it: "85" or "3.5", never "85.0".
     */
    protected function displayValue(): Attribute
    {
        return Attribute::get(fn () => rtrim(rtrim(number_format($this->value, 1, '.', ''), '0'), '.'));
    }
}
