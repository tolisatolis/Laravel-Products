@extends('layouts.master')
 
@section('title',$title)

@section('content')
    {{$title}}
    <x-button text="Create New" icon="plus" url="{{url()->current();}}/create"/>
    <x-grid :$data :$title :$columns :$editRoute :$deleteRoute/>
    {{$data->links()}}
@stop

