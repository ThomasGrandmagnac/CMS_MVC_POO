<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./">CMSG1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                foreach ($navigation as $key):
                    $active = '';
                    if($slug == $key['slug']):
                        $active = " class=\"active\"";
                    endif;
                ?>
                <li <?=$active?>><a href="index.php?p=<?=$key['slug']?>"><?=$key['title']?></a></li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</nav>