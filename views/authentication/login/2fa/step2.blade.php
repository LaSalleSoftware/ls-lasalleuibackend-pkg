@extends('lasalleuibackend::basic.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('lasallesoftwarelibrarybackend::auth.2fa_step2_title') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('step2B') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('lasallesoftwarelibrarybackend::auth.2fa_two_factor_code') }}</label>

                            <div class="col-md-6">
                                <input id="two_factor_code" type="text" class="form-control{{ $errors->has('two_factor_code') ? ' is-invalid' : '' }}" name="two_factor_code" value="{{ old('two_factor_code') }}" required autofocus>

                                @if ($errors->has('two_factor_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('two_factor_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <input type="hidden" id="email" name="email" value="{{ $email }}">


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('lasallesoftwarelibrarybackend::auth.2fa_step1_submit') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
