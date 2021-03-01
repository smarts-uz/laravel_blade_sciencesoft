@extends('layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <h5 class="mb-0 h6">{{_trans('Language Information')}}</h5>
</div>

<div class="col-lg-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6">{{_trans('update Language Info')}}</h5>
        </div>
        <div class="card-body p-0">
            <form class="p-4" action="{{ route('languages.update', $language->id) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label">{{ _trans('Name') }}</label>
                    </div>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" placeholder="{{ _trans('Name') }}" value="{{ $language->name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="control-label">{{ _trans('Code') }}</label>
                    </div>
                    <div class="col-lg-9">
                        <select class="form-control aiz-selectpicker mb-2 mb-md-0" name="code" data-live-search="true" >
                            <option value="uz" data-content="<span>Uz</span></div>">{{ _trans("Uz")  }}</option>
                            <option value="ru" data-content="<span>Ru</span></div>">{{ _trans("Ru")  }}</option>
                            <option value="en" data-content="<span>En</span></div>">{{ _trans("En")  }}</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-primary">{{_trans('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
