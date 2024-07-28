@extends('students.layout')
@section('content')

<style>
        body {
            background-image: url('https://t3.ftcdn.net/jpg/06/39/61/94/240_F_639619461_lPeuANkarLCORSetPnFA5pVMfEopHmpc.jpg');
           
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
            <div class="card">
                <div class="card-header">
                    <h2>Blog</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Heading: {{ $students->name }}</h5>
                    <p class="card-text">Paragraph: {{ $students->address }}</p>
                    <p class="card-text">Mobile: {{ $students->mobile }}</p>
                </div>          
        </div>
</div>

@endsection
