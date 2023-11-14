<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\Mst_site;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($mst_site_id)
    {
        // 該当キャンプサイトの今月のデータを取得
        date_default_timezone_set('Asia/Tokyo');
        $now_year = date("Y");
        $now_month = date("m");
        $reserves = Reserve::where('mst_site_id','=',$mst_site_id)->whereYear('date',$now_year)->whereMonth('date',$now_month)->pluck('date')->toArray();


        $params = [
            'reserves'=>$reserves,
            'mst_site'=>$mst_site = Mst_site::find($mst_site_id),
            'user_id'=>$id = auth()->id()
        ];
        return view('reserves.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($mst_site_id,$date)
    { 
        //
        $params = [
            'reserves'=>$reserves = new Reserve,
            'mst_site'=>$mst_site = Mst_site::find($mst_site_id),
            'user_id'=>$id = auth()->id() ? auth()->id() : 1,
            'date'=>$date
        ];
        return view('reserves.create',$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reserve::create($request->all());

        $mst_site_id = $request->mst_site_id;
        return redirect(route('reserves.index',$mst_site_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function show(Reserve $reserve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reserve = Reserve::find($id);
        return view('reserves.edit',['reserve'=>$reserve]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserve $reserve)
    {
        //
        $reserve->update($request->all());
        return redirect(route('reserves.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserve  $reserve
     * @return \Illuminate\Http\Response
     */
    public function softDestroy($id)
    {
        //
        reserve::find($id)->delete();
        return redirect(route('reserves.create'));
    }
}
