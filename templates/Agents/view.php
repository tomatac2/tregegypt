<div class="row">
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('اسم الموزع') ?></th>
                    <td class="form-control"><?= $article->category->name ?></td>
                </tr>
                <tr>
                    <th><?= __('التخصص') ?></th>
                    <td class="form-control"><?= h($article->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('المحافظة') ?></th>
                    <td class="form-control"><?= h($article->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('العنوان') ?></th>
                    <td class="form-control"><?= h($article->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('الهاتف') ?></th>
                    <td class="form-control"><?= h($article->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('الصورة') ?></th>
                    <td class="form-control"><img src="<?= URL.h($article->photo) ?>" style="width:100px;height:60px;min-width:100px;min-height:60px" ></td>

                </tr>
        </div>
    </div>
</div>
