@extends('layouts.app')

@section('content')

    <div class="uper">
        @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
        @endforeach

        <div class="col-sm-2 offset-10">
            <a href="{{route('user.create')}}" class="btn btn-success">Create User</a>
        </div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>User Name</td>
                    <td>Email</td>
                    <td colspan="3">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-dark">View</a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
