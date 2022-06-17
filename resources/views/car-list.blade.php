
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
      </head>
      <body>
     
        <div class="container">
          <a href="http://127.0.0.1:8000/cars/create">Thêm mới xe</a>
            <table class="table">
            <thead class="thead-dark">
              
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Decription</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)  
            <tr>
                <th scope="row">{{ $car->id }}</th>
                <td>{{ $car->description }}</td>
                <td><img src="/images/{{$car-> image}}" style="width: 200px" class="card-img-top" alt="..."></td>
                <td>
                <button type="delete">Delete</button>
                <button type="delete">Update</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
      </body>
    </html>
