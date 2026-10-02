<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastrar Novo Livro</h1>

<a href="{{ route('books.index') }}">← Voltar</a>

<form action="{{ route('books.store') }}" method="POST" style="margin-top: 15px;">
    @csrf

    <div>
        <label for="title">Título:</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        @error('title') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <div>
        <label for="author">Autor:</label><br>
        <input type="text" name="author" id="author" value="{{ old('author') }}">
        @error('author') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
    
    <div>
        <label for="price">Preço (R$):</label><br>
        <input type="number" step="0.01" min="0" name="price" id="price" value="{{ old('price') }}" placeholder="0.00">
        @error('price') <span style="color: red;">{{ $message }}</span> @enderror
    </div>

    <br>

    <button type="submit">Salvar Livro</button>
</form>
</body>
</html>