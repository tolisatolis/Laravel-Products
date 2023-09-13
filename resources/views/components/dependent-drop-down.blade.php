<div>
        <div class="mb-6  mx-4">
            <label for="parent" class="block mb-2 text-sm font-medium text-gray-900 ">{{$label}}</label>
            <select name="{{$formControllName}}"  id="parent" class="form-controll bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" {{$disabled ? 'disabled' : ''}}>
                <option selected disabled>Select {{$label}}</option>
                @foreach ($items as $item)
                <option value="{{ $item->id }}" {{ ( $item->id == $existingRecordId) ? 'selected' : '' }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6  mx-4">
            <label for="v" class="block mb-2 text-sm font-medium text-gray-900 ">{{$label}}</label>
            <select name="{{$childControllName}}" id="child" class="form-controll bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" {{$disabled ? 'disabled' : ''}}>
                <option selected disabled>Select {{$childLabel}}</option>
            </select>
        </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#parent').on('change', function () {
                const parentId = this.value;
                         $('#child').html('');
                $('#child').append('<option selected disabled >Select  {{$childLabel}} </option>');
                $.ajax({
                    url: '{{ route($childUrl) }}?grading_system_id='+parentId,
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        $.each(res, function (key, value) {
                            $('#child').append('<option value="' + value
                                .id + '"'+ (value.id === {{$existingChildRecordId}} ? 'selected' : '')+' >' + value.name + '</option>');
                        });
                    }
                });
            });
            $('#parent').trigger('change',{{$existingRecordId}});
        });
    </script>
</div>