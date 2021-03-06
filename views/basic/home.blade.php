@extends('lasalleuibackend::basic.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('lasallesoftwarelibrarybackend::general.title_home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('lasallesoftwarelibrarybackend::general.message_home') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
