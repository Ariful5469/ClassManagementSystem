<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Display Comments and Form
    public function index()
{
    $userType = Auth::user()->user_type; // Get the user type
    $comments = Comment::all();  // Retrieve all comments
    
    // Return view with comments
    return view('comments.index', compact('comments'));
}

    
    // Store Comment
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Only students can post comments
        if (Auth::user()->user_type != 'student') {
            return redirect()->back()->with('error', 'Only students can post comments.');
        }

        // Save the comment with the authenticated user's ID
        Comment::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return back()->with('success', 'Comment posted successfully!');
    }
}
