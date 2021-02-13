<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Http\Requests;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class CategoryController extends AppBaseController
{
    /** @var  CategoryRepository */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the Category.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new CategoryDataTable())->get())->make(true);
        }

        return view('categories.index');
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $category = new Category();
        $category->name=$request->name;
        $category->category_id=$request->category_id;
        $category->name_lang=$request->name_lang;
        $category->description=$request->description;
        $category->description_lang=$request->description_lang;
        $category->path_blade=$request->path_blade;
        $category->link=$request->link;
        $category->active=$request->active;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/categories/', $fileName);
            $category->image = $fileName;
        }
        if($request->file('icon')!=null){
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/categories/', $fileName);
            $category->icon = $fileName;
        }
        $category->save();

        Flash::success('Category saved successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->find($id);
        $category->name=$request->name;
        $category->category_id=$request->category_id;
        $category->name_lang=$request->name_lang;
        $category->description=$request->description;
        $category->description_lang=$request->description_lang;
        $category->path_blade=$request->path_blade;
        $category->link=$request->link;
        $category->active=$request->active;

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('categories.index'));
        }

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/categories/', $fileName);
            $category->image = $fileName;
        }
        if($request->file('icon')!=null){
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/categories/icons/', $fileName);
            $category->icon = $fileName;
        }
        $category->save();


        Flash::success('Category updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);

        $category->delete();

        return $this->sendSuccess('Category deleted successfully.');
    }
}
