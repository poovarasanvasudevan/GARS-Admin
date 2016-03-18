@extends('layout.mainlayout')


@section('content')

<h1>{{Setting::get('foo','')}}</h1>
@endsection