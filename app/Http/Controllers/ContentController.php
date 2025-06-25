<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $contents =Content::all();
        // print_r($status);

        return view('pages.user.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|string|max:50',
            'location_id' => 'required|string|max:50', 
            'header' => 'required|string',
            'text' => 'required|string',
            'pic_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pic_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pic_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'language_id' => 'required|string|max:50',
            'status' => 'required|string|max:50',
        ]);

         $pic_1 = null;
         $pic_2 = null;
         $pic_3 = null;

         if ($request->hasFile('pic_1')) {
            $file = $request->file('pic_1');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/content'), $fileName);
            $pic_1 = 'uploads/content/' . $fileName;
        }
         if ($request->hasFile('pic_2')) {
            $file = $request->file('pic_2');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/content'), $fileName);
            $pic_2 = 'uploads/content/' . $fileName;
        }
         if ($request->hasFile('pic_3')) {
            $file = $request->file('pic_3');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/content'), $fileName);
            $pic_3 = 'uploads/content/' . $fileName;
        }

        $contents = new Content();
        $contents->page_id = $request->page_id;
        $contents->location_id = $request->location_id;
        $contents->header = $request->header;
        $contents->text = $request->text;
        $contents->pic_1 = $pic_1;
        $contents->pic_2 = $pic_2;
        $contents->pic_3 =  $pic_3;
        $contents->language_id = $request->language_id;
        $contents->status = $request->status;

        if ($contents->save()) {
            return redirect()->back()->with('success', 'Content has been added successfully!');
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $Content, $id)
    {
        $status = Content::find($id);
        return view('pages.hrm.hrm_status.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $Content, $id)
    {
        $status = Content::find($id);

        return view('pages.hrm.hrm_status.update', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $Content, $id)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:200'
        ]);

        $status = Content::find($id);
        $status->name = $request->name;
        $status->description = $request->description;

        if ($status->save()) {
            return redirect('hrm_status')->with('success', "Status has been updated");
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $Content, $id)
    {

        $del = Content::destroy($id);
        if ($del) {
            return redirect('hrm_status')->with('success', "Status has been Deleted");
        }
    }
}
