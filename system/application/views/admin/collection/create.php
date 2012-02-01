<?=form_open('admin/collection/create');?>
<h1>Создать новую коллекцию</h1>
Введите имя новой коллекции <input type="text" name="name" value="<?= set_value('name')?>"/>
<br/>
<?=form_hidden("action","save")?>
<input type="submit" value="Сохранить"/>
<?=form_close()?>