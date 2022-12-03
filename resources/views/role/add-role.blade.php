@extends('layout.master')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('custom.addRole')}}</h4>
                <form class="forms-sample" method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputName1">{{__('custom.roleName')}}</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="">{{__('custom.permissions')}}</label>
                        <div class="row">
                            @foreach (config('global.permissions') as $permission)
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="permissions[]" class="form-check-input"
                                                value="{{ $permission }}">
                                            {{ $permission }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{__('custom.submit')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
