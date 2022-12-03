@extends('layout.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('custom.allrole')}}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{__('custom.name')}}</th>
                                <th>{{__('custom.permissions')}}</th>
                                @can('Edit roles')
                                    <th>{{__('custom.action')}}</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @if ($role->permissions)
                                            @foreach ($role->permissions as $permission)
                                                {{ $permission }} ,
                                            @endforeach
                                        @endif
                                    </td>
                                    @can('Edit roles')
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-icon-text">
                                                <i class="ti-file btn-icon-prepend"></i>
                                                {{__('custom.edit')}}
                                            </a>
                                            <form class="form" style="display: contents" method="POST"
                                                action="{{ route('roles.delete', $role->id) }}">
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
