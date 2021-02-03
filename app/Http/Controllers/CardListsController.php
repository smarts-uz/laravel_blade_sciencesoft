<?php

namespace App\Http\Controllers;

use App\DataTables\CardListsDataTable;
use App\Http\Requests;
use App\Models\Blog;
use App\Models\CardLists;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCardListsRequest;
use App\Http\Requests\UpdateCardListsRequest;
use App\Repositories\CardListsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class CardListsController extends AppBaseController
{
    /** @var  CardListsRepository */
    private $cardListsRepository;

    public function __construct(CardListsRepository $cardListsRepo)
    {
        $this->cardListsRepository = $cardListsRepo;
    }

    /**
     * Display a listing of the CardLists.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new CardListsDataTable())->get())->make(true);
        }

        return view('card_lists.index');
    }

    /**
     * Show the form for creating a new CardLists.
     *
     * @return Response
     */
    public function create()
    {
        return view('card_lists.create');
    }

    /**
     * Store a newly created CardLists in storage.
     *
     * @param CreateCardListsRequest $request
     *
     * @return Response
     */
    public function store(CreateCardListsRequest $request)
    {
        $cardLists = new CardLists();
        $cardLists->title=$request->title;
        $cardLists->sub_title=$request->sub_title;
        $cardLists->description=$request->description;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/cardLists/', $fileName);
            $cardLists->image = $fileName;
        }

        $cardLists->save();

        Flash::success('Card Lists saved successfully.');

        return redirect(route('cardLists.index'));
    }

    /**
     * Display the specified CardLists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cardLists = $this->cardListsRepository->find($id);

        if (empty($cardLists)) {
            Flash::error('Card Lists not found');

            return redirect(route('cardLists.index'));
        }

        return view('card_lists.show')->with('cardLists', $cardLists);
    }

    /**
     * Show the form for editing the specified CardLists.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cardLists = $this->cardListsRepository->find($id);

        if (empty($cardLists)) {
            Flash::error('Card Lists not found');

            return redirect(route('cardLists.index'));
        }

        return view('card_lists.edit')->with('cardLists', $cardLists);
    }

    /**
     * Update the specified CardLists in storage.
     *
     * @param  int              $id
     * @param UpdateCardListsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCardListsRequest $request)
    {
        $cardLists = $this->cardListsRepository->find($id);
        $cardLists->title=$request->title;
        $cardLists->sub_title=$request->sub_title;
        $cardLists->description=$request->description;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/cardLists/', $fileName);
            $cardLists->image = $fileName;
        }

        $cardLists->save();

        if (empty($cardLists)) {
            Flash::error('Card Lists not found');

            return redirect(route('cardLists.index'));
        }

        Flash::success('Card Lists updated successfully.');

        return redirect(route('cardLists.index'));
    }

    /**
     * Remove the specified CardLists from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cardLists = $this->cardListsRepository->find($id);

        $cardLists->delete();

        return $this->sendSuccess('Card Lists deleted successfully.');
    }
}
