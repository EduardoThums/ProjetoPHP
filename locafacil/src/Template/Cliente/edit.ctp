<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações' ) ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $cliente->idcliente],
                ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $cliente->idcliente)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cliente form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Editar Cliente') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('cpf');
            echo $this->Form->control('nome');
            echo $this->Form->control('cnh');
            echo $this->Form->control('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
