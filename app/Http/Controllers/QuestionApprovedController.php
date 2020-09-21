<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Product\ProductComments;

class QuestionApprovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pendingProductComments   = ProductComments::with('user', 'product');

        if (Auth::user()->user_type == 2) {

            $pendingProductComments = $pendingProductComments->where('vendor_id', '=', Auth::user()->id);
        }

        $pendingProductComments     = $pendingProductComments->where('reply_for_id', '=', null)->where('status', 0)->paginate(20);
        return view('backend.product-question-approved.index', compact('pendingProductComments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'comments'            => 'required',
            ],
            [
                'comments.required'   => 'Reply Something',
            ]
        );

        $pendingProductComments          = ProductComments::find($request->id);
        $pendingProductComments->status  = 1;

        $replyComments                   = new ProductComments();
        $replyComments                   = new ProductComments();
        $replyComments->product_id       = $request->product_id;
        $replyComments->user_id          = $request->user_id;
        $replyComments->reply_for_id     = $request->reply_for_id;
        $replyComments->comments         = $request->comments;
        $replyComments->status           = 1;

        if ($pendingProductComments->save() && $replyComments->save()) {
            session()->flash('success', 'Question Answered Approved');
            return redirect()->route("approved-question.index");
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendingProductComments   = ProductComments::with('user', 'product')->find($id);
        return view('backend.product-question-approved.edit', compact('pendingProductComments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendingProductComments = ProductComments::find($id);

        if ($pendingProductComments->delete()) {
            session()->flash('success', 'Question Delated');
            return redirect()->back();
        } else {
            session()->flash('error', 'Something Wrong');
            return redirect()->back();
        }
    }
}
