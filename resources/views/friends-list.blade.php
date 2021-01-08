<div class="bg-light rounded-xl px-4 py-3">
    <h3 class="font-weight-bold mb-4">Following</h3>
    <ul class="list-unstyled">
        @forelse(current_user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-3' }}">
                <div>
                    <a href="{{ route('profile', $user) }}"
                       class="d-flex align-items-center small btn-link">
                        <img
                            class="rounded-circle mr-2"
                            width="40"
                            height="40"
                            src="{{ $user->avatar }}"
                            alt="Avatar">

                        {{ $user->username }}
                    </a>
                </div>
            </li>
        @empty
            <li>No friends yet.</li>
        @endforelse
    </ul>
</div>
