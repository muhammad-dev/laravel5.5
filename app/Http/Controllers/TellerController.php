<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTellerRequest;
use App\Http\Requests\UpdateTellerRequest;
use App\Repositories\TellerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TellerController extends AppBaseController
{
    /** @var  TellerRepository */
    private $tellerRepository;

    public function __construct(TellerRepository $tellerRepo)
    {
        $this->tellerRepository = $tellerRepo;
    }

    /**
     * Display a listing of the Teller.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tellerRepository->pushCriteria(new RequestCriteria($request));
        $tellers = $this->tellerRepository->all();

        return view('tellers.index')
            ->with('tellers', $tellers);
    }

    /**
     * Show the form for creating a new Teller.
     *
     * @return Response
     */
    public function create()
    {
        return view('tellers.create');
    }

    /**
     * Store a newly created Teller in storage.
     *
     * @param CreateTellerRequest $request
     *
     * @return Response
     */
    public function store(CreateTellerRequest $request)
    {
        $input = $request->all();

        $teller = $this->tellerRepository->create($input);

        Flash::success('Teller saved successfully.');

        return redirect(route('tellers.index'));
    }

    /**
     * Display the specified Teller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teller = $this->tellerRepository->findWithoutFail($id);

        if (empty($teller)) {
            Flash::error('Teller not found');

            return redirect(route('tellers.index'));
        }

        return view('tellers.show')->with('teller', $teller);
    }

    /**
     * Show the form for editing the specified Teller.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teller = $this->tellerRepository->findWithoutFail($id);

        if (empty($teller)) {
            Flash::error('Teller not found');

            return redirect(route('tellers.index'));
        }

        return view('tellers.edit')->with('teller', $teller);
    }

    /**
     * Update the specified Teller in storage.
     *
     * @param  int              $id
     * @param UpdateTellerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTellerRequest $request)
    {
        $teller = $this->tellerRepository->findWithoutFail($id);

        if (empty($teller)) {
            Flash::error('Teller not found');

            return redirect(route('tellers.index'));
        }

        $teller = $this->tellerRepository->update($request->all(), $id);

        Flash::success('Teller updated successfully.');

        return redirect(route('tellers.index'));
    }

    /**
     * Remove the specified Teller from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teller = $this->tellerRepository->findWithoutFail($id);

        if (empty($teller)) {
            Flash::error('Teller not found');

            return redirect(route('tellers.index'));
        }

        $this->tellerRepository->delete($id);

        Flash::success('Teller deleted successfully.');

        return redirect(route('tellers.index'));
    }
}
