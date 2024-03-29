<x-layout>

    <!-- [['title' => 'Prodotto 1', 'category' => 'Jewelery', 'description' => 'Descrizione 1']  -->
    <div class="container" id="containerCard">
        <div class="row">
            @if (count($arrayProdotti) > 0)
                @foreach ($arrayProdotti as $chiave => $prodotto)
                    <x-card 
                    :titolo="$prodotto['title']" 
                    :category="$prodotto['category']" 
                    :description="$prodotto['description']"
                    :chiave="$chiave"
                    >
                    </x-card>
                @endforeach
            @else
                <h1 class="erroreArrayVuoto">{{ $Errore }}</h1>
            @endif
        </div>
    </div>

</x-layout>
