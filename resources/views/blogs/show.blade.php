@extends('layouts.app')
@section('title')
    {{ _trans("Blog Details")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>{{ _trans("Blog Details")  }}</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('blogs.index') }}"
                 class="btn btn-primary form-btn float-right">{{ _trans("Back")  }}</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('blogs.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
