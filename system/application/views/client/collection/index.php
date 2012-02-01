<style>
    .hidden_field,.metall_hidden,.color_hidden,.rock_hidden,div.popular,div.newest{
        display: none;
    }
</style>

<div class="wrapper">

    <div class="filters" >

        <ul class="name_filter">
            <li><a href="#"><strong>металл</strong><span>&nbsp;</span></a>
                <div class="wrap_param">
                    <ul class="parametrs metal_filter">
                        <?php foreach($metals as $metal):?>
                        <li ><a href="#" class="check_box" metal_id="<?= $metal['id']?>"><?= $metal['name']?></a></li>
                        <?php endforeach?>
                        <li class="show_all" metal_id=" "><a href="" >показать все</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><strong>цвет</strong><span>&nbsp;</span></a>
                <div class="wrap_param">
                    <ul class="parametrs color_filter">
                        <?php foreach($colors as $color):?>
                        <li><a href="#" class="check_box"  color_id="<?= $color['id']?>"><?= $color['name']?></a></li>
                        <?php endforeach?>
                        <li class="show_all"><a href="#" >показать все</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><strong>камень</strong><span>&nbsp;</span></a>
                <div class="wrap_param">
                    <ul class="parametrs rock_filter">
                        <?php foreach($rocks as $rock):?>
                        <li ><a href="#" class="check_box" rock_id="<?= $rock['id']?>"><?= $rock['name']?></a></li>
                        <?php endforeach?>
                        <li class="show_all"><a href="#" >показать все</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><strong>сортировать по</strong><span>&nbsp;</span></a>
                <div class="wrap_param ">
                    <ul class="parametrs ">
                        <li class="active sort_btn "><a class="newest" href="#">новинки</a></li>
                        <li class="active sort_btn popular"><a class="popular" href="#">популярные</a></li>
                        <!--li class="show_all"><a href="#">показать все</a></li-->
                    </ul>
                </div>
            </li>
            <li><a href="#"><strong>показать на странице</strong><span>&nbsp;</span></a>
                <div class="wrap_param drop-down" id="page-by" >
                    <div class="panel">
                        <ul class="parametrs">
                            <li class="active"><a class="pg20" href="#">20 колец</a></li>
                            <li class="active"><a class="pg20" href="#">20 колец</a></li>
                            <li class="active"><a class="pg60" href="#">60 колец</a></li>
                            <li class="active"><a class="pg100" href="#">100 колец</a></li>
                            <li class="show_all"><a class="all" href="#">показать все</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="models" >
        <div class="show_ring">
            <form action="#">
                <fieldset>
                    <div class="left_part">
                        <h2 id="name">Обручальное кольцо из золота с бриллиантами</h2>
                        <table>
                            <tr>
                                <th scope="col" id="m_art"> Пусто...</th>
                                <th scope="col" id="f_art"> Пусто...</th>
                            </tr>
                            <tr>
                                <td><strong>вес:</strong> <span id="m_weight">3,0</span> г</td>
                                <td><strong>вес:</strong> <span id="f_weight">3,0</span> г</td>
                            </tr>
                            <tr>
                                <td><strong>вставка:</strong><br/><span class="rock">цирконий</span></td>
                                <td><strong>вставка:</strong><br/><span class="rock">цирконий</span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="tables_link">
                                <td><a href="#">запомнить кольцо</a></td>
                                <td><a href="#">запомнить кольцо</a></td>
                            </tr>
                        </table>
                        <div class="buttons">
                            <input class="in_basket btn_ok" type="submit" value="в корзину"/>
                            <input class="in_basket btn_ok left" type="submit" value="в корзину"/>
                        </div>
                    </div>
                    <div class="right_part">
                        <a href="#" class="btn_close" title="Закрыть">Закрыть</a>
                        <div class="picture">
                            <img src="/assets/images/big_ring.png" alt="" />
                            <em class="btn_likes"><span><input type="submit" value="Мне понравилось"/></span></em>
                            <a class="btn_rotate" href="#">Кольцо<br/>вращается</a>
                            <div class="names_ring">
                                <strong>к 211 22 11</strong>
                                <strong>к 212 22 11</strong>
                            </div>
                        </div>
                        <div class="analog">
                            <h3>Похожие кольца</h3>
                            <ul>
                                <li><a href="#"><img src="/assets/images/small_ring1.png" alt="" /></a></li>
                                <li><a href="#"><img src="/assets/images/small_ring2.png" alt="" /></a></li>
                                <li><a href="#"><img src="/assets/images/small_ring3.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <script>
            $(".show_ring").hide();

        </script>
        <div class="nav_pages">
            <div class="list_pages">
                <ul>
                    <li class="nav_prev"><a href="#">Предыдущая</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">99</a></li>
                    <li class="nav_next"><a href="#">Следующая</a></li>
                </ul>
            </div>
        </div>
        <ul class="catalog">

            <?php
            foreach($products as $key => $product):?>
            <li class="cat_product">
                <div class="popular" type="text"><?=$product['fan']?></div>
                <div class="newest" type="text"><?=$product['new']?></div>
                <!--p class="price"><?=$product['new']?></p-->
                <a href="#">
                    <img height="188px" width="137pxs" src="/uploads/products/<?=$product['image_small']?>" alt="" />
                </a>
                <div class="metall_hidden" type="text"><?=$product['metal_id']?></div>
                <div class="color_hidden" type="text"><?=$product['color1_id']?></div>
                <div class="rock_hidden" type="text"><?=$product['rock_id']?></div>
                <div class="hover_model" key="<?=$product['id']?>">
                    <div class="top_part" >
                        <strong><?=$product['m_art']?></strong>
                        <span>вес <span id="m_weight1"><?=$product['m_weight']?></span> г</span>
                        <a href="#">добавить в корзину</a>
                    </div>
                    <div class="btm_part">
                        <strong><?=$product['f_art']?></strong>
                        <span>вес <span id="f_weight1"><?=$product['f_weight']?></span> г</span>
                        <a href="#">добавить в корзину</a>
                    </div>
                    <div style="display: none;" id="rock"><?=$product['rock_id']?></div>
                    <div style="display: none;" id="name1"><?=$product['name']?></div>
                </div>
            </li>
            <?php endforeach;?>


        </ul>
        <div class="nav_pages">
            <div class="list_pages bottom_nav">
                <ul>
                    <li class="nav_prev"><a href="#">Предыдущая</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">99</a></li>
                    <li class="nav_next"><a href="#">Следующая</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="panel">
        <div id="filter">
            <input class="metall_hidden" type="text"/>
            <input class="color_hidden" type="text"/>
            <input class="rock_hidden" type="text"/>
        </div>
    </div>
</div>



<script>

    function init_pager(){

        var jplist = $(".wrapper").jplist({
            sort: {
                newest: "div.newest",
                popular: "div.popular"
            },
            sort_name: ".newest",
            sort_is_num: true,
            filter: {
                metall_hidden: "div.metall_hidden",
                color_hidden: "div.color_hidden",
                rock_hidden: "div.rock_hidden",
            },
            filter_path: "#filter",
            items_box: ".catalog",
            item_path: ".cat_product",
            pagingbox: ".nav_pages",
            cookies: false,
            items_on_page: 8,
        });
    }


    $(document).ready(function(){
        $('.metal_filter > li.show_all > a').live('click',function(){
            $('.metal_filter > li').removeClass('active');
            $('input.metall_hidden').val('').keyup();
            return false;
        })
        $('.color_filter > li.show_all > a').live('click',function(){
            $('.color_filter > li').removeClass('active');
            $('input.color_hidden').val('').keyup();
            return false;
        })
        $('.rock_filter > li.show_all > a').live('click',function(){
            $('.rock_filter > li').removeClass('active');
            $('input.rock_hidden').val('').keyup();
            return false;
        })
        $('.metal_filter').find('a.check_box').live('click',function(){
            $(this).parent().toggleClass('active');
            var aArr= new Array();
            aArr=$('.metal_filter > li.active > a');
            var search_str='';
            for(i=0;i<aArr.length;i++){
                if (i!=aArr.length-1)
                    search_str+=$(aArr[i]).attr('metal_id')+',';
                else
                    search_str+=$(aArr[i]).attr('metal_id');
            }
            $('input.metall_hidden').val(search_str).keyup();
            //            $('input.metall_hidden').keyup();
            return false;
        })
        $('.color_filter').find('a.check_box').live('click',function(){
            $(this).parent().toggleClass('active');
            var aArr= new Array();
            aArr=$('.color_filter > li.active > a');
            var search_str='';
            for(i=0;i<aArr.length;i++){
                if (i!=aArr.length-1)
                    search_str+=$(aArr[i]).attr('color_id')+',';
                else
                    search_str+=$(aArr[i]).attr('color_id');
            }
            $('input.color_hidden').val(search_str).keyup();
            //            $('input.metall_hidden').keyup();
            return false;
        })
        $('.rock_filter').find('a.check_box').live('click',function(){
            $(this).parent().toggleClass('active');
            var aArr= new Array();
            aArr=$('.rock_filter > li.active > a');
            var search_str='';
            for(i=0;i<aArr.length;i++){
                if (i!=aArr.length-1)
                    search_str+=$(aArr[i]).attr('rock_id')+',';
                else
                    search_str+=$(aArr[i]).attr('rock_id');
            }
            $('input.rock_hidden').val(search_str).keyup();
            //            $('input.rock_hidden').keyup();
            return false;
        })

        $('.cat_product').live('click',function(){
            //            console.info('ok')
            id=$(this).children('.hover_model').attr("key")
            //         console.info($(this));
            $('#m_art').text($(this).find('.top_part').children('strong').text())
            $('#f_art').text($(this).find('.btm_part').children('strong').text())
            $("#m_weight").text($(this).find('#m_weight1').text())
            $("#f_weight").text($(this).find('#f_weight1').text())
            $("#name").text($(this).find('#name1').text())
            rock_id=$(this).find('#rock').text()

            $.post("/product/getProductImg/", { key: "img",id:id },
            function(data){
                $('.picture').children('img').attr('src','/uploads/products/'+data.image_big);
            }, "json");
            $.post("/product/getProductRock/", { key: "rock",id:rock_id },
            function(data){
                $(".rock").text(data.name)
                $('.show_ring').show();
            }, "json");

        })
        $('.btn_close').click(function(){
            $('.show_ring').hide();
        })

        init_pager();

    })
</script>


