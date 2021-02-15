@extends('layouts.app')
@section('title')
    {{ @translate_lang("Create Portfolio")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading m-0">{{ @translate_lang("New Portfolio")  }}</h3>
            <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                <a href="{{ route('portfolios.index') }}" class="btn btn-primary">{{ @translate_lang("Back")  }}</a>
            </div>
        </div>
        <div class="content">
            @include('stisla-templates::common.errors')
            <div class="section-body">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="card">
                           <div class="card-body ">
                               <form method="post" action="{{ route('portfolios.store') }}" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                       <div class="form-group col-sm-3">
                                           <label for="technology">{{ @translate_lang("Technology")  }}</label>
                                           <select class="form-control" id="technology">
                                               <option>1</option>
                                               <option>2</option>
                                               <option>3</option>
                                               <option>4</option>
                                               <option>5</option>
                                           </select>
                                       </div>
                                       <div class="form-group col-sm-3">
                                           <label for="industry">{{ @translate_lang("Industry")  }}</label>
                                           <select class="form-control" id="industry">
                                               <option>1</option>
                                               <option>2</option>
                                               <option>3</option>
                                               <option>4</option>
                                               <option>5</option>
                                           </select>
                                       </div>
                                       <!-- Name Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="name">{{ @translate_lang("Name")  }}</label>
                                           <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                       </div>
                                       <!-- Name Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="title">{{ @translate_lang("Title")  }}</label>
                                           <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                       </div>
                                       <!-- Name Lang Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="sub_title">{{ @translate_lang("Sub Title")  }}</label>
                                           <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ old('sub_title') }}">
                                       </div>
                                       <!-- Name Lang Field -->
                                       <div class="form-group col-sm-6">
                                           <label for="blade_link">{{ @translate_lang("Blade Link")  }}</label>
                                           <input type="text" class="form-control" id="blade_link" name="blade_link" value="{{ old('blade_link') }}">
                                       </div>
                                       <!-- Image Field -->
                                       <div class="form-group col-sm-6">
                                           <div class="form-group">
                                               <label for="Image">{{ @translate_lang("Image")  }}</label><br>
                                               <input type="file" style="width: 500px;" id="images" name="image" value="{{ old('image') }}">
                                           </div>
                                       </div>
                                   </div>
                                   <!-- Submit Field -->
                                   <div class="form-group col-sm-12">
                                       {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                       <a href="{{ route('portfolios.index') }}" class="btn btn-light">{{ @translate_lang("Cancel")  }}</a>
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
