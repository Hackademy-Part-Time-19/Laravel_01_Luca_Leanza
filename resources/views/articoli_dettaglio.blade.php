<x-layout>
    <x-slot name="title">Dettaglio Articolo</x-slot>
    <div class="container" id="containerCard">
        <div class="row">
            <div class="card" id="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $arrayProdotti['title'] }}</h5>
                    <p class="card-text">{{ $arrayProdotti['category'] }}</p>
                    <p class="card-text">{{ $arrayProdotti['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
