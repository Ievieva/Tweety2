<ul class="list-unstyled">
    <li>
        <h5>
            <a
                class="font-weight-bold mb-4 d-block btn-link"
                href="{{ route('home') }}"
            >
                Home
            </a>
        </h5>
    </li>
    <li>
        <h5>
            <a
                class="font-weight-bold mb-4 d-block btn-link"
                href="/explore"
            >
                Explore
            </a>
        </h5>
    </li>

    <li>
        <h5>
            <a
                class="font-weight-bold mb-4 d-block btn-link"
                href="{{ route('profile', auth()->user()) }}"
            >
                Profile
            </a>
        </h5>
    </li>
    <li>
        <h5>
            <form method="post" action="/logout">
                @csrf
                <button class="font-weight-bold border-0 p-0 m-0 btn-link">Logout</button>
            </form>
        </h5>
    </li>
</ul>
