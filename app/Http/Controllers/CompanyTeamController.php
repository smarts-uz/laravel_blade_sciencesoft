<?php

namespace App\Http\Controllers;

use App\DataTables\CompanyTeamDataTable;
use App\Http\Requests;
use App\Models\CompanyTeam;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCompanyTeamRequest;
use App\Http\Requests\UpdateCompanyTeamRequest;
use App\Repositories\CompanyTeamRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class CompanyTeamController extends AppBaseController
{
    /** @var  CompanyTeamRepository */
    private $companyTeamRepository;

    public function __construct(CompanyTeamRepository $companyTeamRepo)
    {
        $this->companyTeamRepository = $companyTeamRepo;

    }

    /**
     * Display a listing of the CompanyTeam.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new CompanyTeamDataTable())->get())->make(true);
        }
        return view('company_teams.index');
    }

    /**
     * Show the form for creating a new CompanyTeam.
     *
     * @return Response
     */
    public function create()
    {
        return view('company_teams.create');
    }

    /**
     * Store a newly created CompanyTeam in storage.
     *
     * @param CreateCompanyTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyTeamRequest $request)
    {
        $companyTeam = new CompanyTeam();
        $companyTeam->name=$request->name;
        $companyTeam->job=$request->job;
        $companyTeam->description=$request->description;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/teams/', $fileName);
            $companyTeam->image = $fileName;
        }
        $companyTeam->save();

        Flash::success('Company Team saved successfully.');

        return redirect(route('companyTeams.index'));
    }

    /**
     * Display the specified CompanyTeam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyTeam = $this->companyTeamRepository->find($id);

        if (empty($companyTeam)) {
            Flash::error('Company Team not found');

            return redirect(route('companyTeams.index'));
        }

        return view('company_teams.show')->with('companyTeam', $companyTeam);
    }

    /**
     * Show the form for editing the specified CompanyTeam.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyTeam = $this->companyTeamRepository->find($id);

        if (empty($companyTeam)) {
            Flash::error('Company Team not found');

            return redirect(route('companyTeams.index'));
        }

        return view('company_teams.edit')->with('companyTeam', $companyTeam);
    }

    /**
     * Update the specified CompanyTeam in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyTeamRequest $request)
    {
        $companyTeam = $this->companyTeamRepository->find($id);
        $companyTeam->name=$request->name;
        $companyTeam->job=$request->job;
        $companyTeam->description=$request->description;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/teams/', $fileName);
            $companyTeam->image = $fileName;
        }
        $companyTeam->save();

        if (empty($companyTeam)) {
            Flash::error('Company Team not found');

            return redirect(route('companyTeams.index'));
        }

        //$companyTeam = $this->companyTeamRepository->update($request->all(), $id);

        Flash::success('Company Team updated successfully.');

        return redirect(route('companyTeams.index'));
    }

    /**
     * Remove the specified CompanyTeam from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyTeam = $this->companyTeamRepository->find($id);

        $companyTeam->delete();

        return $this->sendSuccess('Company Team deleted successfully.');
    }
}
