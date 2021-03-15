@extends('layouts.app')
@section('title')
    {{ t("Edit Blog")  }}
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ t("Edit Blog")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('blogs.index') }}"  class="btn btn-primary">{{ t("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                 <form method="post" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')
                                 <!-- Name Field -->
                                     <div class="row">
                                         <!-- Tag Field -->
{{--                                         <div class="form-group col-sm-6">--}}
{{--                                             <label for="tag">{{ t("Tag")  }}</label>--}}
{{--                                             <textarea class="form-control" id="tag" name="tag">{{ old('tag', $blog->tag) }}</textarea>--}}
{{--                                         </div>--}}
                                         <div class="form-group col-sm-6">
                                             <label for="tag">{{ t("Tag")  }}</label>
                                             <select class="custom-select selectpicker" id="basic" multiple="multiple"  multiple data-live-search="true" name="tag[]">
                                                 <option value="All Topics">All Topics</option>
                                                 @foreach($tags as $tag)
                                                     <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                                 @endforeach
                                                 @foreach($solutionstags as $solutionstag)
                                                     <option value="{{ $solutionstag->name }}">{{ $solutionstag->name }}</option>
                                                 @endforeach
                                                 @foreach($platformstags as $platformstag)
                                                     <option value="{{ $platformstag->name }}">{{ $platformstag->name }}</option>
                                                 @endforeach
                                                 @foreach($techstags as $techstag)
                                                     <option value="{{ $techstag->name }}">{{ $techstag->name }}</option>
                                                 @endforeach</select>
                                         </div>
                                         <!-- Title Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="title">{{ t("Title")  }}</label>
                                             <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                                         </div>

                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group ">
                                                 <label for="Image">{{ t("Image") }}</label><br>
                                                 <input type="file" id="images" name="image" value="{{ $blog->image??asset('images/default-image.png') }}">
                                                 <img src="{{ "/uploads/blogs/".$blog->image }}" style="width: 200px; height: 200px;">
                                             </div>
                                         </div>

                                         <!-- Description Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description">{{ t("Description") }}</label>
                                             <textarea class="form-control" id="description" name="description">{{ old('description', $blog->description) }}</textarea>
                                         </div>

                                         <!-- Description Text Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description_text">{{ t("Description Text") }}</label>
                                             <textarea class="form-control" id="description_text" name="description_text">{{ old('description_text', $blog->description_text) }}</textarea>
                                         </div>

                                     </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('blogs.index') }}" class="btn btn-light">{{ t("Cancel") }}</a>
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
