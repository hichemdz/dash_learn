
<div class="flex justify-start w-full text-gray-50   py-5 items-center ">
  <div class="rounded-full mr-2  @isset($class) {{$class}}@endisset  w-16 h-16 flex items-center justify-center">
    {!!$icon!!}
  </div>
  <div class="flex flex-col items-starrt">
    <h4 class="font-bold pl-1">{{$title}}</h4>
    <p class="text-4xl font-black">{{$number}}</p>
  </div>
</div>
                