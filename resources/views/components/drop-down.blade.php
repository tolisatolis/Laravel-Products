<label for="dopdown" class="block text-sm mb-2 font-medium text-gray-900 ">{{$label}}</label>
<select id="dopdown" name="{{$formControllName}}" class="form-controll bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" {{$disabled ? 'disabled' : ''}}>
  <option value="{{null}}" selected>Choose an item</option>
    @foreach ($items as $item)
         <option value="{{$item->id}}" {{ ( $item->id == $existingRecordId) ? 'selected' : '' }}>{{$item->name}}</option>
    @endforeach
</select>