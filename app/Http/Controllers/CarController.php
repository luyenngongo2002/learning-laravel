<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cars = Cars::get();
        // return view('index', ['cars'=> $cars]);

        $cars = Cars::all();
        return view('car-list', ['cars'=> $cars]);
        // return view('index', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = '';
        if($request -> hasFile('image')){
            $this->validate($request,[
                'image' =>'mimes:jpg,png,jpeg|max:2048',
            ],[
                'image.mimes'=>'Chỉ chấp nhận files ảnh',
                'image.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb',

            ]);
            $file =$request ->file(('image'));
            $name = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images');
            $file -> move($destinationPath, $name);
        }
        $this->validate($request,[
            'description'=>'required'
        ],[
            'description.reqired' =>'Bạn chưa nhập mô tả'
        ]);
        
        $car=new Cars();
        $car ->description=$request->description;
        $car->image=$name;
        $car->save();
        return redirect()->route('cars.index')->with('success','Bạn đã cập nhật thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Cars::find($id);
        return view('show' , ['car'=> $car]);
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
