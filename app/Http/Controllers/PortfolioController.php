<?php

namespace App\Http\Controllers;

use App\DataTables\PortfolioDataTable;
use App\Http\Requests;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Repositories\PortfolioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class PortfolioController extends AppBaseController
{
    /** @var  PortfolioRepository */
    private $portfolioRepository;

    public function __construct(PortfolioRepository $portfolioRepo)
    {
        $this->portfolioRepository = $portfolioRepo;
    }

    /**
     * Display a listing of the Portfolio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new PortfolioDataTable())->get())->make(true);
        }

        return view('portfolios.index');
    }

    /**
     * Show the form for creating a new Portfolio.
     *
     * @return Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created Portfolio in storage.
     *
     * @param CreatePortfolioRequest $request
     *
     * @return Response
     */
    public function store(CreatePortfolioRequest $request)
    {
        $portfolio = new Portfolio();
        $portfolio->name=$request->name;
        $portfolio->title=$request->title;
        $portfolio->sub_title=$request->sub_title;
        $portfolio->blade_link=$request->blade_link;
        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/portfolios/', $fileName);
            $portfolio->image = $fileName;
        }
        $portfolio->save();

        Flash::success('Portfolio saved successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified Portfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.show')->with('portfolio', $portfolio);
    }

    /**
     * Show the form for editing the specified Portfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified Portfolio in storage.
     *
     * @param  int              $id
     * @param UpdatePortfolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePortfolioRequest $request)
    {
        $portfolio = $this->portfolioRepository->find($id);
        $portfolio->name=$request->name;
        $portfolio->title=$request->title;
        $portfolio->sub_title=$request->sub_title;
        $portfolio->blade_link=$request->blade_link;
        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/portfolios/', $fileName);
            $portfolio->image = $fileName;
        }
        $portfolio->save();

        if (empty($portfolio)) {
            Flash::error('Portfolio not found');

            return redirect(route('portfolios.index'));
        }

        Flash::success('Portfolio updated successfully.');

        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified Portfolio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        $portfolio->delete();

        return $this->sendSuccess('Portfolio deleted successfully.');
    }
}
