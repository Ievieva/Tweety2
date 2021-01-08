@extends('layouts.app')

@section('content')
<div class="align-items-center pr-4">
    @foreach($users as $user)
        <div class="d-flex mb-2">
            <a href="{{ route('profile', $user) }}"
               class="d-flex align-items-center mb-3 btn-link">
                <img
                    class="rounded-circle mx-4"
                    width="50"
                    src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar">

                <h5 class="font-weight-bold">{{ '@' . $user->username }}</h5>
            </a>
        </div>
    @endforeach

    {{ $users->links() }}
</div>
@endsection
