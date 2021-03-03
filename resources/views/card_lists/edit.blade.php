@extends('layouts.app')
@section('title')
    {{ t("Edit Card Lists")  }}
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">{{ t("Edit Card Lists")  }}</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('cardLists.index') }}"  class="btn btn-primary">{{ t("Back")  }}</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                 <form method="post" action="{{ route('cardLists.update', $cardLists->id) }}" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')
                                     <div class="row">
                                         <!-- Name Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="title">{{ t("Title")  }}</label>
                                             <input type="text" class="form-control" id="title" name="title" value="{{ $cardLists->title }}">
                                         </div>

                                         <!-- Name Lang Field -->
                                         <div class="form-group col-sm-6">
                                             <label for="sub_title">{{ t("Sub Title")  }}</label>
                                             <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $cardLists->sub_title }}">
                                         </div>

                                         <!-- Description Field -->
                                         <div class="form-group col-sm-6 col-lg-12">
                                             <label for="description">{{ t("Description")  }}</label>
                                             <textarea class="form-control" id="description" name="description">{{ old('description', $cardLists->description) }}</textarea>
                                         </div>

                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <label for="Image">{{ t("Image") }}</label><br>
                                                 <input type="file"  id="images" name="image" value="{{ $cardLists->image??asset('images/default-image.png') }}">
                                             </div>
                                         </div>
                                         <!-- Image Field -->
                                         <div class="form-group col-sm-6">
                                             <div class="form-group">
                                                 <td><img src="{{ "/uploads/cardLists/".$cardLists->image??asset('images/default-image.png') }}" style="width: 200px; height: 200px;"></td>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Submit Field -->
                                     <div class="form-group col-sm-12">
                                         {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                         <a href="{{ route('cardLists.index') }}" class="btn btn-light">{{ t("Cancel")  }}</a>
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
