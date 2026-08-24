<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeHero;
use Illuminate\Support\Facades\Storage;

class HomeHeroController extends Controller
{
    // Show edit form
    public function edit()
    {
        $hero = HomeHero::first(); // First banner
        return view('admin.home_hero.edit', compact('hero'));
    }

    // Update banner
    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'subheading' => 'required|string|max:500',
            'button1_text' => 'required|string|max:50',
            'button1_link' => 'required|url|max:255',
            'button2_text' => 'nullable|string|max:50',
            'button2_link' => 'nullable|url|max:255',
          'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:40960', // 40 MB
        ]);

        $hero = HomeHero::first() ?? new HomeHero();

        // Upload image
        if ($request->hasFile('image')) {
            // Delete old image
            if ($hero->image && Storage::disk('public')->exists(str_replace('storage/', '', $hero->image))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $hero->image));
            }

            $path = $request->file('image')->store('hero', 'public');
            $hero->image = 'storage/' . $path;
        }

        // Update other fields
        $hero->heading = $request->heading;
        $hero->subheading = $request->subheading;
        $hero->button1_text = $request->button1_text;
        $hero->button1_link = $request->button1_link;
        $hero->button2_text = $request->button2_text;
        $hero->button2_link = $request->button2_link;

        $hero->save();

        return back()->with('success', 'Home banner updated successfully');
    }
}
