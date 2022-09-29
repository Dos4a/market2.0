<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with(['users', 'products'])->orderBy('id')->paginate(15);

        return view('comment.index', [
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('comment.create',[
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentStoreRequest $request)
    {
        $comment = $request->validated();

        Comment::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->route('comment.index')->with('successCreate', 'You create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comment = Comment::find($comment['id']);
        $products = Product::all();

        return view('comment.update', [
            'comment' => $comment,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentUpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();

        $comment->update($data);

        return redirect()->route('comment.index')->with('successUpdate', 'You update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->with('successDelete', 'You delete successfuly');
    }
}
