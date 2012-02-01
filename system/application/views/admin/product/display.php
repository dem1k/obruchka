<table cellspacing="0" width="100%">
    <tr>
        <td>
            Маленькая картинка
        </td>
        <td>
            <img width="200px" src="/uploads/products/<?=$product['image_small']?>">
        </td>
    </tr>
    <tr>
        <td>
            Большая Картинка
        </td>
        <td>
            <img width="400px" src="/uploads/products/<?=$product['image_big']?>">
        </td>
    </tr>
    <tr>
        <td>
            Название
        </td>
        <td>
            <strong><?=$product['name']?></strong>
        </td>
    </tr>
    <tr>
        <td>
            Коллекция
        </td>
        <td>
            <?=$product['collection']?>
        </td>
    </tr>
    <tr>
        <td>
            Группа товара
        </td>
        <td>
            <?=$product['class']?>
        </td>
    </tr>
    <tr >
        <td>
            Металл
        </td>

        <td>
            <?=$product['metal']?>
        </td>
    <tr bgcolor="#F2F2F2">
        <td>
            Цвет металла
        </td>

        <td>
            <?=$color1[0]['name']?>
        </td>
    </tr>
    <!--tr bgcolor="#F2F2F2">
        <td align="right">1 цвет:
        </td>
        <td>
            
        </td>
    </tr>

    <tr bgcolor="#F2F2F2">
        <td align="right">2 цвет:
        </td>
        <td >
            < ?=isset($color3[0]['color_name'])?$color3[0]['color_name']:'Нет'?>
        </td>
    </tr>

    <tr bgcolor="#F2F2F2">
        <td align="right">3 цвет:
        </td>
        <td>
            < ?=isset($color3[0]['color_name'])?$color3[0]['color_name']:'Нет'?>
        </td>
    </tr-->
    <tr>
        <td><br/>
            Вставка
        </td>
        <td>
            <?=$product['rock']?>
        </td>
    </tr>
    <tr>
        <td><br/>
            <table>
                <tr>
                    <td><u>Мужское</u></td>
                </tr>
                <tr>
                    <td>
                        Артикул:
                    </td>
                    <td>
                        <?=$product['m_art']?>
                    </td>
                </tr>

                <tr>
                    <td>
                        Средний вес :
                    </td>
                    <td border="solid">
                        <?=$product['m_weight']?>(гр.)
                    </td>
                </tr>

            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><u>Женское</u></td></tr>
                <tr>
                    <td>
                        Артикул:
                    </td>
                    <td>
                        <?=$product['f_art']?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Средний вес: 
                    </td>
                    <td>
                        <?=$product['f_weight']?>(гр.)
                    </td>
                </tr>

            </table></td>
    </tr>
    <tr>
        <td>
            Новинка (0-99)
        </td>
        <td>
            <?=$product['new']?>
        </td>
    </tr>
    <tr>
        <td>
            Популярность (0-99)
        </td>
        <td>
            <?=$product['fan']?>
        </td>
    </tr>
    <tr>
        <td>
            Описание
        </td>
        <td>
            <?=$product['description']?>
        </td>
    </tr>

</table>