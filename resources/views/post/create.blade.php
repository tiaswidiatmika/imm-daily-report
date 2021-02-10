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
                <input type="text" name="title" id="title" value="title dari form">
            </div>
            
            <div>
                <label for="body">create the report here</label>
            </div>
            
            <div>
                <textarea name="body" id="body" cols="50%" rows="10" class="resize-none">value body dari form</textarea>
            </div>

            <div>
                <label for="post_id">post id</label>
                <input type="text" name="post_id" id="post_id" value="1">
            </div>
            
            <div>
                <label for="attachment_title">attachment_title</label>
                <input type="text" name="attachment_title" id="attachment_title" value="attachment_title dari form">
            </div>

            <div>
                <label for="category">category</label>
                <input type="text" name="category" id="category" value="category dari form">
            </div>

            <div>
                <label for="path">path</label>
                <input type="text" name="path" id="path" value="path dari form">
            </div>
            
            <div>
                <button type="submit" autofocus>submit</button>
            </div>
        
        
    </form>
    
</body>
</html>