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
        <div class="container">
      <h1>Giải phương trình bậc nhất</h1>
        {{--  Function Check lỗi --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        
        @error('a')
            <div class="alert alert-danger">Vui lòng nhập đúng</div>
        @enderror
        @error('b')
            <div class="alert alert-danger">Vui lòng nhập đúng nha</div>
        @enderror
        {{-- <form action="{{ route('GPTBN.post') }}" method = "post"> --}}
        <form action="/GPTBN" method = "post">
            {{-- action="/GPTBN"  --}}
            <div class="mb-3">
                @csrf
                <label for="exampleInputEmail1" class="form-label">Số a:</label>
                <input type="text" class="form-control" name="a" value="{{ isset($a) ? $a:''}}">x +
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số b:</label>
                <input type="text" class="form-control" name="b" value="{{ isset($b) ? $b:''}}"> = 0 
            </div>
            <button type="submit" class="btn btn-primary">Giải</button>
        </form>
        <h4>{{ isset($kq) ? $kq:''}}</h4>
        </div>
      </body>


    </html>