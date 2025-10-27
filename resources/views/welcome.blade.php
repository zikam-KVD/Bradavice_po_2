<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="koleje" class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                @foreach($colleges as $kolej)
                    <div>
                        {{ $kolej->nazev }}
                        <img src="{{ asset('images/' . $kolej->obrazek) }}" alt="{{ $kolej->nazev }}">
                    </div>                   
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
