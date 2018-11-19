<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $contrato->idcontrato],
                ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $contrato->idcontrato)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Contratos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contrato form large-9 medium-8 columns content">
    <?= $this->Form->create($contrato) ?>
    <fieldset>
        <legend><?= __('Editar Contrato') ?></legend>
        <?php
            echo $this->Form->control('idcliente');
            echo $this->Form->control('idveiculo');
            echo $this->Form->control('data_validade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
