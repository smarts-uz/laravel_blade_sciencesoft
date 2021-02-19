@extends('layouts.app')
@section('title')
    {{ _trans("Edit Portfolio")  }}
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ _trans("Edit Portfolio")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('portfolios.index') }}"  class="btn btn-primary">{{ _trans("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                 <form method="post" action="{{ route('portfolios.update', $portfolio->id) }}" enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="row">
                                         <div class="form-group col-sm-3">
                                             <label for="technology">{{ _trans("Technology")  }}</label>
                                             <select class="form-control" id="technology">
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                             </select>
                                         </div>
                                         <div class="form-group col-sm-3">
                                             <label for="industry">{{ _trans("Industry")  }}</label>
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
                                             <label for="name">{{ _trans("Name")  }}</label>
                                             <input type="text" class="form-control" id="name" name="name" value="{{ $portfolio->name }}">
                                         </div>
                                         <!-- Name Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="title">{{ _trans("Title")  }}</label>
                                             <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}">
                                         </div>
                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="sub_title">{{ _trans("Sub Title")  }}</label>
                                             <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $portfolio->sub_title }}">
                                         </div>

                                         <!-- Description Text Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description_text">{{ _trans("Blade Link") }}</label>
                                             <textarea class="form-control" id="description_text" name="description_text">{{ old('blade_link', $portfolio->blade_link) }}</textarea>
                                         </div>
                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Image">{{ _trans("Image") }}</label><br>
                                                 <input type="file" id="images" name="image" value="{{ $portfolio->image??asset('images/default-image.png') }}">
                                                 <td><img src="/uploads/portfolios/{{ $portfolio->image??asset('images/default-image.png') }}" style="width: 200px; height: 200px;"></td>

                                             </div>
                                         </div>
                                     </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('portfolios.index') }}" class="btn btn-light">{{ _trans("Cancel")  }}</a>
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
