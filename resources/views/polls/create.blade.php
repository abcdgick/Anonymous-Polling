<x-app-layout>
<div class="container">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200 center mb-8 mt-8">
            Create New Poll
        </h2>
        <form class="flex flex-col space-y-4" method="post" action="{{ route('poll.store') }}">

        @csrf
            <div class="flex flex-col">
                <label for="title" class="text-sm font-medium">Title</label>
                <input required="required" name="title" id="title" type="text" class="validate w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600">
                @error('title')
                {{$message}}
                @enderror

            <div class="mb-2 mt-2 grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="flex flex-col">
                    <label for="title" class="text-sm font-medium">Start Date</label>
                    <input required="required" type="text" class="datepicker" placeholder="Start date" name="start_date" class="w-full px-3 py-2 rounded-md border border-gray-300 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:border-gray-600">
                    @error('start_at')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="title" class="text-sm font-medium">Start Time</label>
                    <input required="required" type="text" class="timepicker" placeholder="Start time" name="start_time" class="w-full px-3 py-2 rounded-md border border-gray-300 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div class="flex flex-col">
                    <label for="title" class="text-sm font-medium">End Date</label>
                    <input required="required" type="text" class="datepicker" placeholder="End date" name="end_date" class="w-full px-3 py-2 rounded-md border border-gray-300 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:border-gray-600">
                    @error('end_at')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="title" class="text-sm font-medium">End Time</label>
                    <input required="required" type="text" class="timepicker" placeholder="End time" name="end_time" class="w-full px-3 py-2 rounded-md border border-gray-300 text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:border-gray-600">
                </div>
            </div>

            </div>

            
            @php
            //generate the 5-digit alphanumeric
            $a=[1,2,3,4];
            $bytes = random_bytes(3);
            $randomString = substr(bin2hex($bytes), 0, 5);
            @endphp
            <div class="flex flex-col space-y-4" x-data="{ optionsNumber: 2 }">
                <h4 class="text-m font-bold text-gray-800 dark:text-gray-400 mt-4">
                  Options
                </h4>
              
                <template x-for="i,index in optionsNumber">
                  <div class="flex items-center space-x-4">
                    <input required="required" name="options[][content]" id="title" type="text" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-info-500 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600" :placeholder="`Option` + i">
              
                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:text-red-300" x-on:click="optionsNumber > 2 ? optionsNumber-- : alert('poll must have at least 2 options')">
                      Remove
                    </button>
                  </div>
                </template>
              
                <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-300 hover:bg-info-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-info-500 dark:text-info-300" x-on:click="optionsNumber++">
                  Add Option
                </button>
              
                <hr class="my-4">
              
                <div class="flex justify-end">
                  <input type="hidden" name="pollID" id="pollID" type="text" value="{{ $randomString }}">
              
                  <button class="inline-flex items-center px-6 py-4 text-base font-bold leading-tight rounded-md bg-cyan-600 text-white hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 dark:bg-cyan-700 dark:text-gray-200" type="submit">
                    Create
                  </button>
                </div>
              </div>
              
    </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dates = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(dates);
        var tiems = document.querySelectorAll('.timepicker');
        var instances = M.Timepicker.init(tiems);
      });
</script>
</x-app-layout>