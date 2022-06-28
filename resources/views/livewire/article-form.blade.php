<div>
    <h1>Crear artículo</h1>
    <form wire:submit.prevent="save">
        <label for="title">
            <input 
                wire:model="title"
                type="text" 
                placeholder="Título"
            >
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </label>

        <label for="content">
            <textarea 
                wire:model="content"
                placeholder="Contenido"
            ></textarea>
        </label>
        <input type="submit" value="Guardar">
    </form>
</div>
