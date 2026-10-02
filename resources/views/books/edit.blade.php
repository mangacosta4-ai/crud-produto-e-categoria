<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar Livro</h1>

<a href="{{ route('books.index') }}">← Voltar</a>

<form action="{{ route('books.update', $book->id) }}" method="POST" style="margin-top: 15px;">
    @csrf
    @method('PUT') {{-- Obrigatório para atualizar --}}

    <div>
        <label for="title">Título:</label><br>
        <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <div>
        <label for="author">Autor:</label><br>
        <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}">
        @error('author') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <button type="submit">Atualizar Livro</button>
</form>
</body>
</html>