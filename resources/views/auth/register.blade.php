@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="sr-only" for="name">
                        Name
                    </label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        id="name" name="name" type="text" placeholder="Your name" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="username">
                        Username
                    </label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                        id="username" name="username" type="text" placeholder="Username" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="email">
                        Email
                    </label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                        id="email" name="email" type="email" placeholder="Your email" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="password">
                        Password
                    </label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        id="password" name="password" type="password" placeholder="Choose a password">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="password_confirmation">
                        Password again
                    </label>
                    <input
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                        id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Repeat your password" name="password_confirmation">
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
