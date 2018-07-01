<?php /* Smarty version 2.6.26, created on 2017-04-12 15:19:52
         compiled from see.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'see.tpl', 25, false),)), $this); ?>
<?php echo '<?php'; ?>

$date=$_GET['date'];
$event=$_GET['text'];
<?php echo '?>'; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form{width: 300px;height:200px;border:0px solid #f00;margin:100px auto;}
	</style>
</head>
<body>
<table border="1">
	<tr>
		<td>日期</td>
		<td>事件</td>
		<td>操作</td>
	</tr>
	<?php $_from = $this->_tpl_vars['eventinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
	<tr>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['value']->date)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</td>
		<td><?php echo $this->_tpl_vars['value']->text; ?>
</td>
		<td>
			<a href="admin.php?c=BackplanControl&m=create&id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 50px;">修改</a>
            <a href="admin.php?c=BackplanControl&m=eventDelete&id=<?php echo $this->_tpl_vars['value']->id; ?>
" style="text-decoration: none;line-height: 50px;" onclick="return confirm('你真的要删除吗？') ? true : false">删除</a>
        </td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>