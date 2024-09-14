@props(['project'])

<x-panel class="flex flex-col text-center">
<div class="text-sm"></div>

    <div class="py-8 ">
        <h3 class="group-hover:text-blue-700 text-xl font-bold transition-colors duration-300">{{ $project->title }}</h3>
        <p class="text-sm mt-4">{{ $project->description }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($project->tags as $tag)
                <x-tag :$tag size="small">Marketing</x-tag>
            @endforeach
          
            
            
        </div>
      <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/50/50" alt="" class="rounded">
    </div> 
</x-panel>