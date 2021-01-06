<h3 class="font-weight-bold text-xl-left mb-4">Following</h3>
<ul class="list-unstyled">
    @forelse(auth()->user()->follows as $user)
        <li>
            <div>
                <a href="{{ route('profile', $user) }}"
                   class="d-flex align-items-center small mb-3 btn-link">
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
