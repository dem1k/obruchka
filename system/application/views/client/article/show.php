<?php //var_dump($last_article);?>
<div class="wrapper">
    <div class="content_article">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Главная</a><span></span></li>
                <li><a href="/article/">Статьи</a><span></span></li>
                <li><?=$article->name?></li>
            </ul>
        </div>
        <h1><?=$article->name?></h1>
        <div class="article">
            <?=isset($article->image)?'<img width="401px" height="280px" src="/assets/images/'.$article->image.'" alt="'.$article->name.'" />':""?>
            <?=$article->description?>
        </div>
    </div>
</div>