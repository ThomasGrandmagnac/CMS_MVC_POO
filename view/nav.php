<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./">CMS MVC POO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($navigation as $page):?>
                    <li class="<?=isActive($page->slug, $slug)?>"><a href="?p=<?=$page->slug?>"><?=$page->title?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</nav>