<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Request;
use App\Worker;
use App\Report;

class WorkerController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('worker.create');
    }

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $name = Request::input('name');
        $surnname = Request::input('surname');
        $patronymic = Request::input('patronymic');
        $place = Request::input('place');

        $worker = new Worker;
        $worker->name = $name;
        $worker->surname = $surnname;
        $worker->patronymic = $patronymic;
        $worker->place = $place;
        $worker->save();

        return redirect('home');
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
        $worker = Worker::find($id);
        $reports = Report::where('worker_id', '=', $id)->orderBy('type')->get();
        return view('worker.index', compact('worker', 'reports'));
    }

    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $worker = Worker::find($id);
        return view('worker.update', compact('worker', 'id'));
    }

    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update()
    {
        $worker_id = Request::input('worker_id');

        $worker = Worker::find($worker_id);

        $name = Request::input('name');
        $surnname = Request::input('surname');
        $patronymic = Request::input('patronymic');
        $place = Request::input('place');

        $worker->name = $name;
        $worker->surname = $surnname;
        $worker->patronymic = $patronymic;
        $worker->place = $place;
        $worker->save();
        return redirect('home');
    }

    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
        $worker = Worker::find($id);   
        $worker->delete();
        return redirect('home');
    }

}
