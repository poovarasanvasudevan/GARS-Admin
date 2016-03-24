@extends('layout.mainlayout')

@section('toolbar')
    @include('layout.maintoolbar',['sidebar'=>true])
@endsection
@section('content')


    <h1>{{Setting::get('foo','')}}</h1>

@endsection