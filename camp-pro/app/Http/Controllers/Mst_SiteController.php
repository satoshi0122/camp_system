<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mst_site;

class Mst_SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //リポジトリで表記するんや今後
        $mst_sites = Mst_Site::all();
        return view('mst_sites.index',['mst_sites'=>$mst_sites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $mst_site = new Mst_site;
        return view('mst_sites.create',['mst_site'=>$mst_site]);
        // return view('mst_sites.create');
        
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
        $mst_site = Mst_site::create($request->all());
        // $book = Book::create($request->all());
        return redirect(route('mst_sites.index'));
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
        // dd($mst_site);
        $mst_site = Mst_site::find($id);
        return view('mst_sites.edit',['mst_site'=>$mst_site]);
        // return view('mst_sites.index',['mst_sites'=>$mst_sites]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mst_site $mst_site)
    {
        //
        // $mst_site = Mst_site::find($id);
        // Mst_site::updete($request->all);
        // redirect('mst_sites.edit',['mst_site'=>$mst_site]);

        $mst_site->update($request->all());
        return redirect(route('mst_sites.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mindestroy($id)
    {
        // $mst_site = Mst_site::find($id);
        // dd($mst_site);
        // dd(now());
        // $aa = now();
        // $mst_site->update(['deleted_at' => $aa]);
        mst_site::find($id)->delete();
        return redirect(route('mst_sites.index'));
    }
}
