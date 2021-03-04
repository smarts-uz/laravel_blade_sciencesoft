@extends('layouts.app')
@section('title')
    {{ t("Company Team Details")  }}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
        <h1>{{ t("Company Team Details")  }}</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('companyTeams.index') }}"
                 class="btn btn-primary form-btn float-right">{{ t("Back")  }}</a>
        </div>
      </div>
   @include('stisla-templates::common.errors')
    <div class="section-body">
           <div class="card">
            <div class="card-body">
                    @include('company_teams.show_fields')
            </div>
            </div>
    </div>
    </section>
@endsection
