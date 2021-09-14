<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('continents.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('continents.index')}}">Continents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('equipes.index')}}">Equipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('joueurs.index')}}">Joueurs</a>
          </li>
        </ul>
      </div>
    </div>
</nav>