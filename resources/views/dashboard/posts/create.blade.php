<head>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>
<body>
<h1>Create New Post</h1>
<form method="post" action="/dashboard/posts">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required autofocus>
        @error('title')
            <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug" disabled>
    </div>
    <div>
        <label for="category">Category</label>
        <select name="category_id" id="" required autofocus>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="body">Body</label>
        <input id="x" type="hidden" name="content" required autofocus>
        <trix-editor input="x"></trix-editor>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Submit</button>
</form>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value) // Add '=' here
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
    })

</script>
</body>