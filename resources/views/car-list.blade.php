
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
      <body>
        {{-- Hiện thị arlert thành công --}}
        <div class="container">
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{
                Session::get('success')
            }}
          </div>   
          @endif
          <a href="http://127.0.0.1:8000/cars/create">Thêm mới xe</a>
            <table class="table">
            <thead class="thead-dark">
              
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Decription</th>
                <th scope="col">Products_on</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)  
            <tr>
                <th scope="row">{{ $car->id }}</th>
                <td>{{ $car->description }}</td>
                <td>{{ $car->products_on }}</td>
                <td><img src="/images/{{$car-> image}}" style="width: 200px" class="card-img-top" alt="..."></td>
                <td style="font-size:25px">
                <button  type="submit" onclick="window.location='{{ route('cars.edit', $car ->id)}}'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
              <form method="post" action="{{ route('cars.destroy', $car->id) }}">
                  @csrf
                  @method('delete')  
                <button type="submit" onclick="return myConfirm();"><i class="fa fa-trash" aria-hidden="true"></i></button>
              </form>
              </td>
              <script>
                function myConfirm() {
                  var result = confirm("Want to delete?");
                  if (result==true) {
                  return true;
                  } else {
                  return false;
                  }
                }
              </script>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
      </body>
    </html>
