<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Project</h1>

            <form action="" class="mt-5">
               <input type="text" placeholder="Web Developer.." class="rounded bg-white/50 border-white/100 px-4 py-2  w-full max-w-xl"> 
            </form>
        </section>

        <section class="pt-10">
            <x-section-heading>Project</x-section-heading>
     
             <div class="grid lg:grid-cols-3 gap-8 mt-6">
                 @foreach($projects as $project )
                 <x-project-card :$project />
                @endforeach
             </div>
             
         </section>
     
         <section>
             <x-section-heading>Tags</x-section-heading>
             <div>
                @foreach($tags as $tag)
                    <x-tag :$tag />
                @endforeach
         <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($projects as $project )
                 <x-project-card-wide :$project />
                @endforeach
            </div>
         </section>
        <x-footer />
    </div>
    
</x-layout>