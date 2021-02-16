@extends('layouts.app')
@section('title')
    {{ _trans("Edit News")  }}
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ _trans("Edit News")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('news.index') }}"  class="btn btn-primary">{{ _trans("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                 <form method="post" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="row">
                                         <!-- Name Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="title">{{ _trans("Title")  }}</label>
                                             <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
                                         </div>

                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="sub_title">{{ _trans("Sub Title")  }}</label>
                                             <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $news->sub_title }}">
                                         </div>

                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Image">{{ _trans("Image") }}</label><br>
                                                 <input type="file"  id="images" name="image" value="{{ $news->image??asset('images/default-image.png') }}">
                                             </div>
                                         </div>
                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <td><img src="/uploads/news/{{ $news->image??asset('images/default-image.png') }}" class="rounded-right" style="width: 200px; height: 200px;"></td>
                                             </div>
                                         </div>
                                         <!-- Description Text Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description_text">{{ _trans("Description Text")  }}</label>
                                             <textarea class="form-control" id="description_text" name="description_text">{{ old('description', $news->description) }}</textarea>
                                         </div>
                                     </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('news.index') }}" class="btn btn-light">{{ _trans("Cancel")  }}</a>
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
