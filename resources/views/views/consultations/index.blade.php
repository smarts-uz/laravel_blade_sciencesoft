@extends('layouts.app')
@section('title')
    {{ @translate_lang("Consultations")  }}
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ @translate_lang("Consultations")  }}</h1>
    {{--            <div class="section-header-breadcrumb">--}}
    {{--                <a href="{{ route('consultations.create')}}" class="btn btn-primary form-btn">{{ @translate_lang("Consultation")  }} <i class="fas fa-plus"></i></a>--}}
    {{--            </div>--}}
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('consultations.table')
                    @include('consultations.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('consultations.index') }}/";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{asset('assets/js/consultations/consultations.js')}}"></script>
@endsection
