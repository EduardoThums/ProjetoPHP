<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato[]|\Cake\Collection\CollectionInterface $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Contrato'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contrato index large-9 medium-8 columns content">
    <h3><?= __('Contratos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('identificador cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identificador veiculo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de Validade') ?></th>
                <th scope="col" class="actions"><?= __('Ações' ) ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrato as $contrato): ?>
            <tr>
                <td><?= $this->Number->format($contrato->idcliente) ?></td>
                <td><?= $this->Number->format($contrato->idveiculo) ?></td>
                <td><?= h($contrato->data_validade) ?></td>
                <td class="actions" style="color:#1798a5">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $contrato->idcontrato]) ?> |
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contrato->idcontrato]) ?> |
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $contrato->idcontrato], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $contrato->idcontrato)]) ?>
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
