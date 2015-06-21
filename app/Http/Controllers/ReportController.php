<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Science;
use App\Organization;
use App\Method;


class ReportController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index($id)
    {
        return view('report.index', compact('id'));
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $type = Request::input('type');
        $worker_id = Request::input('worker_id');

        return $type;
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
    public function show()
    {
        $direct = Request::input('direction');
        if (Request::ajax())
        {
            switch($direct){
                case 'science':
                $direction = Science::orderBy('type')->get();
                break;
                case 'method':
                $direction = Method::orderBy('type')->get();
                break;
                case 'organization':
                $direction = Organization::orderBy('type')->get();
                break;
            }
            return $direction;
        }

        return $direct;
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
        //
    }

}
