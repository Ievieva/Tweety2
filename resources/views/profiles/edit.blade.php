@extends('layouts.app')

@section('content')
    <div class="mr-4">
        <form method="post" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="name"
                >
                    Name
                </label>
                <input class="border border-gray-400 p-2 w-100"
                       type="text"
                       name="name"
                       id="name"
                       value="{{ $user->name }}"
                       required
                >
                @error('name')
                <p class="text-danger small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="username"
                >
                    Username
                </label>
                <input class="border border-gray-400 p-2 w-100"
                       type="text"
                       name="username"
                       id="username"
                       value="{{ $user->username }}"
                       required
                >
                @error('username')
                <p class="text-danger small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="avatar"
                >
                    Avatar
                </label>
                <div class="d-flex">
                    <input class="border border-gray-400 p-2 w-100"
                           type="file"
                           name="avatar"
                           id="avatar"
                           value="{{ $user->avatar }}"
                    >
                    <img src="{{ $user->avatar }}"
                         alt="your avatar"
                         width="40"
                    >
                    @error('avatar')
                    <p class="text-danger small mt-2">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="email"
                >
                    Email
                </label>
                <input class="border border-gray-400 p-2 w-100"
                       type="email"
                       name="email"
                       id="email"
                       value="{{ $user->email }}"
                       required
                >
                @error('email')
                <p class="text-danger small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="password"
                >
                    Password
                </label>
                <input class="border border-gray-400 p-2 w-100"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
                @error('password')
                <p class="text-danger small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    class="d-block mb-2 text-uppercase font-weight-bold small text-black-50"
                    for="password_confirmation"
                >
                    Password confirmation
                </label>
                <input class="border border-gray-400 p-2 w-100"
                       type="password"
                       name="password_confirmation"
                       id="password_confirmation"
                       required
                >
                @error('password_confirmation')
                <p class="text-danger small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-info font-weight-bold rounded-pill shadow py-2 px-4 text-white mr-4">
                {{ __('Submit') }}
            </button>

            <a class="font-weight-bold mb-4 btn-link" href="{{ $user->path() }}">Cancel</a>

        </form>
    </div>
@endsection
