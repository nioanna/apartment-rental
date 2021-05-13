<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->input("searchName") != null ){
            return $this->search($request);
        }else{
             return auth()->user()->apartments()->get();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'city'=>'required',
            'street'=>'required',
            'square_footage'=>'required',
            'rooms_num'=>'required',
            'parking'=>'required',
        ]);

        auth()->user()->apartments()->create($request->all());
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return Apartment::findOrFail($request->id);
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
        $apartment = Apartment::findOrFail($id);
        $apartment->update($request->all());
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Apartment::destroy($request->id); 
        return redirect('/dashboard');
    }
    public function search(Request $request) {
        $city = $request->input("searchName");
        return auth()->user()->apartments()->where('city','like','%'.$city.'%')->get();
    }

    public function showUpdate(Request $request) {
        $apartment = Apartment::findOrFail($request->id);
        return view('update',[
            'apartment'=>$apartment
        ]);
    }
}
