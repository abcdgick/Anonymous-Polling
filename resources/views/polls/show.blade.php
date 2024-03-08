<x-app-layout>
    <div class="container">

        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200 text-center mb-8 mt-8">
            {{ $poll->title }}
        </h2>

        <h6 class="text-m font-bold text-gray-800 dark:text-gray-400 mb-4 mt-4">
            {{ $poll->EndDateFormat }}
        </h6>

        <form action="{{ route('poll.vote', [$poll]) }}" method="post">
            @csrf
            @php
                $sum = 0;
                foreach ($poll->options as $option) {
                $sum += $option->votes_count;
                }
            @endphp

            @foreach($poll->options as $option)
            <p>
                @php
                $per = $sum != 0 ? (($option->votes_count / $sum) * 100) . "%" : "0%";
                @endphp

            @if (!isset($selectedOption))
                <label>
                    <input name="option_id" type="radio" value="{{ $option->id }}" @if ($selectedOption == $option->id) checked @endif class="text-indigo-600 dark:text-gray-300 focus:ring-indigo-500 dark:focus:ring-gray-400 focus:ring-opacity-50 dark:focus:ring-opacity-30">
                    <span>{{ $option->content }}</span>
                </label>
            @else
                    <div id="modded">
                        <div class="progress dark lighten-4 tooltipped" data-position="top">
                            <span>{{$option->content}}</span>
                            <div class="determinate dark" style="width: {{$per}}; animation: grow 2s;">{{$per}}</div>
                        </div>
                    </div>
            @endif
            </p>
            @endforeach

            @if(!isset($selectedOption) && $poll->status == 'STARTED')
            <button name="submitted" class="disabled:opacity-50 bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 shadow-sm" type="submit">
            Vote
            </button>
            @endif
        </form>
    </div>
</x-app-layout>