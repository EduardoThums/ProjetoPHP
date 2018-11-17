<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contrato->idcontrato],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idcontrato)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contrato'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contrato form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Edit Contrato') ?></legend>
        <?php
            echo $this->Form->control('idcliente');
            echo $this->Form->control('idplano');
            echo $this->Form->control('idveiculo');
            echo $this->Form->control('data_validade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
