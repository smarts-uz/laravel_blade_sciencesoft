@extends('layouts.app')
@section('title')
    {{ @translate_lang("Company Teams")  }}
@endsection
@section('css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ @translate_lang("Company Teams")  }}</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('companyTeams.create')}}" class="btn btn-primary form-btn">{{ @translate_lang("Company Team")  }} <i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    @include('company_teams.table')
                    @include('company_teams.templates.templates')
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        let recordsURL = "{{ route('companyTeams.index') }}/";
    </script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{asset('assets/js/company_teams/company_teams.js')}}"></script>
@endsection
