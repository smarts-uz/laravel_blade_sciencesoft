@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">{{ @translate_lang("Verify Your Email Address") }}</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">{{ @translate_lang("A fresh verification link has been sent to
                            your email address") }}
                            </div>
                        @endif
                        <p>{{ @translate_lang("Before proceeding, please check your email for a verification link.If you did not receive
                        the email,") }}</p>
                        <a href="{{ route('verification.resend') }}">{{ @translate_lang("click here to request another'") }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
