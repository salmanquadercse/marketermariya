<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * A screenshot shown in the "My Creative Works" carousel on the home page.
 */
class CreativeWork extends Model
{
    /**
     * The disk uploaded screenshots are stored on.
     */
    public const DISK = 'public';

    /**
     * The directory (on DISK) uploaded screenshots are stored in.
     */
    public const DIRECTORY = 'creative-works';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'image_path',
        'sort_order',
    ];

    /**
     * Scope to the display order used by the carousel.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    /**
     * Public URL of the stored screenshot.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::get(fn () => Storage::disk(self::DISK)->url($this->image_path));
    }

    /**
     * Remove the stored screenshot file along with the record.
     */
    public function deleteWithFile(): void
    {
        Storage::disk(self::DISK)->delete($this->image_path);

        $this->delete();
    }
}
