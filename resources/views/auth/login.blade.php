@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="bg-white p-4 w-1/4">
      @if (session('status'))
      {{ session('status') }}
      @endif

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="mb-3">
          <label for="email" class="sr-only">Email:</label>
          <input class="bg-gray-200 border-2 p-2 rounded-md w-full" type="email" name="email" id="email" placeholder="Add your email" value="{{ old('email') }}">
        </div>
        @error('email')
          <div class="small text-red-600">{{ $message }} </div>
        @enderror

        <div class="mb-3">
          <label for="password" class="sr-only">Password:</label>
          <input class="bg-gray-200 border-2 p-2 rounded-md w-full" type="password" name="password" id="password" placeholder="Choose a password" value="">
        </div>
        @error('password')
          <div class="small text-red-600">{{ $message }} </div>
        @enderror

        <div class="mb-3">
          <button class="bg-blue-500 p-3 rounded-md text-white w-full" type="submit">Login</button>
        </div>
      </form>
    </div>
  </div>
@endsection