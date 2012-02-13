<div class="wrap_footer">
    <div class="footer">
        <div class="top_footer">
            <div class="rss_news">
                <h3>Рассылка новостей</h3>
                <form action="#">
                    <fieldset>
                        <label for="email">Оставьте Ваш e-mail и <br/>подпишитесь на рассылку</label>
                        <input class="input_email" type="text" name="email" title="Ваш e-mail" value="Ваш e-mail"/>
                        <input class="btn_ok" type="submit" value="OK"/>
                    </fieldset>
                </form>
                <div class="icon_net">
                    <ul>
                        <li class="vkontakte"><a href="vk.com" >Наша группа Вконтакте</a></li>
                        <li class="facebook"><a href="facebook.com" >Обручалочка на Facebook</a></li>
                    </ul>
                </div>
            </div>
            <?php if(isset($articles_f)):?>
                    <?php foreach($articles_f as $key=>$article_f):?>
            <div class="footer_menu">
                <h3><?=$key?></h3>
                <ul>
                            <?php foreach($article_f as $art_f):?>
                    <li>
                        <a href="/article/<?=$art_f['slug']?>"><?=$art_f['name']?></a>
                    </li>
                            <?php endforeach;?>
                    <!--li><a href="#">Дисконт в подарок</a></li>
			  <li><a href="#">Подарочная карта</a></li>
			  <li><a href="#">Условия дисконтной программы</a></li-->
                </ul>
            </div>
                    <?php endforeach;?>
            <?php endif;?>
            <div class="footer_menu">
                <h3>Каталог</h3>
                <a href="/collection/"><img class="f_catalog" src="/assets/images/f_catalog.png" alt="" /></a>
            </div>
            <div class="footer_menu">
                <h3>О нас</h3>
                <ul>
                    <li><a href="/article/brands">Представленные бренды</a></li>
                    <li><a href="/map/">Магазины сети</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="left_footer">
            <span class="copyright">&copy; 2011 «Обручалочка»</span>
            <span class="f_phone">+38 (097) 165-65-80</span>
        </div>
    </div>
</div>
</body>
</html>