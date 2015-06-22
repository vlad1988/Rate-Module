<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Science;
use App\Organization;
use App\Method;

class RateController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $sciences = Science::orderBy('type')->get();
        $orgs = Organization::orderBy('type')->get();
        $methods = Method::orderBy('type')->get();
        return view('rate.index', compact('sciences', 'orgs', 'methods'));
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $direct = Request::input('direction');
        $type = Request::input('type');
        $unit = Request::input('unit');

        switch($direct){
            case 'science':
            $direction = new Science;
            break;
            case 'method':
            $direction = new Method;
            break;
            case 'organization':
            $direction = new Organization;
            break;
        }
        $direction->type = $type;
        $direction->unit = $unit;
        $direction->save();
        return redirect('rate/schema');
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        //
    }

    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id)
    {
        //
    }

    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        //
    }

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
        //
    }

    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
        return $id;
    }

    public function destroy_science($id)
    {
        $science = Science::find($id);
        $science->delete();
        return redirect('rate/schema');
    }

    public function destroy_method($id)
    {
        $method = Method::find($id);
        $method->delete();
        return redirect('rate/schema');
    }

    public function destroy_orgs($id)
    {
        $org = Organization::find($id);
        $method->delete();
        return redirect('rate/schema');
    }

}
