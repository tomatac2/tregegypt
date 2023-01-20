<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td class="form-control"><?= $article->category->name ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td class="form-control"><?= h($article->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td class="form-control"><img src="<?= URL.h($article->photo) ?>" style="width:100px;height:60px;min-width:100px;min-height:60px" ></td>

                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td class="form-control"><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Viewers') ?></th>
                    <td class="form-control"><?= $this->Number->format($article->viewers) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td class="form-control"><?= h($article->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td class="form-control"><?= h($article->modified) ?></td>
                </tr>
            </table>
            <div>
                <th><?= __('highlight') ?></th>
                <td class="form-control"><?= h($article->highlight) ?></td>
            </div>
            <div class="text">
                <strong><?= __('Body') ?></strong>

                    <?php echo $article->body; ?>

            </div>
       
        </div>
    </div>
</div>
