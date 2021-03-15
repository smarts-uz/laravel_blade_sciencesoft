@extends('layouts.app')
@section('title')
    Edit Product
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ t("Edit Product")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('products.index') }}"  class="btn btn-primary">{{ t("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                 <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="row">
                                         <!-- Name Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="name">{{ t("Name")  }}</label>
                                             <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                                         </div>
                                         <!-- Name Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="title">{{ t("Title")  }}</label>
                                             <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
                                         </div>
                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-12">
                                             <label for="sub_title">{{ t("Sub Title")  }}</label>
                                             <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $product->sub_title }}">
                                         </div>
                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="view_website_link">{{ t("View Website Link")  }}</label>
                                             <input type="text" class="form-control" id="view_website_link" name="view_website_link" value="{{ $product->view_website_link }}">
                                         </div>
                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Image">{{ t("Image") }}</label><br>
                                                 <input type="file" id="images" name="image" value="{{ $product->image??asset('images/default-image.png') }}">
                                                 <td><img src="/uploads/products/{{ $product->image??asset('images/default-image.png') }}" style="width: 200px; height: 200px;"></td>

                                             </div>
                                         </div>
                                         <!-- Description Text Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description_text">{{ t("Read More Link") }}</label>
                                             <textarea class="form-control" id="description_text" name="description_text">{{ old('read_more_link', $product->read_more_link) }}</textarea>
                                         </div>

                                     </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('products.index') }}" class="btn btn-light">{{ t("Cancel")  }}</a>
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
