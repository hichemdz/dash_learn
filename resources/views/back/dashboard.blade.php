@extends('back.base')

@section('aside')

  <aside id='aside' class="fixed  bg-gray-800 top-0 h-screen left-0 w-64">
    
    @include('back.components.aside.header')

   {{-- aside content --}}
    @include('back.components.aside.content')
   
  </aside>

@endsection

@section('content')
  <div class="content ml-64 bg-gray-600  h-screen">
      <header class="bg-gray-700 p-3 h-12">
        
      </header>
      <div class="p-5">
        <section class="bg-gray-800 p-3">
          <div class="flex items-center justify-between">
            
          @include('back.components.aside.components.header',
                      [ 'title' => 'Portfolio Performance ',
                        'class' => 'text-gray-50'
                      ])

          <a  class="px-4 py-2 border border-gray-200 text-gray-50 text-sm" href="">
              View All
          </a>            
          </div>
          <div class="flex justify-between px-3">
            
            @include('back.components.content.card',
                        [ 'title' => 'Cash Deposits',
                          'class' => 'bg-yellow-500',
                          'number' => '1.7MB',
                          'icon' => '<svg class="fill-current w-8 h-16" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>'
                        ])

            @include('back.components.content.card',
                        [ 'title' => 'Cash Deposits',
                          'class' => 'bg-green-500',
                          'number' => '1.7MB',
                          'icon' => '<svg class="fill-current w-8 h-16" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>'
                        ])    
                        

            @include('back.components.content.card',
                        [ 'title' => 'Cash Deposits',
                          'class' => 'bg-pink-500',
                          'number' => '1.7MB',
                          'icon' => '<svg class="fill-current w-8 h-16" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>'
                        ])                               

          </div>

                              
        
                  
        </section>
        
      </div>

  </div>
@endsection
