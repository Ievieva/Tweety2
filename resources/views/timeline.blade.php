<div class="border border-gray-400 rounded-xl px-3 py-2">

    @forelse($tweets as $tweet)
        @include('tweet')
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse

    {{--{{ $tweets->links() }}--}}

</div>
