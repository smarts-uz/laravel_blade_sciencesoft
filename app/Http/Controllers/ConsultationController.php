<?php

namespace App\Http\Controllers;

use App\DataTables\ConsultationDataTable;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateConsultationRequest;
use App\Http\Requests\UpdateConsultationRequest;
use App\Repositories\ConsultationRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class ConsultationController extends AppBaseController
{
    /** @var  ConsultationRepository */
    private $consultationRepository;

    public function __construct(ConsultationRepository $consultationRepo)
    {
        $this->consultationRepository = $consultationRepo;
    }

    /**
     * Display a listing of the Consultation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new ConsultationDataTable())->get())->make(true);
        }
    
        return view('consultations.index');
    }

    /**
     * Show the form for creating a new Consultation.
     *
     * @return Response
     */
    public function create()
    {
        return view('consultations.create');
    }

    /**
     * Store a newly created Consultation in storage.
     *
     * @param CreateConsultationRequest $request
     *
     * @return Response
     */
    public function store(CreateConsultationRequest $request)
    {
        $input = $request->all();

        $consultation = $this->consultationRepository->create($input);

        Flash::success('Consultation saved successfully.');

        return redirect(route('consultations.index'));
    }

    /**
     * Display the specified Consultation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $consultation = $this->consultationRepository->find($id);

        if (empty($consultation)) {
            Flash::error('Consultation not found');

            return redirect(route('consultations.index'));
        }

        return view('consultations.show')->with('consultation', $consultation);
    }

    /**
     * Show the form for editing the specified Consultation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $consultation = $this->consultationRepository->find($id);

        if (empty($consultation)) {
            Flash::error('Consultation not found');

            return redirect(route('consultations.index'));
        }

        return view('consultations.edit')->with('consultation', $consultation);
    }

    /**
     * Update the specified Consultation in storage.
     *
     * @param  int              $id
     * @param UpdateConsultationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateConsultationRequest $request)
    {
        $consultation = $this->consultationRepository->find($id);

        if (empty($consultation)) {
            Flash::error('Consultation not found');

            return redirect(route('consultations.index'));
        }

        $consultation = $this->consultationRepository->update($request->all(), $id);

        Flash::success('Consultation updated successfully.');

        return redirect(route('consultations.index'));
    }

    /**
     * Remove the specified Consultation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $consultation = $this->consultationRepository->find($id);

        $consultation->delete();

        return $this->sendSuccess('Consultation deleted successfully.');
    }
}
