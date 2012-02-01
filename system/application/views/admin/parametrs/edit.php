<?=form_open('admin/parametrs/create/'.$parametr);?>
<h1> <?php

        switch ($parametr) {
        case 'collections':echo "Создать колекцию";
            break;
        case 'classes':echo "Создать группу";
            break;
        case 'metals':echo "Создать метал";
            break;
        case 'colors':echo "Создать цвет";
            break;
        case 'rocks':echo "Создать вставку";
            break;
        case 'category_art':echo "Создать категорию статьи";
            break;

        default:
            break;
    } ?>


</h1>
Введите имя <input type="text" name="name" value="<?= set_value('name')?>"/>
<br/>
<?=form_hidden("action","save")?>
<input type="submit" value="Сохранить"/>
<?=form_close()?>