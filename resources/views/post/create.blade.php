<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('create-post') }}" method="post">
        @csrf
        
        <div>
            <p>{{ now()->toFormattedDateString() }}</p>
        </div>

        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="title" class="">
        </div>

        <div>
            <label for="body">create the report here</label>
        </div>

        <div>
          <textarea name="body" id="body" cols="50%" rows="10" class="resize-none"></textarea>
        </div>

        <div>
          <button type="submit">submit</button>
        </div>
        
    </form>
    
</body>
</html>