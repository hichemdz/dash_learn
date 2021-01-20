@extends('back/base')

@section('content')
<div class="bg-gray-800 h-screen flex justify-center items-center">
    <div class="w-1/2  md:w-1/4  py-3 px-3">
        <h1 class="text-4xl w-full forn-black text-gray-200 mb-5 text-center">Login Admin</h1>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <input type="email"  class=" w-full px-3 py-2" name="email" placeholder="email">
            <br>
            <br>
            <input type="password" class=" w-full px-3 py-2" name="password" placeholder="password">
            <br>
            <br>
            <input type="submit" class="bg-gray-600 px-5 text-gray-200 rounded py-1   " value="login">
            @if(Route::has("register"))
                 <a class="ml-2 text-blue-500" href="{{route("register")}}">Create Your account ?</a>
            @endif
        </form>
    </div>    
</div>
@endsection