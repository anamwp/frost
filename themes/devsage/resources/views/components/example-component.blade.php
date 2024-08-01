<div {{ $attributes }}>
    {{-- this is default way of blade component --}}
    {{-- anything that is passed through this component will be render within $slot --}}
    {{-- {!! $slot !!} --}}
    {{ $slot }}
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <h2 class="text-2xl bg-gray-800 text-white">hello from examaple-component.blade.php</h2>
    <h2 class="text-2xl bg-gray-800 text-white">{!! $title !!}</h2>
    <h3>{!! $title !!}</h3>

    
</div>
{{-- <h2>hello world</h2> --}}

