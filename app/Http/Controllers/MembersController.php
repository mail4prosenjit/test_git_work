<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;


class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Members::latest()->paginate(5);

        return view('adminView.pages.allMembersData', compact('data'))
        ->with('i', (request()->input('page',1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminView.pages.createMembers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([

            'frist_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'email' => 'required',
             'fees' => 'required'
        ]);

        $image = $request->file('image');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('backEnd/images'), $new_name);

        $field_data = array(

            'frist_name' => $request->frist_name,
            'last_name' => $request->last_name,
            'designation' => $request->designation,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'description' => $request->description,
            'fees' => $request->fees,
            'image' => $new_name
        );

        Members::create($field_data);
        return redirect('members');
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
        //
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
        //
    }
}
