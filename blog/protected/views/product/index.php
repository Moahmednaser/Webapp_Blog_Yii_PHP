<?php
/* @var $this ProductController */
require_once('protected/scripts/globals.php');
$this->breadcrumbs=array(
	'Product',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>	
<?php
print_r(get_BaseUrl());
print_r(Yii::app()->cache->get('testquery'));?>