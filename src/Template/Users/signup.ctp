<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Signup') ?></legend>
            <div class="form-group">
                <?= $this->Form->control('email', ['class'=> 'form-control', 'placeholder'=>'Enter Your Email']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('password', ['type'=>'password', 'class'=> 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('phone', ['class'=> 'form-control', 'placeholder'=>'Enter Your Phone Number']) ?>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
