<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalhes do Livro</h1>

<p><strong>ID:</strong> {{ $book->id }}</p>
<p><strong>Título:</strong> {{ $book->title }}</p>
<p><strong>Autor:</strong> {{ $book->author }}</p>
<p><strong>Criado em:</strong> {{ $book->created_at->format('d/m/Y H:i') }}</p>

<a href="{{ route('books.index') }}">← Voltar para a lista</a> | 
<a href="{{ route('books.edit', $book->id) }}">Editar este livro</a>
</body>
</html>