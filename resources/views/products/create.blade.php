<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="heading1">Create Product</h1>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
            <ul>{{$error}}</ul>
            @endforeach
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}" id="formdesign">
    <!-- <form action="POST" action="{{route('product.store')}}" id="formdesign"> -->
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label for="qty">Quantity:</label>
            <input type="text" name="qty" placeholder="Quantity">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <input type="submit" Value="Save Product" id="submit">
        </div>        
    </form>
</body>
<script>
    let heading1 = document.getElementById("heading1");
    heading1.style.color = "green";
    heading1.style.textAlign = "center";

    let formdesign = document.getElementById("formdesign");
    formdesign.style.textAlign = "center";
    let submit = document.getElementById("submit");
    submit.style.backgroundColor = "green";
</script>
</html>
