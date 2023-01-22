<div class="row">
    <div class="column-responsive column-80">
        <div class="  ">
            <table>
                <tr >
                    <td><?= __('اسم الموزع') ?></td>
                    <td><?= $agent->name ?></td>
                </tr>
                <tr>
                    <td ><?= __('التخصص') ?></td>
                    <td ><?= h($agent->title) ?></td>
                </tr>
                <tr>
                    <td ><?= __('المحافظة') ?></td>
                    <td ><?= h($agent->area) ?></td>
                </tr>
                <tr>
                    <td ><?= __('العنوان') ?></td>
                    <td ><?= h($agent->address) ?></td>
                </tr>
                <tr>
                    <td ><?= __('الهاتف') ?></td>
                    <td ><?= h($agent->mobile) ?></td>
                </tr>
                <tr>
                    <td ><?= __('الصورة') ?></td>
                    <td ><img src="<?= URL.h($agent->photo) ?>" style="widtd:100px;height:60px;min-widtd:100px;min-height:60px" ></td>
                </tr>
        </table>
        </div>
    </div>
</div>


