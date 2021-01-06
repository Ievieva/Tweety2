@extends('layouts.app')

@section('content')
    <header class="mb-5 position-relative">
        <div class="position-relative">
            <img
                class="w-100 mb-2"
                src="/images/default-profile-banner.jpeg"
            >
            <img
                class="rounded-circle position-absolute"
                style="width: 150px; left: calc(50% - 75px); top: 60%"
                src="{{ $user->avatar }}"
                alt="avatar">
        </div>
        <div class="d-flex justify-content-between align-items-center mb-lg-4">
            <div>
                <h4 class="font-weight-bolder mb-0">{{ $user->name }}</h4>
                <p class="small">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="d-flex">
                @can ('edit', $user)

                    <a href="{{ $user->path('edit') }}" class="small rounded-pill border border-gray-400 py-1 px-3 text-black-100 mr-2">Edit
                        profile</a>
                @endcan
                @if (current_user()->isNot($user))
                    <form method="post" action="/profiles/{{ $user->username }}/follow">
                        @csrf
                        <button
                            type="submit"
                            class="small bg-info rounded-pill shadow py-1 px-3 text-white"
                        >
                            {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <p class="small">
            Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few
            extras thrown in for more control.
        </p>
    </header>

    @include('timeline', [
    'tweets' => $user->tweets
])
@endsection
