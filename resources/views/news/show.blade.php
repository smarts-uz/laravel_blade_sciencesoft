@extends('layouts.app')
@section('title')
    {{ t("News Details")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>{{ t("News Details")  }}</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('news.index') }}"
                 class="btn btn-primary form-btn float-right">{{ t("Back")  }}</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('news.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
