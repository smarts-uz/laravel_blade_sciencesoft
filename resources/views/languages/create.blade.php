@extends('layouts.app')

@section('content')

    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{t('Language Information')}}</h5>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('languages.store') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-from-label">{{ t('Name') }}</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" placeholder="{{ t('Name') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-from-label">{{ t('Code') }}</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="code" data-live-search="true" >
                                <option value="uz" data-content="<span>Uz</span></div>">{{ t("Uz")  }}</option>
                                <option value="ru" data-content="<span>Ru</span></div>">{{ t("Ru")  }}</option>
                                <option value="en" data-content="<span>En</span></div>">{{ t("En")  }}</option>
                             {{-- @foreach(\File::files(base_path('public/assets/img/flags')) as $path)
                                    <option value="{{ pathinfo($path)['filename'] }}" data-content="<div class=''><img src='{{ static_asset('assets/img/flags/'.pathinfo($path)['filename'].'.png') }}' class='mr-2'><span>{{ strtoupper(pathinfo($path)['filename']) }}</span></div>"></option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-sm btn-primary">{{t('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
