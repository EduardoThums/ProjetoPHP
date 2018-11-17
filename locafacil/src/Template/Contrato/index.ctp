<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contrato index large-9 medium-8 columns content">
    <h3><?= __('Contrato') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idcontrato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idcliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idplano') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idveiculo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_validade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrato as $contrato): ?>
            <tr>
                <td><?= $this->Number->format($contrato->idcontrato) ?></td>
                <td><?= $this->Number->format($contrato->idcliente) ?></td>
                <td><?= $this->Number->format($contrato->idplano) ?></td>
                <td><?= $this->Number->format($contrato->idveiculo) ?></td>
                <td><?= h($contrato->data_validade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contrato->idcontrato]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrato->idcontrato]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrato->idcontrato], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->idcontrato)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
