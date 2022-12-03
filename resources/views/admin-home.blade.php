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
    <div class="col-md-12 grid-margin">
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">{{__('custom.today')}}</p>
                            <p class="fs-30 mb-2">4006</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">{{__('custom.total')}}</p>
                            <p class="fs-30 mb-2">61344</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">{{__('custom.meetings')}}</p>
                            <p class="fs-30 mb-2">34040</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">{{__('custom.clients')}}</p>
                            <p class="fs-30 mb-2">47033</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
