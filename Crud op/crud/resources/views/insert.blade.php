<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Add Post</h1>
        <form method="POST" action="/store">
            @csrf
            <div class="mb-3">
                <label><b>Post Title:</b></label>
                <input type="text" name="title" class="form-control"/>
            </div>
            <div class="mb-3">
                <label><b>Post Aurther:</b></label>
                <input type="text" name="author" class="form-control"/>
            </div>
            <input type="submit" name="insert" value="insert" class="btn btn-primary"/>
        </form>
    </div>
</body>
</html>