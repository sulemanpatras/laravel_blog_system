<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            margin-top:20px;
            background-image: url('https://t3.ftcdn.net/jpg/06/39/61/94/240_F_639619461_lPeuANkarLCORSetPnFA5pVMfEopHmpc.jpg');
            height: 100vh; 
        }
        .blog-grid {
            position: relative;
            box-shadow: 0 1rem 1.75rem 0 rgba(45, 55, 75, 0.1);
            height: 100%;
            border: 0.0625rem solid rgba(220, 224, 229, 0.6);
            border-radius: 0.25rem;
            transition: all .2s ease-in-out;
            height: 100%
        }
        .blog-grid span {
            color: #292dc2
        }
        .blog-grid img {
            width: 100%;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem
        }
        .blog-grid-text {
            position: relative
        }
        .blog-grid-text>span {
            color: #292dc2;
            font-size: 13px;
            padding-right: 5px
        }
        .blog-grid-text h4 {
            line-height: normal;
            margin-bottom: 15px
        }
        .blog-grid-text .meta-style2 {
            border-top: 1px dashed #cee1f8;
            padding-top: 15px
        }
        .blog-grid-text .meta-style2 ul li {
            margin-bottom: 0;
            font-weight: 500
        }
        .blog-grid-text .meta-style2 ul li:last-child {
            margin-right: 0
        }
        .blog-grid-text ul {
            margin: 0;
            padding: 0
        }
        .blog-grid-text ul li {
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin: 5px 10px 5px 0
        }
        .blog-grid-text ul li:last-child {
            margin-right: 0
        }
        .blog-grid-text ul li i {
            font-size: 14px;
            font-weight: 600;
            margin-right: 5px
        }
        .blog-grid-text p {
            font-weight: 400;
            padding: 0
        }
        .pagination {
            border-radius: 0;
            padding: 0;
            margin: 0
        }
        .pagination ul {
            display: inline-block;
            display: inline;
            zoom: 1;
            margin: 0 auto;
            padding: 0
        }
        .pagination li {
            display: inline
        }
        .pagination a {
            float: left;
            padding: 0 18px;
            line-height: 40px;
            text-decoration: none;
            border: 1px solid #dbdbdb;
            border-left-width: 0;
            background: #fff
        }
        .pagination a:hover {
            background-color: #1d184a;
            color: #fff
        }
        .pagination .active a {
            background-color: #f7f7f7;
            color: #999;
            cursor: default
        }
        .pagination .disabled span {
            color: #999;
            background-color: transparent;
            cursor: default
        }
        .pagination .disabled a {
            color: #999;
            background-color: transparent;
            cursor: default
        }
        .pagination .disabled a:hover {
            color: #999;
            background-color: transparent;
            cursor: default
        }
        .pagination li:first-child a {
            border-left-width: 1px
        }
        .mt-6, .my-6 {
            margin-top: 3.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Blogs Lists</h2>
                    </div>
                    
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <!-- Add the Logout Form here -->
                            <form method="POST" action="{{ route('logout') }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm" title="Logout">
                                    <i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout
                                </button>
                            </form>
                        </div>
                        
                        <form method="POST" action="{{ url('/students/delete-all') }}" accept-charset="UTF-8" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete All Students" onclick="return confirm('Confirm delete all blogs?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete All
                            </button>
                        </form>

                        <br/><br/>
                        <div class="container">
                            <div class="row">
                                @foreach($students as $item)
                                    <div class="col-md-6 col-lg-4 mt-5">
                                        <div class="blog-grid">
                                            <div class="blog-grid-text p-3">
                                                <h5 class="h5 mb-3">{{ $item->name }}</h5>
                                                <p class="display-30"><strong>Paragraph:</strong> {{ $item->address }}</p>
                                                <p class="display-30"><strong>Mobile:</strong> {{ $item->mobile }}</p>
                                                <div class="meta meta-style2">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student">
                                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form method="POST" action="{{ url('/student/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                                </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2DZXh6qaQF31bbbu6Lw1VYl9G7lW3dsrZ8/jwZ/jBRnF5CWu3lX8Sp/iCgJ" crossorigin="anonymous"></script>
</body>
</html>
