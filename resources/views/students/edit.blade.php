@extends('students.layout')

@section('content')
    <style>
        body {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP07BZZ3RvRodDMRyFUAl5yVvnA73eBzNOWg&s');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; 
            margin: 0;
            height: 100vh;
        }
        .content-wrapper {
            background: rgba(255, 255, 255, 0.9); /* Optional: semi-transparent background for content */
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="card content-wrapper">
                    <div class="card-header">
                        <h2>Update Blog</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('student/' . $students->id) }}" method="post">
                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="id" value="{{ $students->id }}" />
                            
                            <div class="form-group">
                                <label for="name">Heading</label>
                                <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control">
                            </div>
                            
                            <div class="form-group mt-3">
                                <label for="address">Paragraph</label>
                                <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control">
                            </div>
                            
                            <div class="form-group mt-3">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control">
                            </div>
                            
                            <input type="submit" value="Update" class="btn btn-success mt-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
