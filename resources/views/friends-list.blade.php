<h3 class="font-weight-bold text-xl-left mb-4">Following</h3>
<ul class="list-unstyled">
    @foreach(auth()->user()->follows as $user)
        <li>
            <div>
                <a href="{{ route('profile', $user) }}"
                   class="d-flex align-items-center small mb-3 btn-link">
                    <img
                        class="rounded-circle mr-2"
                        width="40"
                        height="40"
                        src="{{ $user->avatar }}"
                        alt="{{ $user->name }}">

                    {{ $user->name }}
                </a>
            </div>
        </li>
    @endforeach
</ul>
