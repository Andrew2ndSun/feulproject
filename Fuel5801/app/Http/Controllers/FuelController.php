<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fuel;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        $data['fuels'] = Fuel::paginate(5);

        $data['title']='Fuels';

        //create breadcumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' =>'Home',
            'href' => url("/admin")
        );
        $data['breadcrumbs'][] = array(
            'text' => $data['title'],
            'href' => url("/admin/role"),
        );
        //'data'=>$data, 

        return view('backend.fuel.list',['data'=>$data]);
       
    }

    public function listfuel(){
        $data['fuels'] = Fuel::paginate(2);

        $data['title']='Fuels';

        //create breadcumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' =>'Home',
            'href' => url("/admin")
        );
        $data['breadcrumbs'][] = array(
            'text' => $data['title'],
            'href' => url("/admin/role"),
        );
        //'data'=>$data,
        return view('backend.fuel.listfuel',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $data['title']='Create Fuel';

        //create breadcumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' =>'Main',
            'href' => url("/admin")
        );
        $data['breadcrumbs'][] = array(
            'text' => $data['title'],
            'href' => url("/admin/fuel/create"),
        );
        $data['fuel']=array(
            'fuel_name'=>'',
            'fuel_price'=>'',
            'location'=>'',
        );
        //'data'=>$data, 


        return view('backend.fuel.add',['data'=>$data]);
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
        $fu = new Fuel;
        $fu->fuel_name = $request->fuel_name;
        $price=str_replace("$","",$request->fuel_price);
        $fu->fuel_price = $price;
        $fu->location = $request->location;
        $fu->save();
        
        return redirect('fuel')->with('messenger', 'Create Success');
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
    public function edit($fuel_id)
    {

        $data['fuel']=Fuel::find($fuel_id); 
        $data['title']='Edit Fuel';
        if($data['fuel'])
        return view('backend.fuel.edit',['data'=>$data]);
        else return redirect('fuel');

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fuel_id)
    {
        
        $fu = Fuel::find($fuel_id); 
        $fu->fuel_name = $request->fuel_name;
        $price=str_replace("$","",$request->fuel_price);
        $fu->fuel_price = $price;
        $fu->location = $request->location; 

        // save to database
        $fu->save();

        return redirect('fuel')->with('messenger', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delete($fuel_id)
    {
        $fu = Fuel::find($fuel_id);
        $fu->delete(); 
        return redirect('fuel')->with('messenger', 'Delete Success');
        
    }

    public function destroy($fuel_id)
    {
        $fu = Fuel::find($fuel_id); 
        return redirect('fuel')->with('messenger', 'Delete Success');
        
    }
}
