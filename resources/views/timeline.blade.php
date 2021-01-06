<div class="border border-gray-400 rounded-xl px-4">

    @forelse($tweets as $tweet)
        @include('tweet')
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse

</div>
