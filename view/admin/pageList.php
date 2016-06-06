<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des pages</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body, td, th {
            padding-top: 70px;
            text-align: center;
        }
        h1 {
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        table, tr, td, thead, th, tbody, .table-bordered {
            border 0
        }
        thead {
            background: #101010;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background: #e0e0e0;
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
    <h1>Liste des Pages</h1>
    <table class="table-bordered table-responsive table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>Titre</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php if (count($data) == 0 ):?>
            <tr>
                <td colspan="4">
                    Pas de page
                </td>
            </tr>
        <?php endif;?>
        <?php foreach($data as $page):?>
            <tr>
                <td><?=$page->id?></td>
                <td><?=$page->slug?></td>
                <td><?=$page->title?></td>
                <td>
                    <!--READ-->
                    <a class="btn btn-info" href="./?a=details&id=<?=$page->id?>">Info</a>
                    <!--UPGRADE-->
                    <a class="btn btn-warning" href="./?a=modifier&id=<?=$page->id?>">Modifier</a>
                    <!--DELETE-->
                    <a class="btn btn-danger" href="./?a=supprimer&id=<?=$page->id?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <!--CREATE-->
    <a class="btn btn-success" href="./?a=ajouter">Ajouter une page</a>
</div>
</body>
</html>