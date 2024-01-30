<x-layout>
    <div class="container" id="containerCard">
        <div class="row">
            
                @foreach ($arrayProdotti as $chiave => $prodotto)
                    <x-card 
                    :titolo="$prodotto['title']" 
                    :category="$prodotto['category']" 
                    :description="$prodotto['description']"
                    :chiave="$chiave"
                    >
                    </x-card>
                @endforeach

        </div>
    </div>
</x-layout>