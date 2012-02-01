<?php //var_dump($last_article);?>
<div class="wrapper">
	<div class="content_article">
            <div class="breadcrumbs">
                  <ul>
                    <li><a href="#">Главная</a><span></span></li>
                    <li><a href="#">Статьи</a><span></span></li>
                    <li><?=$last_article['name']?></li>
                  </ul>
          </div>
          <h1><?=$last_article['name']?></h1>
          <div class="article">
              <?=isset($last_article['image'])?'<img width="401px" height="280px" src="/assets/images/'.$last_article["image"].'" alt="'.$last_article["name"].'" />':""?>
                  <?=$last_article['description']?>
          </div>
          <div class="nav_articles">
                  <ul>
                      <li><a href="#" onclick="return false">Предыдущая статья</a></li>
                    <li class="nav_arrows"><a href="#" onclick="return false"><span class="prev_article"></span><strong>Все статьи</strong><span class="next_article"></span></a></li>
                    <li><a href="#" onclick="return false">Следующая статья</a></li>
                  </ul>
          </div>
      </div>
	  <div class="banner_action">
		<h2>Читайте по этой теме</h2>
		<ul class="articles_banners">
                    <?php foreach ($theme_articles as $theme_article):?>
		  <li><img src="/assets/images/<?=$theme_article['image2']?>" alt="<?=$theme_article['name']?>" />
                      <span><p><?=$theme_article['name']?>.</p><p><?=$theme_article['cut']?> ...
                          <a href="/article/<?=$theme_article['slug']?>/">&nbsp;Далее...</a></p>
                      </span>
                  </li>
                  <?php endforeach;?>
		</ul>
	  </div>
	  <div class="banner_action">
		<h2>Это интересно</h2>
		<ul class="articles_banners">
		  <li><img src="/assets/images/article_ban1.jpg" alt="" /><span>При нормальных условиях оно не взаимодействует с большинством кислот и не образует ...<a href="#">&nbsp;Далее...</a></span></li>
		  <li><img src="/assets/images/article_ban2.jpg" alt="" /><span>При нормальных условиях оно не взаимодействует с большинством кислот и не образует ...<a href="#">&nbsp;Далее...</a></span></li>
		  <li><img src="/assets/images/article_ban3.jpg" alt="" /><span>При нормальных условиях оно не взаимодействует с большинством кислот и не образует ...<a href="#">&nbsp;Далее...</a></span></li>
		</ul>
	  </div>
	</div>