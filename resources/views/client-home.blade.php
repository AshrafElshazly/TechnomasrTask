@extends('layout.master')

@section('content')
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">{{__('custom.welcome')}}</h3>
                <h6 class="font-weight-normal mb-0">{{__('custom.welcomeText')}}</h6>
            </div>
            <div class="col-12 col-xl-4">
                <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
