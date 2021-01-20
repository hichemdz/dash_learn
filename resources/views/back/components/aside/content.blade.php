 <div class="aside_content ">
  	   
       {{-- collaps --}}
       <div class="text-gray-50">
        @include('back.components.aside.components.header',
                    [ 'title' => 'Dashboard'
                    ])
        {{-- items--}}
        <nav class="flex flex-col pl-2 ">
          {{-- link home --}}
           @include('back.components.aside.components.linke',
                    [ 'link' => '#',
                      'name'=>'Analytics',
                      'icon' => '<svg class="fill-current w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                         <path d="M0 0h24v24H0z" fill="none"/>
                         <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                       </svg>'
                    ])

                                      
           
        </nav>
       </div>



  		 {{-- collaps --}}
  		 <div class="text-gray-50">
  		 	@include('back.components.aside.components.header',
  		 		          [ 'title' => 'Users'
  		 		          ])
  		 	{{-- items--}}
  		 	<nav class="flex flex-col pl-2 ">
  		 		{{-- link home --}}
  		 		 @include('back.components.aside.components.linke',
  		 		          [ 'link' => '#',
  		 		          	'name'=>'Admins',
  		 		            'icon' => '<svg class="fill-current w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
					 		   <path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
					 		   </svg>'
  		 		          ])

  		 		 @include('back.components.aside.components.linke',
  		 		          [ 'link' => '#',
  		 		          	'name'=>'Mumbers',
  		 		            'icon' => '<svg class="fill-current w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
					 		   <path d="M0 0h24v24H0z" fill="none"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
					 		   </svg>'
  		 		          ])
  		 		          	                
  		 	   
  		 	</nav>
  		 </div>

  	</div>