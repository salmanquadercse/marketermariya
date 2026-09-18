<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StatRequest;
use App\Models\Stat;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StatController extends Controller
{
    /**
     * List the stats with inline edit forms and an add form.
     */
    public function index(): View
    {
        return view('admin.stats.index', [
            'stats' => Stat::ordered()->get(),
        ]);
    }

    /**
     * Add a new stat to the end of the list.
     */
    public function store(StatRequest $request): RedirectResponse
    {
        Stat::create($request->validated());

        return redirect()->route('admin.stats.index')->with('status', 'Stat added.');
    }

    /**
     * Update a stat's title, value or suffix.
     */
    public function update(StatRequest $request, Stat $stat): RedirectResponse
    {
        $stat->update($request->validated());

        return redirect()->route('admin.stats.index')->with('status', "\"{$stat->label}\" saved.");
    }

    /**
     * Remove a stat.
     */
    public function destroy(Stat $stat): RedirectResponse
    {
        $stat->delete();

        return redirect()->route('admin.stats.index')->with('status', "\"{$stat->label}\" deleted.");
    }
}
