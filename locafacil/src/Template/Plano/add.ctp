<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano $plano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Plano'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="plano form large-9 medium-8 columns content">
    <?= $this->Form->create($plano) ?>
    <fieldset>
        <legend><?= __('Add Plano') ?></legend>
        <?php
            echo $this->Form->control('guincho');
            echo $this->Form->control('carroreserva');
            echo $this->Form->control('sinistro');
            echo $this->Form->control('locacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
