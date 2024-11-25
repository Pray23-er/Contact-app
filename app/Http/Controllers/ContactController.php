<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Comment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('contacts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Contact::create($validated);
        return redirect()->route('contacts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
{
    $comments = $contact->comments()->latest()->get();
    return view('contacts.show', compact('contact', 'comments'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
        return view('contacts.edit', compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');

    }

    /**
     * display comments with the user's name and time.
     */

    public function comments(Contact $contact)
    {
    $comments = $contact->comments()->latest()->get();
    return view('contacts.show', compact('contact', 'comments'));
    }


    /**
     * creating new comments
     */

    public function storeComment(Request $request, Contact $contact)
    {
    $request->validate([
        'comment' => 'required',
    ]);

    $comment = new Comment();
    $comment->contact_id = $contact->id;
    $comment->user_id = auth()->id();
    $comment->comment = $request->comment;
    $comment->save();
    return redirect()->back()->with('success', 'Comment added   successfully');
    }






}
