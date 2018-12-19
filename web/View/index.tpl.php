<?php include \IEcho\Common::template('header'); ?>
<!-- 使用 -->
<div class="demo-item">
    <p class="demo-desc">请选择需要的五十音图行</p>
    <div class="demo-block">
        <div class="ui-form ui-border-t">
            <form method="get">
                <input name="a" value="make" type="hidden" />
                <div class="ui-form-item ui-form-item-checkbox ui-border-b">
                    <label class="ui-checkbox">
                        <input name="index[]" type="checkbox" value="a" checked=""/>
                    </label>
                    <p>あ行</p>
                </div>
                <div class="ui-form-item ui-form-item-checkbox ui-border-b">
                    <label class="ui-checkbox">
                        <input name="index[]" type="checkbox" value="ka"/>
                    </label>
                    <p>か行</p>
                </div>
                <div class="ui-form-item ui-form-item-checkbox ui-border-b">
                    <label class="ui-checkbox">
                        <input name="index[]" type="checkbox" value="sa"/>
                    </label>
                    <p>さ行</p>
                </div>
                <div class="ui-form-item ui-form-item-checkbox ui-border-b">
                    <label class="ui-checkbox">
                        <input name="index[]" type="checkbox" value="ta"/>
                    </label>
                    <p>た行</p>
                </div>
                <div class="ui-form-item ui-form-item-checkbox ui-border-b">
                    <label class="ui-checkbox">
                        <input name="index[]" type="checkbox" value="na"/>
                    </label>
                    <p>な行</p>
                </div>
                <div class="ui-btn-wrap">
                    <button class="ui-btn-lg ui-btn-primary">
                        确定
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include \IEcho\Common::template('footer'); ?>