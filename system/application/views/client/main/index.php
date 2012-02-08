<div class="wrapper">
    <div class="big_banner">
        <object type="application/x-shockwave-flash" data="/assets/images/swf/jewelry.swf" width="945" height="479">
            <param name="movie" value="jewelry.swf" />
            <param value="transparent" name="wmode" />
        </object>
    </div>
    <div class="banner_action">
        <ul>
            <li><a href="#"><img src="/assets/images/banner1.jpg" alt="" /></a></li>
            <li><a href="/collection/"><img src="/assets/images/banner2.jpg" alt="Коллекция" title="Коллекция" /></a></li>
            <li><a href="#"><img src="/assets/images/banner3.jpg" alt="" /></a></li>
        </ul>
    </div>
    <div class="gifts_menu">
        <ul>
            <li id="discont"class="width150">
                <div class="hidden_gift">
                    <form action="#">
                        <fieldset>
                            <strong>Дисконт в подарок</strong>
                            <div class="white_bg">
                                <label for="email">Оставьте Ваш e-mail и получите подарок!</label>
                                <input class="input_email" type="text" name="email" title="Ваш e-mail" value="Ваш e-mail"/>
                            </div>
                           <div class="button">
                                <input class="btn_ok" type="submit" value="OK"/>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <a href="#">Дисконт в подарок</a>
            </li>
            <li  class="width160">
                <!--div class="hidden_gift">
                    <form action="#">
                        <fieldset>
                            <strong>Подарочная карта</strong>
                            <div class="white_bg">
                                <label for="email">Оставьте Ваш e-mail и получите подарок!</label>
                                <input class="input_email" type="text" name="email" title="Ваш e-mail" value="Ваш e-mail"/>
                            </div>
                            <div class="button">
                                <input class="btn_ok" type="submit" value="OK"/>
                            </div>
                        </fieldset>
                    </form>
                </div-->
                <a href="/articles/gift_card">Подарочная карта</a>
            </li>
            <li class="width160">
                <!--div class="hidden_gift">
                    <form action="#">
                        <fieldset>
                            <strong>Дисконтная программа</strong>
                            <div class="white_bg">
                                <label for="email">Оставьте Ваш e-mail и получите подарок!</label>
                                <input class="input_email" type="text" name="email" title="Ваш e-mail" value="Ваш e-mail"/>
                            </div>
                           <div class="button">
                                <input class="btn_ok" type="submit" value="OK"/>
                            </div>
                        </fieldset>
                    </form>
                </div-->
                <a href="/articles/discount">Дисконтная программа</a>
            </li>
            <li class="width150">
                <!--div class="hidden_gift">
                    <form action="#">
                        <fieldset>
                            <strong>Новинки</strong>
                            <div class="white_bg last_right">
                                <label for="email">Оставьте Ваш e-mail и получите подарок!</label>
                                <input class="input_email" type="text" name="email" title="Ваш e-mail" value="Ваш e-mail"/>
                            </div>
                            <div class="button">
                                <input class="btn_ok" type="submit" value="OK"/>
                            </div>
                        </fieldset>
                    </form>
                </div-->
                <a class="last_right" href="/collection/newest/">Новинки</a>
            </li>
        </ul>
        <div class="where_to_buy">
            <a  class="last_right" href="#">Где купить</a>
        </div>
    </div>
    <div class="popular_models">
        <h2>Популярные модели</h2>
        <div class="wrap_carousel">
            <ul class="carousel">
                <?php foreach($products_fav as $product_fav):?>
                <? //php var_dump($product_fav);die;?>
                <li>
                    <a href="/product/<?=$product_fav->id?>">
                        <!--img src="/assets/images/ring1.jpg" alt="модель1" title="модель1"/-->
                        <img src="/uploads/products/<?=$product_fav->image_small?>" height="166" alt="<?=$product_fav->name?>" title="<?=$product_fav->id?>"/>
                    </a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <a class="prev" href="#"></a>
        <a class="next" href="#"></a>
    </div>
</div>