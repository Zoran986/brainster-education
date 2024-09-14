@php 
    $classes ='p-4 bg-blue-400 rounded-xl flex-col text-center border border-transparent hover:border-blue-700 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>

    {{ $slot }}

</div>