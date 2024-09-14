@props(['project'])

<x-panel class="flex  gap-x-6 justify-between">

    <div>
        <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/100/100" alt="" class="rounded">

    </div>
   
    <div class="flex-1 flex flex-col">
        
          <a href="#" class=" text-sm text-center transition-colors duration-300"></a>
        
       
       <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{ $project->title}}</h3>

        <p class="text-sm text-gray-400 mt-auto">mail</p>
    </div>
  
    <div>
        @foreach($project->tags as $tag)
            <x-tag :$tag>Marketing</x-tag>
        @endforeach
    </div> 

</x-panel>