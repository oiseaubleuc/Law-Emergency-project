<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $userArticles = News::where('user_id', auth()->id())->with('user')->get();
            $otherArticles = News::where('user_id', '!=', auth()->id())->with('user')->paginate(10);
        } else {
            $userArticles = collect();
            $otherArticles = News::with('user')->paginate(10);
        }

        return view('news', compact('userArticles', 'otherArticles'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        $validatedData['user_id'] = auth()->id();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image_file'] = $imagePath;
        }

        $news = News::create($validatedData);

        return redirect()->route('news')->with('success', 'News created successfully.');
    }


    public function show(News $news)
    {
        return view('show', compact('news'));
    }


    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }


    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($news->image_file) {
                Storage::disk('public')->delete($news->image_file);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image_file'] = $imagePath;
        }

        $news->update($validatedData);

        return redirect()->route('news')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        if ($news->image_file) {
            Storage::disk('public')->delete($news->image_file);
        }

        $news->delete();

        return redirect()->route('news')->with('success', 'News deleted successfully.');
    }
}

