<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * A client review shown in the "What Our Clients Say" carousel on the home page.
 */
class Testimonial extends Model
{
    /**
     * The disk uploaded avatars are stored on.
     */
    public const DISK = 'public';

    /**
     * The directory (on DISK) uploaded avatars are stored in.
     */
    public const DIRECTORY = 'testimonials';

    /**
     * Gradients cycled through for initial-letter avatars when no photo is uploaded.
     *
     * @var list<string>
     */
    public const AVATAR_GRADIENTS = [
        'linear-gradient(135deg, #c8956c, #a0714f)',
        'linear-gradient(135deg, #5b4fcf, #3949ab)',
        'linear-gradient(135deg, #43a047, #1b5e20)',
        'linear-gradient(135deg, #e53935, #b71c1c)',
        'linear-gradient(135deg, #ff8a5b, #e64a19)',
        'linear-gradient(135deg, #0097a7, #006064)',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'role',
        'quote',
        'rating',
        'avatar_path',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rating' => 'integer',
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
     * First letter of the client's name, used when there is no avatar photo.
     */
    protected function initial(): Attribute
    {
        return Attribute::get(fn () => Str::upper(Str::substr(trim($this->name), 0, 1)));
    }

    /**
     * Public URL of the avatar photo, or null when none was uploaded.
     */
    protected function avatarUrl(): Attribute
    {
        return Attribute::get(fn () => $this->avatar_path ? Storage::disk(self::DISK)->url($this->avatar_path) : null);
    }

    /**
     * A stable gradient for this review's initial-letter avatar.
     */
    protected function avatarGradient(): Attribute
    {
        return Attribute::get(fn () => self::AVATAR_GRADIENTS[($this->id ?? 0) % count(self::AVATAR_GRADIENTS)]);
    }

    /**
     * Delete the avatar file (if any) without deleting the record.
     */
    public function removeAvatar(): void
    {
        if ($this->avatar_path) {
            Storage::disk(self::DISK)->delete($this->avatar_path);
            $this->avatar_path = null;
        }
    }

    /**
     * Remove the avatar file along with the record.
     */
    public function deleteWithFile(): void
    {
        $this->removeAvatar();

        $this->delete();
    }
}
