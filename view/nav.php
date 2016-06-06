<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./admin/">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--Boucle permettant de générer la navigation et d'afficher la page active-->
                <?php foreach($data as $page):?>
                    <li class="<?=isActive($page->slug, $slug)?>"><a href="?p=<?=$page->slug?>"><?=$page->title?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>