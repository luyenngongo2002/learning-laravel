   <!DOCTYPE html>
   <html lang="en">

   <head>
       <title>Bootstrap Example</title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   </head>

   <body>

       <div class="container">
           <h2>Edit car</h2>
           {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
           <a href="{{ route('cars.index') }}">Go back to car list</a>
           <form action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data" class="was-validated" method='post'>
               @csrf
               @method('put')
               <div class="form-group">
                   <label for="description">Description:</label>
                   <input type="text" class="form-control" id=""
                       value=" {{ isset($car) ? $car->description : '' }}" placeholder="Enter description"
                       name="description">
                   <div class="valid-feedback"></div>
                   <div class="invalid-feedback"></div>
               </div>
               <div class="form-group">
                   <label for="model">Model:</label>
                   <input type="text" class="form-control" id="" placeholder="Enter description"
                       name="model" value=" {{ isset($car) ? $car->model : '' }}">
                   <div class="valid-feedback"></div>
                   <div class="invalid-feedback"></div>
               </div>
               <div class="form-group">
                   <label for="products_on">Product_on:</label>
                   <input type="text" class="form-control" id="" placeholder="Enter description"
                       name="products_on" value=" {{ isset($car) ? $car->products_on : '' }}">
                   <div class="valid-feedback"></div>
                   <div class="invalid-feedback"></div>
               </div>        
               <div class="form-group">
                    <label for="mf_name">Manufacture:</label>
                    <select class="js-states browser-default select2" name="mf_id" >
                        @foreach($mfs as $mf)
                            <option value="{{ $mf->id }}" {{ $car->mf->id == $mf->id ?  "selected" :"" }}>{{ $mf->mf_name}}</option>
                        @endforeach
                    </select>
                </div>
               <div class="form-group">
                   <label for="image">Image:</label>
                   <img id ="newImage" src="/images/{{ isset($car) ? $car->image : '' }}" alt="">
                   <input type="file" class="form-control" name="image" onchange="changeImage(event)">
                   <div class="valid-feedback"></div>
                   <div class="invalid-feedback"></div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
           </form>
           <script>
               const changeImage = (e) => {
                   console.log('change')
                   var imgEle = document.getElementById('newImage')
                   imgEle.src = URL.createObjectURL(e.target.files[0])
                   imgEle.onload = () => {
                    RL.revokeObjectURL(output.src)
                   }
               }
           </script>
       </div>

   </body>

   </html>
