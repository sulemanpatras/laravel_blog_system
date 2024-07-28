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
            <div class="card">
                <div class="card-header">
                    <h2>Create Blogs</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('student') }}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="name">Heading</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address" class="mt-3">Paragraph</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="mt-3">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control">
                        </div>

                        <input type="submit" value="Save" class="btn btn-success mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
