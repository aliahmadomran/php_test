<?php

namespace ACME\Cities\Http\Controllers\Admin;

use ACME\Cities\Repositories\CitiesRepository;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class CitiesController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;
    /**
     * To hold the CitiesRepository instance
     *
     * @var \ACME\Cities\Repositories\CitiesRepository
     */
    protected   $citiesRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CitiesRepository $citiesRepository)
    {
        $this->middleware('admin');
        $this->citiesRepository = $citiesRepository;
        $this->_config = request('_config');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view($this->_config['view']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store()
    {

        $this->validate(request(), [
            'country'   => 'required',
            'city'     => 'required',
        ]);


        $page = $this->citiesRepository->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'page']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $page = $this->citiesRepository->findOrFail($id);
        return view($this->_config['view'], compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update($id)
    {
        $this->validate(request(), [
            'country'   => 'required',
            'city'     => 'required',
        ]);

        $this->citiesRepository->update(request()->all(), $id);
        session()->flash('success', 'city is updated');

        return redirect()->route($this->_config['redirect']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = $this->citiesRepository->findOrFail($id);
        $x = $page->delete();

        echo "i am here";
        if ($x) {
            session()->flash('success', 'city is  deleted');

            return response()->json(['message' => true], 200);
        } else {
            session()->flash('success', 'city is not deleted');

            return response()->json(['message' => false], 200);

        }
    }




}
