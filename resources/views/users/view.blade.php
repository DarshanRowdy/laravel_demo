@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <td>Name :- </td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>Email :- </td>
            <td>{{$user->email}}</td>
        </tr>
    </table>
@endsection
