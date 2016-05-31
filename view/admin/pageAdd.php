<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des pages</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../">Accueil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
    <form action="" method="post">
        <fieldset class="form-group">
            <!--Slug-->
            <label for="slug">slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" required>
            <!--H1-->
            <label for="h1">h1</label>
            <input type="text" class="form-control" id="h1" name="h1" placeholder="h1" required>
            <!--Title-->
            <label for="title">title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
            <!--Body-->
            <label for="body">title</label>
            <input type="text" class="form-control" id="body" name="body" placeholder="Body" required>
            <!--Img-->
            <label for="img">img</label>
            <input type="text" class="form-control" id="img" name="img" value="img/three_kittens.jpg" required>
            <!--Span text-->
            <label for="span_text">span text</label>
            <input type="text" class="form-control" id="span_text" name="span_text" placeholder="Span Text" required>
            <!--Span class-->
            <label for="span_class">span class</label>
            <select class="form-control" id="span_class" name="span_class">
                <option>label-danger</option>
                <option>label-success</option>
            </select>
        </fieldset>
        <input type="submit" name="submit" class="btn btn-success"/>
    </form>
</div>
</body>
</html>