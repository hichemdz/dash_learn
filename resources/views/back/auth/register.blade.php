@extends('back/base')
@section('content')
<div class="bg-gray-800 h-screen flex justify-center items-center">
    <div class="w-1/2  md:w-1/4  py-3 px-3">
        <h1 class="text-4xl w-full forn-black text-gray-200 mb-5 text-center">Register Admin</h1>
        <form method="POST" action="{{route('register')}}">
            @csrf
            <input type="name"  class=" w-full px-3 py-2 mb-2  border-2 @error('name') bg-red-200 text-gray-300 border-red-800 @enderror" name="name" placeholder="name">
            @error('name')
              <p class="text-md text-red-300 mb-2">{{$message}}</p>
            @enderror
        
            <input type="email"  class=" w-full px-3 py-2 mb-2" name="email" placeholder="email">
            @error('email')
              <p class="text-md text-red-300" mb-2>{{$message}}</p>
            @enderror
           
            <input type="password" class=" w-full px-3 py-2 mb-2" name="password" placeholder="password">
             @error('password')
              <p class="text-md text-red-300" mb-2>{{$message}}</p>
            @enderror
            
            <input type="submit" class="bg-gray-600 px-5 text-gray-200 rounded py-1   " value="login">
            {{-- @if(Route::has("register"))
                 <a class="ml-2 text-blue-500" href="{{route("register")}}">Create Your account ?</a>
            @endif --}}
        </form>
    </div>    
</div>
@endsection