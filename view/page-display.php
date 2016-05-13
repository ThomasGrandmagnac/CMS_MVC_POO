<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$page->title?></title>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <a class="navbar-brand" href="index.html?p=teletubbies">WtfWeb</a>-->
<!--        </div>-->
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="index.php?p=teletubbies">Teletubbies</a></li>-->
<!--                <li><a href="index.php?p=kittens">Kittens</a></li>-->
<!--                <li><a href="index.php?p=ironmaiden">Iron Maiden</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
</nav>
<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1><?=$page->h1?></h1>
        <?=$page->body?>
        <span class="label <?=$page->span_class?>"><?=$page->span_text?></span>
    </div>
    <img class="img-thumbnail" alt="Teletubbies" src="<?=$page->img?>" data-holder-rendered="true">
</div>
</body>
</html>