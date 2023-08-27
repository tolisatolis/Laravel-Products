@extends('layouts.master')
 
@section('title',$title)

@section('content')
    <p>{{$title}}</p>
    <x-grid :$data/>
@stop