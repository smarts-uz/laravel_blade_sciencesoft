<?php

namespace App\Http\Controllers;

use App\DataTables\BlogDataTable;
use App\Http\Requests;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Datatables;

class BlogController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of((new BlogDataTable())->get())->make(true);
        }


        return view('blogs.index');
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Category::where('category_id', '=', 21)->whereNull('deleted_at')->get();
        $solutionstags = Category::where('category_id', '=', 30)->whereNull('deleted_at')->get();
        $platformstags = Category::where('category_id', '=', 40)->whereNull('deleted_at')->get();
        $techstags = Category::where('category_id', '=', 47)->whereNull('deleted_at')->get();

        return view('blogs.create', ['tags'=>$tags, 'solutionstags'=>$solutionstags , 'platformstags'=>$platformstags, 'techstags'=>$techstags ]);

    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        $blog = new Blog();
        $blog->user_id=$request->user_id;
        $blog['tag'] = json_encode($request['tag']);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->description_text=$request->description_text;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/blogs/', $fileName);
            $blog->image = $fileName;
        }

        $blog->save();

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->find($id);
        $tags = Category::where('category_id', '=', 21)->whereNull('deleted_at')->get();
        $solutionstags = Category::where('category_id', '=', 30)->whereNull('deleted_at')->get();
        $platformstags = Category::where('category_id', '=', 40)->whereNull('deleted_at')->get();
        $techstags = Category::where('category_id', '=', 47)->whereNull('deleted_at')->get();

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit', ['tags'=>$tags, 'solutionstags'=>$solutionstags , 'platformstags'=>$platformstags, 'techstags'=>$techstags ])->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param  int              $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $blog = $this->blogRepository->find($id);
        $blog->user_id=$request->user_id;
        $blog['tag'] = json_encode($request['tag']);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->description_text=$request->description_text;

        if($request->file('image')!=null){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/blogs/', $fileName);
            $blog->image = $fileName;
        }

        $blog->save();


        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        $blog->delete();

        return $this->sendSuccess('Blog deleted successfully.');
    }

}
