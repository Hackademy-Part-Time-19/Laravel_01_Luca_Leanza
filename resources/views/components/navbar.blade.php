<nav class="containerNavbar">
    <div class="container1">
        <div class="containerImgNav">
            <img src="/Screenshot 2023-12-07 193528.png" alt="">
        </div>
        <div class="containerLink">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('articoli') }}">Articoli</a>
            <a href="{{ route('chiSono') }}">Chi Sono</a>
        </div>    
        <div class="Dropdown">
            <div class="dropdown">
                <button id="dropdownButton" class="btn btn-secondary dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul id="dropdown-menu" class="dropdown-menu">
                    @foreach ($arrayCategorie as $categoria)
                    <li><a class="dropdown-item" href="{{ route('articoli.category', ['category' => $categoria]) }}">{{$categoria}}</a></li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
        <div class="containerDropdown">

        </div>
</nav>
