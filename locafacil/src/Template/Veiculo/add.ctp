<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações' ) ?></li>
        <li><?= $this->Html->link(__('Listar Veiculo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="veiculo form large-9 medium-8 columns content">
    <?= $this->Form->create($veiculo) ?>
    <fieldset>
        <legend><?= __('Adicionar Veiculo') ?></legend>
        <?php
            echo $this->Form->control('placa');
            echo $this->Form->control('fabricante');
            echo $this->Form->control('ano');
            echo $this->Form->control('modelo');
            echo $this->Form->control('cor');
            echo $this->Form->control('radio');
            echo $this->Form->control('arcondicionado');
            echo $this->Form->control('vidroeletrico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
