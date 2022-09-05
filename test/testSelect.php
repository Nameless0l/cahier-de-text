<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Blog Template · Bootstrap</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    .dropright {
        position: relative;
    }

    .dropright .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    </style>

</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Dropdown link</a>
                <div class="dropdown-menu">
                    <span class="dropdown-header" href="#">header</span>
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <span class="dropdown-header">header</span>
                    <div class="dropright">
                        <button class="btn btn-light dropdown-toggle" data-toggle="dropdown">Dropright button</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropright">
                        <button class="btn btn-light dropdown-toggle" data-toggle="dropdown">Dropright button</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a>Test </a>
            </li>
        </ul>
    </nav>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.dropright button').on("click", function(e) {
            e.stopPropagation();
            e.preventDefault();

            if (!$(this).next('div').hasClass('show')) {
                $(this).next('div').addClass('show');
            } else {
                $(this).next('div').removeClass('show');
            }

        });
    });
    </script>

</body>


</html>