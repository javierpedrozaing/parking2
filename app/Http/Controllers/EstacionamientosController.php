<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEstacionamientosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\EstacionamientosRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class EstacionamientosController extends AppBaseController
{

	/** @var  EstacionamientosRepository */
	private $estacionamientosRepository;

	function __construct(EstacionamientosRepository $estacionamientosRepo)
	{
		$this->estacionamientosRepository = $estacionamientosRepo;
	}

	/**
	 * Display a listing of the Estacionamientos.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->estacionamientosRepository->search($input);

		$estacionamientos = $result[0];

		$attributes = $result[1];

		return view('estacionamientos.index')
		    ->with('estacionamientos', $estacionamientos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Estacionamientos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('estacionamientos.create');
	}

	/**
	 * Store a newly created Estacionamientos in storage.
	 *
	 * @param CreateEstacionamientosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEstacionamientosRequest $request)
	{
        $input = $request->all();

		$estacionamientos = $this->estacionamientosRepository->store($input);

		Flash::message('Estacionamientos saved successfully.');

		return redirect(route('estacionamientos.index'));
	}

	/**
	 * Display the specified Estacionamientos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$estacionamientos = $this->estacionamientosRepository->findEstacionamientosById($id);

		if(empty($estacionamientos))
		{
			Flash::error('Estacionamientos not found');
			return redirect(route('estacionamientos.index'));
		}

		return view('estacionamientos.show')->with('estacionamientos', $estacionamientos);
	}

	/**
	 * Show the form for editing the specified Estacionamientos.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$estacionamientos = $this->estacionamientosRepository->findEstacionamientosById($id);

		if(empty($estacionamientos))
		{
			Flash::error('Estacionamientos not found');
			return redirect(route('estacionamientos.index'));
		}

		return view('estacionamientos.edit')->with('estacionamientos', $estacionamientos);
	}

	/**
	 * Update the specified Estacionamientos in storage.
	 *
	 * @param  int    $id
	 * @param CreateEstacionamientosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEstacionamientosRequest $request)
	{
		$estacionamientos = $this->estacionamientosRepository->findEstacionamientosById($id);

		if(empty($estacionamientos))
		{
			Flash::error('Estacionamientos not found');
			return redirect(route('estacionamientos.index'));
		}

		$estacionamientos = $this->estacionamientosRepository->update($estacionamientos, $request->all());

		Flash::message('Estacionamientos updated successfully.');

		return redirect(route('estacionamientos.index'));
	}

	/**
	 * Remove the specified Estacionamientos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$estacionamientos = $this->estacionamientosRepository->findEstacionamientosById($id);

		if(empty($estacionamientos))
		{
			Flash::error('Estacionamientos not found');
			return redirect(route('estacionamientos.index'));
		}

		$estacionamientos->delete();

		Flash::message('Estacionamientos deleted successfully.');

		return redirect(route('estacionamientos.index'));
	}

}
