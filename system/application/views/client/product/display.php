<style type="text/css">
    .car {
        position: relative;
        -moz-background-clip:border;
        -moz-background-inline-policy:continuous;
        -moz-background-origin:padding;
        background:transparent url(/assets/images/bg-a.gif) no-repeat scroll 0 0;

        float:left;
        font-size:10px;
        font-weight:bold;
        height:37px;
        padding:11px 0 0 31px;
        text-decoration:underline;
        width:90px;
    }
    .text{
        padding-right: 10px;
    }
    mini_img{
        display: block;
        float: left;
        margin-left: 30px;
        padding: 5px;
    }
    #gallery{ }
</style>
<h2><?php echo $product[0]->name ?></h2>
<div class="text">
    <div class="mini_img">
        <?php echo '<img src="/uploads/product/mini_images/' . $product[0]->thumb . '" alt=""/><br> ';
        if(isset($img[0]->path)){
        ?>
        <p><div class="gallery"><a  href="/uploads/product/<?php echo $imgs[0]->path; ?>" title="">Просмотреть фотографии<img src="/uploads/product/<?php echo $imgs[0]->path; ?>" width="0" height="0" alt="" /></a></div></p>
        <?php } ?>
    </div>
    <?php
    //Вывод цены
    if (isset($auth)) {
        echo '<p>Цена:' . $price['price_for_partner'][$product[0]->id] . ' ' . $key_currency[$exchange] . '</p>';
    }
    else {
        echo '<p>Цена:' . $price['price'][$product[0]->id] . ' ' . $key_currency[$exchange] . '</p>';
    }
    ?>
    <br>
    <?php echo  $product[0]->text;  ?>
    <?php
    $long_text = strip_tags($product[0]->long_text);
    $count_long_text = strlen($long_text);
    if (!empty($product[0]->long_text) && $count_long_text > 50) {
        echo '<br>';
        echo anchor('/product/display/' . $product[0]->id, 'Еще более подробное описание', array('title' => 'Более подробное описание!', 'target'=>'_blank'));
    }
    echo '</div>';
    ?>
    <div class="gallery">
        <ul>
            <?php $i = 0 ;
            foreach ($imgs as $item) {
                if ($i != 0) {
                    echo '<li style="display:none;"><a href="/uploads/product/' . $item->path . '" title=""><img width="72" height="72" src="/uploads/product/' . $item->path . '" alt=" "/></a></li>';
                }
                $i++;
            }
            ?>
        </ul>
    </div>

    <script type="text/javascript">
        $(function() {
            $('.gallery a').lightBox();
        });
        $('#target').bind('click', function(event) {
            return false;
        });
    </script>
    <style type="text/css">
        /* jQuery lightBox plugin - Gallery style */
        #gallery {
            background-color: #444;
            padding: 10px;
            width: 520px;
        }
        #gallery ul { list-style: none; }
        #gallery ul li { display: inline; }
        #gallery ul img {
            border: 5px solid #3e3e3e;
            border-width: 5px 5px 20px;
        }
        #gallery ul a:hover img {
            border: 5px solid #fff;
            border-width: 5px 5px 20px;
            color: #fff;
        }
        #gallery ul a:hover { color: #fff; }
    </style>
    <script type="text/javascript">
        var flashvars = {"comment":"Тест","st":"/assets/css/video48-1252.txt","file":"/uploads/diagnostika_mini.flv"};
        var params = {wmode:"transparent", allowFullScreen:"true", allowScriptAccess:"always"};
        new swfobject.embedSWF("/assets/swf/uppod.swf", "videoplayer", "560", "340", "9.0.115.0", false, flashvars, params);
        $(function() {
            $('.permits a').lightBox();
        });
    </script>