@extends('layouts.app')
@section('title')
    {{ @translate_lang("Edit Category")  }}
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ @translate_lang("Edit Category")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('categories.index') }}"  class="btn btn-primary">{{ @translate_lang("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12 col-sm-12">
                         <div class="card">
                             <div class="card-body ">

                                 <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <!-- Name Field -->
                                         <div class="row">
                                         <div class="form-group col-sm-6">
                                             <label for="name">{{ @translate_lang("Name")  }}</label>
                                             <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                                         </div>

                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="name_lang">{{ @translate_lang("Name Lang")  }}</label>
                                             <input type="text" class="form-control" id="name_lang" name="name_lang" value="{{ $category->name_lang }}">
                                         </div>

                                         <!-- Description Field -->
                                         <div class="form-group col-sm-6 col-lg-6">
                                             <label for="description">{{ @translate_lang("Description")  }}</label>
                                             <textarea class="form-control" id="description" name="description">{{ old('description', $category->description) }}</textarea>
                                         </div>

                                         <!-- Description Lang Field -->
                                         <div class="form-group col-sm-6 col-lg-6">
                                             <label for="description_lang">{{ @translate_lang("Description Lang")  }}</label>
                                             <textarea class="form-control" id="description_lang" name="description_lang">{{ old('description_lang', $category->description_lang) }}</textarea>
                                         </div>


                                         <!-- Path Blade Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="path_blade">{{ @translate_lang("Path Blade")  }}</label>
                                             <input type="text" class="form-control" id="path_blade" name="path_blade" value="{{ $category->path_blade }}">
                                         </div>

                                         <!-- Link Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="link">{{ @translate_lang("Link")  }}</label>
                                             <input type="text" class="form-control" id="link" name="link" value="{{ $category->link }}">

                                         </div>
                                         <!-- Icon Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Icon">{{ @translate_lang("Icon")  }}</label><br>
                                                 <input type="file" style="width: 500px;" id="icon" name="icon" value="{{ $category->icon }}">
                                             </div>
                                             <td><img src="/uploads/categories/icons/{{ $category->image }}" style="width: 200px; height: 200px;"></td>

                                         </div>

                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Image">{{ @translate_lang("Image")  }}</label><br>
                                                 <input type="file" style="width: 500px;" id="images" name="image" value="{{ $category->image }}">
                                             </div>
                                             <td><img src="/uploads/categories/{{ $category->image }}" style="width: 200px; height: 200px;"></td>
                                         </div>

                                             <!-- Active Field -->
                                             <div class="form-group col-sm-6">
                                                 <label for="active">{{ @translate_lang("Active")  }}</label>
                                                 <label class="checkbox-inline">
                                                     <input type="hidden" name="active" value="0" checked/>
                                                     <input type="checkbox" name="active" id="cb1" value="1"  />
                                                 </label>
                                             </div>
                                         </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('categories.index') }}" class="btn btn-light">{{ @translate_lang("Cancel")  }}</a>
                                     </div>

                                 </form>
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
