@extends('layouts.master')
 
@section('title',$title)

@section('content')
<div class="p-4 w-full ">
   <div  class="flex justify-between items-center"> 
    <span class="text-xl"> {{$title}} > {{isset($data->id) ? $data->id : 'New' }}</span>
    @if(!$editing)
        <x-button text="Edit" icon="pencil" url="{{url()->current();}}/edit"/>
    @else
        <x-button text="Cancel" icon="rotate-left" url="{{url()->previous();}}"/>
    @endif
    
    </div>
   <form name="{{$type}}-form" id="{{$type}}-form" method="post" action="{{$type}}">
       @csrf
       @method('POST')
        <div class="form-group grid grid-cols-2">
            @foreach ($inputs as $input)
                @switch($input['inputType'])

                @case('dependentDropdDown')
                     <x-dependent-drop-down 
                        :label="$input['label']" 
                        :data="$input['data']" 
                        :formControllName="$input['formControllName']" 
                        :childControllName="$input['childControllName']"  
                        :existingRecordId="isset($data[$input['formControllName']]) ? $data[$input['formControllName']] : 0 "
                        :existingChildRecordId="isset($data[$input['childControllName']]) ? $data[$input['childControllName']] : 0 " 
                        :childUrl="$input['childUrl']" 
                        :childControllName="$input['childControllName']"
                        :disabled="$input['disabled'] || !$editing " 
                        :childLabel="$input['childLabel']"/> 
                    @break

                @case('dropdDown')
                <div class="mb-6 mx-4"> 
                        <x-dropdown :label="$input['label']" :data="$input['data']" :formControllName="$input['formControllName']" 
                        :existingRecordId="isset($data[$input['formControllName']]) ? $data[$input['formControllName']] : 0 "
                        :disabled="$input['disabled'] || !$editing " /> 
                        </div>
                    @break
                @default
                    <div class="mb-6 mx-4"> 
                        <label for="{{$input['formControllName']}}" class="block mb-2 text-sm font-medium text-gray-900">{{$input['label']}}</label>
                        <input type="{{$input['inputType']}}" id="{{$input['formControllName']}}"  name="{{$input['formControllName']}}" class="bg-gray-50 form-control border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{$input['label']}}" value="{{isset($data[$input['formControllName']]) ? $data[$input['formControllName']] : '' }}"  required {{$input['disabled'] || !$editing ? 'disabled' : ''}}>
                    </div>
                @endswitch
            @endforeach
        </div>
        <button type="submit" class="mx-4 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" {{$input === 'id' || !$editing ? 'disabled' : ''}}>Submit</button>
      </form>
</div>
@stop
