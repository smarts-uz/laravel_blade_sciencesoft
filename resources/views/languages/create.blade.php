@extends('layouts.app')

@section('content')

    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate_lang('Language Information')}}</h5>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('languages.store') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-from-label">{{ translate_lang('Name') }}</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" placeholder="{{ translate_lang('Name') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-from-label">{{ translate_lang('Code') }}</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="code" data-live-search="true" >
                                <option value="uz" data-content="<span>Uz</span></div>">{{ _trans("Uz")  }}</option>
                                <option value="ru" data-content="<span>Ru</span></div>">{{ _trans("Ru")  }}</option>
                                <option value="en" data-content="<span>En</span></div>">{{ _trans("En")  }}</option>
                             {{-- @foreach(\File::files(base_path('public/assets/img/flags')) as $path)
                                    <option value="{{ pathinfo($path)['filename'] }}" data-content="<div class=''><img src='{{ static_asset('assets/img/flags/'.pathinfo($path)['filename'].'.png') }}' class='mr-2'><span>{{ strtoupper(pathinfo($path)['filename']) }}</span></div>"></option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-sm btn-primary">{{translate_lang('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
