<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo[]|\Cake\Collection\CollectionInterface $veiculo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Veiculo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="veiculo index large-9 medium-8 columns content">
    <h3><?= __('Veículos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Placa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fabricante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('radio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ar condidicionado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vidro Elétrico') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculo as $veiculo): ?>
            <tr>
                <td><?= h($veiculo->placa) ?></td>
                <td><?= h($veiculo->fabricante) ?></td>
                <td><?= h($veiculo->ano) ?></td>
                <td><?= h($veiculo->modelo) ?></td>
                <td><?= h($veiculo->cor) ?></td>
                <td><?= h($veiculo->radio) ?></td>
                <td><?= h($veiculo->arcondicionado) ?></td>
                <td><?= h($veiculo->vidroeletrico) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $veiculo->idveiculo]) ?>
                    <br/>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $veiculo->idveiculo]) ?>
                    <br/>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculo->idveiculo], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $veiculo->idveiculo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
