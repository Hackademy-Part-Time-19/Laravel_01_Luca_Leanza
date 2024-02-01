<x-layout>
    <h1 class="titoloHome">Chi Sono</h1>

    <div class="containerDescrizione">
        <p class="descrizione">{{ $descrizione }}</p>
    </div>

   <x-success/>
   
    <form class="containerForm" action="{{route("contact.send")}}" method="POST">
        @csrf
        <h1 class="titoloForm">Contattami per ulteriori info</h1>
            <div class="col-12">
                <label for="exampleInputEmail" class="form-label">Nome</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Cognome</label>
                <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-12">
                <label for="exampleInputEmail1" class="form-label">Dettagli richiesta</label>
                <input name="dettaglioRichiesta" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Submit</button>
        </form>
 

</x-layout>
