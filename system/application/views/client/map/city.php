

<script src="http://api-maps.yandex.ru/1.1/index.xml?key=AOdSOE8BAAAAQeQVJQQA2jl1j0KrMhlhRQdurdO6i40JvtcAAAAAAAAAAABlsRqxiWUdgTvO18ygXBsPzq_nig=="
type="text/javascript"></script>

<!--script src="http://api-maps.yandex.ru/1.1/index.xml?key=AJg_NE8BAAAA3hnCHAIA-21FjC0Vj09M9Im3mi2YMdH6ArsAAAAAAAAAAABjWjExhitXsF_OGE0r5hmv3OTcng=="
type="text/javascript"></script-->

<script src="http://api-maps.yandex.ru/1.1/index.xml?key=AJg_NE8BAAAA3hnCHAIA-21FjC0Vj09M9Im3mi2YMdH6ArsAAAAAAAAAAABjWjExhitXsF_OGE0r5hmv3OTcng=="
type="text/javascript"></script>
<script type="text/javascript">
    window.onload = function () {
        var map = new YMaps.Map(document.getElementById("YMapsID"));
        var geocoder = new YMaps.Geocoder("<?=$city->city_ru?>,<?=$city->addr2?> <?=$city->addr?>", { prefLang : "ru" } );

        YMaps.Events.observe(geocoder, geocoder.Events.Load, function (geocoder) {
            map.addOverlay(geocoder.get(0));
            map.setBounds(geocoder.get(0).getBounds());
        });
    }



</script>




<div class="wrapper">
    <div class="bg_maps">
        <div class="left_text">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">Главная</a><span></span></li>
                    <li><a href="/map/">Магазины</a><span></span></li>
                    <li><?=$city->city_ru?></li>
                </ul>
            </div>
            <div class="text_about">
                <strong><?=$city->city_ru?></strong>
                <p><?=$city->addr?><br/><?=$city->addr2?><br/><?=$city->description?></p>
                <!--p>ТЦ «Пирамида»<br/>ул. Мишуги, 4 (м. Позняки)<br/>Ювелирный супермаркет «Укрзолото»</p-->
            </div>
            <a class="back" href="/map/">Вернуться к списку магазинов</a>
        </div>
        <div class="map_img">
            <div id="YMapsID" style="width:600px;height:400px"></div>
            <!--img src="/assets/images/kiev_map.jpg" alt="" /-->
        </div>
    </div>
</div>