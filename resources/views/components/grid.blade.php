
<div class="relative overflow-x-auto shadow-md sm:rounded-lg content-container flex-1  w-full">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400  w-full">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

               @foreach ($labels as $label)
                <th scope="col" class="px-6 py-3 text-center">
                    {{$label}}
                </th>
               @endforeach

               <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>

            
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                 @foreach ($columns as $col)
                    <th scope="col" class="px-6 py-3 text-center">

                        @if($col == 'id')
                           <a href="{{ route($detailRoute,[$item->id])}}"> 
                             {{isset($item->$col['name']) ? $item->$col['name']: $item[$col] }}
                            </a>
                        @else

                        {{isset($item->$col['name']) ? $item->$col['name']: $item[$col] }}
                        @endif
                    </th>
                @endforeach
                
                <td class="px-6 py-4 text-right text-center">
                <a href="{{ route($editRoute,[$item->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-solid fa-pencil mr-2"></i></a>
                    <span class="ml-2"> 
                        <a href="{{ route($deleteRoute,[$item->id])}}"> 
                            <i class="fa-solid fa-trash mr-2"></i>
                        </a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>