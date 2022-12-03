@extends('layout.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Users</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{__('custom.name')}}</th>
                                <th>{{__('custom.phone')}}</th>
                                <th>{{__('custom.email')}}</th>
                                <th>{{__('custom.photo')}}</th>
                                <th>{{__('custom.role')}}</th>
                                @can('Edit users')
                                    <th>{{__('custom.action')}}</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><img src="{{ asset("uploads/images/$user->photo") }}"
                                            style="width: 90px;height: 85px;" alt=""></td>
                                    <td><b>{{ $user->role->name }}</b></label></td>
                                    @can('Edit users')
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-icon-text">
                                                <i class="ti-file btn-icon-prepend"></i>
                                                {{__('custom.edit')}}
                                            </a>
                                            <form class="form" style="display: contents" method="POST"
                                                action="{{ route('users.delete', $user->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="ti-trash btn-icon-prepend"></i>
                                                    {{__('custom.trash')}}
                                                </button>
                                            </form>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
