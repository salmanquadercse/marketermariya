<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CreativeWork;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreativeWorkController extends Controller
{
    /**
     * List the uploaded screenshots alongside the upload form.
     */
    public function index(): View
    {
        return view('admin.works.index', [
            'works' => CreativeWork::ordered()->get(),
        ]);
    }

    /**
     * Store a newly uploaded screenshot.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['nullable', 'string', 'max:120'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $path = $request->file('image')->store(CreativeWork::DIRECTORY, CreativeWork::DISK);

        CreativeWork::create([
            'title' => $validated['title'] ?? null,
            'image_path' => $path,
            'sort_order' => (int) CreativeWork::max('sort_order') + 1,
        ]);

        return redirect()->route('admin.works.index')->with('status', 'Screenshot uploaded.');
    }

    /**
     * Delete a screenshot and its file.
     */
    public function destroy(CreativeWork $work): RedirectResponse
    {
        $work->deleteWithFile();

        return redirect()->route('admin.works.index')->with('status', 'Screenshot deleted.');
    }
}
