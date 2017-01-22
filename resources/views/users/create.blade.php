@extends('templates.home')

@section('head')
    {{ HTML::style('css/style.css')}}
@endsection

@section('header')

@endsection

@section('main')
    {!! form($form) !!}
@endsection

@section('aside')
    @include('users.actions')
@endsection

@section('footer')
    footer
@endsection



