
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
        
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        {{-- <h3>Car {{ $car['id'] }}</h3>
        <ul class="list-group">
            <li>Description: {{ $car['description'] }}</li>
            <li>Model: {{ $car['model'] }}</li>
            <li>Produced on: {{ $car['produced_on'] }}</li>
            <li><img src="/images/{{ $car['image'] }}" alt="..."></li>
        </ul> --}}
      
{{-- 
      <div class="card ml-5" style="width: 18rem;">
        <img src="/images/{{ $car['image'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $car['model'] }}</h5>
          <p class="card-text">{{ $car['description'] }}</p>
          <a href="#" class="btn btn-primary">ADD CARD</a>
        </div>
      </div> --}}

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Decription</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $car['id'] }}</th>
            <td>{{ $car['description'] }}</td>
            <td><img src="/images/{{ $car['image'] }}" class="card-img-top" alt="..."></td>
            <td>
              <button type="delete">Delete</button>
              <button type="delete">Update</button>

            </td>
          </tr>
        </tbody>
      </table>

      </body>


    </html>
