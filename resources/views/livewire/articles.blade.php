<div>
    <h1>Listado de Articulos</h1>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
    </ul>
</div>
