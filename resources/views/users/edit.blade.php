@extends('templates.home')

@section('head')
    {{ HTML::style('css/style.css')}}
@endsection

@section('header')

@endsection

@section('main')
    <ul>

        @foreach ($users as $user)
            <li>{{ $user->name }} <div class="glyphicon glyphicon-{{ $user->job->name }}"></div><a href="user/{{ $user->id }}">destroy</a></li>
        @endforeach
    </ul>

@endsection

@section('aside')
    @include('users.actions')
@endsection

@section('footer')
    footer
@endsection



