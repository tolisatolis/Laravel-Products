@extends('layouts.master')
 
@section('title',$title)

@section('content')
<div  class=" p-4 w-full">
   <div class="mb-5 flex justify-between items-center"> 
       <span class="text-xl"> {{$title}} </span>
        <x-button  text="Create New" icon="plus" url="{{url()->current();}}/create"/>
    </div>
    <div>
        <x-grid :$data :$title :$columns :$editRoute :$deleteRoute :$labels :$detailRoute/>
    </div>
<div class="mt-4">
    {{$data->links()}}
</div>
</div>

@stop

