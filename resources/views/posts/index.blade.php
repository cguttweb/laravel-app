@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="bg-white p-4 w-4/5">
      <form action="{{ route('posts') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for=""></label>
          <textarea name="body" id="body" cols="30" rows="5" placeholder="Add a post" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-600 @enderror"></textarea>

          @error('body')
          <div class="text-red-600 text-sm">
            {{ $message }}
          </div>
          @enderror

          <div>
            <button type="submit" class="bg-blue-500 px-4 py-3 rounded-lg text-white">Post</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection