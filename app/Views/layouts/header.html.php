<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/app/Views/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="/app/Views/css/style.css" rel="stylesheet">

    <title>Test site</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Main</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <ul class="nav navbar-nav">
                <li><a href="/articles">Articles</a></li>
                <li><a href="/categories">Categories</a></li>
                <?php if (!empty($_SESSION['user_id'])): ?>
                    <li><a href='/logout'>Log out</a></li>
                <?php else: ?>
                    <li><a href="/login">Log in</a></li>
                    <li><a href="/registration">Registration</a></li>
                <?php endif; ?>
            </ul>
            <?php if (App\Auth\Auth::getUserRole() == 'admin'): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin">Admin zone</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="/app/Views/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="/app/Views/js/bootstrap.js"></script>
<script type="text/javascript" src="/app/Views/ckeditor/ckeditor.js"></script>