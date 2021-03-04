@extends('layouts.app')
@section('title')
    {{ t("Create Category")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">{{ t("New Category")  }}</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">{{t("Back")  }}</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                               <div class="container">
                                   <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                       @csrf
                                           <div class="row">
                                               <!-- Parent Id Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="id">{{ t("Id")  }}</label>
                                               <input type="number" class="form-control" id="id" name="id" value="{{ old('id') }}">
                                           </div>
                                           <!-- Parent Id Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="category_id">{{ t("Category Id")  }}</label>
                                               <input type="number" class="form-control" id="category_id" name="category_id" value="{{ old('category_id') }}">
                                           </div>
                                           <!-- Name Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="name">{{ t("Name")  }}</label>
                                               <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                           </div>

                                           <!-- Name Lang Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="name_lang">{{ t("Name Lang")  }}</label>
                                               <input type="text" class="form-control" id="name_lang" name="name_lang" value="{{ old('name_lang') }}">
                                           </div>

                                           <!-- Description Field -->
                                           <div class="form-group col-sm-6 col-lg-12">
                                               <label for="description">{{ t("Description")  }}</label>
                                               <textarea class="form-control" id="description" name="description"></textarea>
                                           </div>

                                           <!-- Description Lang Field -->
                                           <div class="form-group col-sm-6 col-lg-12">
                                               <label for="description_lang">{{ t("Description Lang")  }}</label>
                                               <textarea class="form-control" id="description_lang" name="description_lang"></textarea>
                                           </div>

                                           <!-- Icon Field -->
                                           <div class="form-group col-sm-6">
                                               <div class="form-group">
                                                   <label for="Icon">{{ t("Icon")  }}</label><br>
                                                   <input type="file" style="width: 500px;" id="icon" name="icon" value="{{ old('icon') }}">
                                               </div>
                                           </div>

                                           <!-- Image Field -->
                                           <div class="form-group col-sm-6">
                                               <div class="form-group">
                                                   <label for="Image">{{ t("Image")  }}</label><br>
                                                   <input type="file" style="width: 500px;" id="images" name="image" value="{{ old('image') }}">
                                               </div>
                                           </div>

                                           <!-- Path Blade Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="path_blade">{{ t("Path Blade")  }}</label>
                                               <input type="text" class="form-control" id="path_blade" name="path_blade" value="{{ old('path_blade') }}">
                                           </div>

                                           <!-- Link Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="link">{{ t("Link")  }}</label>
                                               <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
                                           </div>

                                           <!-- Active Field -->
                                           <div class="form-group col-sm-6">
                                               <label for="active">{{ t("Active")  }}</label>
                                               <label class="checkbox-inline">
                                                   <input type="hidden" name="active" value="0" checked/>
                                                   <input type="checkbox" name="active" id="cb1" value="1"  />
                                               </label>
                                           </div>
                                           </div>
                                           <!-- Submit Field -->
                                           <div class="form-group col-sm-12">
                                               {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                               <a href="{{ route('categories.index') }}" class="btn btn-light">{{ t("Cancel")  }}</a>
                                           </div>
                                   </form>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
@endsection
