@extends('layouts.app')

@section('content')

    <div class="card uper">
        <div class="card-header">
            Add User
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('user.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">User Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="price">Email:</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Password:</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection
