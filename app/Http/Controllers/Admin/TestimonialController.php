<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    /**
     * List the reviews.
     */
    public function index(): View
    {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::ordered()->get(),
        ]);
    }

    /**
     * Show the form for a new review.
     */
    public function create(): View
    {
        return view('admin.testimonials.create', [
            'testimonial' => new Testimonial(['rating' => 5]),
        ]);
    }

    /**
     * Store a new review.
     */
    public function store(TestimonialRequest $request): RedirectResponse
    {
        $testimonial = new Testimonial($request->safe()->except(['avatar', 'remove_avatar']));

        if ($request->hasFile('avatar')) {
            $testimonial->avatar_path = $request->file('avatar')->store(Testimonial::DIRECTORY, Testimonial::DISK);
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('status', "Review from {$testimonial->name} added.");
    }

    /**
     * Show the form for editing a review.
     */
    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update a review.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial): RedirectResponse
    {
        $testimonial->fill($request->safe()->except(['avatar', 'remove_avatar']));

        if ($request->boolean('remove_avatar') || $request->hasFile('avatar')) {
            $testimonial->removeAvatar();
        }

        if ($request->hasFile('avatar')) {
            $testimonial->avatar_path = $request->file('avatar')->store(Testimonial::DIRECTORY, Testimonial::DISK);
        }

        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('status', "Review from {$testimonial->name} saved.");
    }

    /**
     * Delete a review and its avatar file.
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->deleteWithFile();

        return redirect()->route('admin.testimonials.index')->with('status', "Review from {$testimonial->name} deleted.");
    }
}
