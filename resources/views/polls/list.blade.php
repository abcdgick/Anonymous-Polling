<x-app-layout>
    <div class="container">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200 center mb-8 mt-8">
            All Polls
        </h1>
        <div class="flex justify-between items-center">
            <a href="{{ route('poll.create') }}" class="inline-flex items-center px-4 py-2 bg-slate-700 text-white font-bold rounded-md shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-info-500 dark:bg-gray-800 dark:text-gray-200">
                New Poll &plus;
            </a>
            <form id="search-poll" method="get" action="{{ route('poll.search') }}" class="flex w-full max-w-sm">
                <div class="relative w-full">
                    <input type="text" name="search" placeholder="Search..." value="{{ isset($search) ? $search : '' }}" class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-info-500 dark:bg-gray-700 dark:text-gray-200">
                    <button type="submit" class="absolute inset-y-0 right-0 pr-3 py-2 text-gray-400 hover:text-info focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-info-500 dark:text-gray-300">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>

        <table class="table w-full shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="text-left bg-gray-500 dark:bg-gray-800 text-white">
                    <th class="text-center px-4 py-2">Title</th>
                    <th class="text-center px-4 py-2">Poll ID</th>
                    <th class="text-center px-4 py-2">Status</th>
                    <th class="text-center px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($polls as $poll)
                    <tr class="text-gray-400 border-b dark:hover:bg-gray-700 hover:text-gray-200">
                        <td class="text-center px-4 py-2">{{ $poll->title }}</td>
                        <td class="text-center px-4 py-2">{{ $poll->pollID }}</td>
                        <td class="text-center px-4 py-2">{{ $poll->status }}</td>
                        <td class="text-center px-4 py-2 flex justify-center space-x-2">
                            <a href="{{ route('poll.show', [$poll]) }}" class="inline-flex items-center px-4 py-2 text-sm font-bold leading-tight rounded-md bg-green-500 text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Show
                            </a>
                            @if(!isset($search))
                            <a href="{{ route('poll.delete', [$poll]) }}" class="inline-flex items-center px-4 py-2 text-sm font-bold leading-tight rounded-md bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>