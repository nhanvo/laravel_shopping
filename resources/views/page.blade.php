@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')


    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h2>{{$name}}</h2>
    <p>This is my body content.</p>

    <!--If statement-->
    <h2>If statement</h2>
    @if ($day == 'Friday')
        <p>Time to party</p>
    @else
        <p>Time to make money</p>
    @endif

    <!--Foreach loop-->
    <h2>Foreach loop</h2>
    @foreach($drinks as $drink)
        {{$drink}} <br/>
    @endforeach

    <!--PHP function-->
    <h2>Execute PHP function</h2>
    <p>The date is {{date('D M, Y')}}</p>
@endsection