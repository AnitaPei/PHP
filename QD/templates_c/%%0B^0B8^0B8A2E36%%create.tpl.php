<?php /* Smarty version 2.6.26, created on 2017-04-12 15:15:14
         compiled from create.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{width: 300px;height:200px;border:0px solid #f00;margin:100px auto;}
	</style>
</head>
<body>
<form method="post">

	日期：<input type="date" name="date"<?php if ($_GET['id']): ?> value="<?php echo $this->_tpl_vars['eventinfo']->date; ?>
" <?php endif; ?>><br/><br/>
	事件：<textarea cols="30" rows="5" name="text"><?php if ($_GET['id']): ?><?php echo $this->_tpl_vars['eventinfo']->text; ?>
<?php endif; ?></textarea><br/><br/>
	<input type="submit" name='save' value="保存" style="background-color: #BF2C24;color: white;width: 80px;height:30px;">
    <input type="reset" value="取消" style="background-color: #BF2C24;color: white;width: 80px;height:30px;">

</form>
</body>
</html>