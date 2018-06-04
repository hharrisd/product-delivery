<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use function PhpParser\filesInDir;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::where('user_id', auth()->id())->get();

        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
            'address'=>'required',
            'lat'=>'required',
            'lng'=>'required',
            'city'=>'required',
        ]);

        Store::create(
            [
                'name'=> request('name'),
                'description'=> request('description'),
                'address'=> request('address'),
                'lat'=> request('lat'),
                'lng'=> request('lng'),
                'city'=> request('city'),
                'user_id'=>auth()->id()
            ]);

        return redirect('/stores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return view('stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view('stores.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
            'address'=>'required',
            'lat'=>'required',
            'lng'=>'required',
            'city'=>'required',
        ]);

        //$store = Store::find($store);

        $store->name = request('name');
        $store->description = request('description');
        $store->address = request('address');
        $store->lat = request('lat');
        $store->lng = request('lng');
        $store->city = request('city');
        $store->user_id = auth()->id();
        //dd($store);
        $store->save();

        return redirect('/stores/'.$store->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();

        return redirect('stores/');
    }
}
