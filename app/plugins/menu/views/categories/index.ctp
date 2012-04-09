<?php echo $this->Html->script('simpletreemenu'); ?>
<?php echo $this->Html->css('simpletree'); ?>


<?php
//echo $html->link("Add Category",array('action'=>'add'));


echo "<ul id='treemenu1' class='treeview'>";
  foreach($categories as $key=>$value){
  echo "<li class='submenu'>$value</li>";
  }
  echo "</ul>";
?>
