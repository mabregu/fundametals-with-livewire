<div>
    <h1>Listado de Artículos</h1>
    
    <a href="{{route('articles.create')}}">Crear</a>

    <input 
        wire:model="search" 
        type="search" 
        placeholder="Buscar..."
    >

    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{route('articles.show', $article)}}">
                    {{$article->title}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
