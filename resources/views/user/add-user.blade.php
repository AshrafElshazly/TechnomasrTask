@extends('layout.master')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('custom.emailaddress')}}</h4>
                <form class="forms-sample" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
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
                        <label for="exampleInputName1">{{__('custom.name')}}</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">{{__('custom.emailaddress')}}</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name="email"
                            placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">{{__('custom.phone')}}</label>
                        <input type="phone" class="form-control" id="exampleInputPhone" name="phone"
                            placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">{{__('custom.password')}}</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" name="password"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">{{__('custom.role')}}</label>
                        <select name="role_id" class="form-control" id="exampleSelectGender">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{__('custom.photoup')}}</label>
                        <input type="file" name="photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">{{__('custom.upload')}}</button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">{{__('custom.submit')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
@endpush
