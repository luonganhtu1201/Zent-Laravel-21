<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>


    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>

        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 151px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default bg-light m-3">
    <div class="container">
        <div class="navbar-header w-100 text-center">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Chi tiết công việc
            </a>
        </div>

    </div>
</nav>
<div class="container">
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
            <div class="panel-body">
                <h4>Tên công việc: {{ $task->name }}</h4>

                <h4>Nội dung</h4>{{ $task->content }}
                <h4>Thời hạn</h4>{{ $task->deadline }}
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>