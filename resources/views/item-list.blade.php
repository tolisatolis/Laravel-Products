@extends('layouts.master')
 
@section('title',$title)

@section('content')
    <p>{{$title}}</p>
    {{$data}}
@stop