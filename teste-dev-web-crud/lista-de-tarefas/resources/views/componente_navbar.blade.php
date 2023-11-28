<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 5px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lista de tarefas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a @if($current == "home") class="nav-link active" @else class="nav-link" @endif aria-current="page" href="{{ route('home') }}">Home</a>
                <a @if($current == "tarefas") class="nav-link active" @else class="nav-link" @endif href="{{ route('tarefas') }}">Tarefas</a>
                <a @if($current == "nova-tarefa") class="nav-link active" @else class="nav-link" @endif href="{{ route('cadastrar') }}">Nova tarefa</a>
            </div>
        </div>
    </div>
</nav>
