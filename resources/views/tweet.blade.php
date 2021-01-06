<div class="d-flex {{ $loop->last ? '' : 'border-bottom border-bottom-grey-400' }}  pt-2">
    <div class="mr-2">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                class="rounded-circle mr-2"
                width="40"
                height="40"
                src="{{ $tweet->user->avatar }}"
                alt="My avatar"
            >
        </a>
    </div>
    <div>
        <h5 class="mb-2 font-weight-bold">
            <a href="{{ route('profile', $tweet->user) }}" class="btn-link">
                {{ $tweet->user->username }}
            </a>
        </h5>
        <p class="small">
            {{ $tweet->body }}
        </p>
    </div>
</div>
