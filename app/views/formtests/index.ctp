<?php echo $this->Form->create('Formtest', array('type' => 'post','action'=>'add'));
echo $this->Form->input('name', array('label' => 'Name'));
echo $this->Form->input('emailId');
echo $this->Form->end('Finish'); ?>
