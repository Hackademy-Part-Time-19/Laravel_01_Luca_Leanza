<div class="card" id="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$titolo}}</h5>
        <p class="card-text">{{$category}}</p>
        <p class="card-text">{{$description}}</p>
        <a href="{{ route('articoli.dettaglio', ['id' => $chiave]) }}"
            class="btn btn-primary">Dettaglio</a>
    </div>
</div>