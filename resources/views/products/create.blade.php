<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastrar Novo Produto</h1>

<a href="{{ route('products.index') }}">← Voltar</a>

<form action="{{ route('products.store') }}" method="POST" style="margin-top: 15px;">
    @csrf

    <div>
        <label for="name">Nome:</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
   
    <div>
        <label for="price">Preço:</label><br>
        <input type="text" name="price" id="price" value="{{ old('price') }}">
        @error('price') <span style="color: red;">{{ $message }}</span> @enderror
    </div>
   
    <div>

        <select name="category_id" id="category_id">
    <option value=""> Selecionar categorias</option>
    @foreach(\App\Models\Category::all() as $category)
    <option value="{{$category->id}} "> {{$category->name}}
    
    </option>
    @endforeach
        </select>
    </div>

    <br>


    <button type="submit">Salvar Produto</button>
</form>
</body>
</html>