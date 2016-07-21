<div id="div-table">
    <div class="trow">
        <div class="tcol-td form-group">
            <span> <?php echo Yii::t('COMPANIA', 'Date Start') ?></span>
        </div>
        <div class="tcol-td form-group">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'dtp_fec_ini',
                'attribute' => 'dtp_fec_ini',
                'value' => date(Yii::app()->params['datebydefault']),//date(Yii::app()->params['dateStart']),
                'language' => Yii::app()->language,
                'options' => array(
                    'showAnim' => 'fold',
                    'autoSize' => true,
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'showOtherMonths' => true,
                    'showButtonPanel' => true,
                    'dateFormat' => Yii::app()->params['datepicker'],
                    'buttonImage' => Yii::app()->theme->baseUrl . Yii::app()->params['rutaIconos'] . 'date-icon1.png',
                    'buttonImageOnly' => true,
                    'showOn' => 'button',
                ),
                'htmlOptions' => array(
                    //'style' => 'height:10px;',
                    //'style' => 'width:100px;vertical-align:top !important',
                    //'style'=>'width:200px !important',
                    //'modal'=>true,
                    //'size'=>10, 
                    'class' => 'form-control imgDate',
                    'readonly' => 'readonly',
                ),
            ));
            ?>
        </div>
        <div class="tcol-td form-group">
            <span> <?php echo Yii::t('COMPANIA', 'Date End') ?></span>
        </div>
        <div class="tcol-td form-group">
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'name' => 'dtp_fec_fin',
                'attribute' => 'dtp_fec_fin',
                'value' => date(Yii::app()->params['datebydefault']),
                'language' => Yii::app()->language,
                'options' => array(
                    'showAnim' => 'fold',
                    'autoSize' => true,
                    'changeMonth' => 'true',
                    'changeYear' => 'true',
                    'showOtherMonths' => true,
                    'showButtonPanel' => true,
                    'dateFormat' => Yii::app()->params['datepicker'],
                    'buttonImage' => Yii::app()->theme->baseUrl . Yii::app()->params['rutaIconos'] . 'date-icon1.png',
                    'buttonImageOnly' => true,
                    'showOn' => 'button',
                ),
                'htmlOptions' => array(
                    //'style' => 'height:10px;',
                    //'style' => 'width:100px;vertical-align:top',
                    //'style'=>'width:200px !important',
                    //'modal'=>true,
                    //'size'=>10, 
                    'class' => 'form-control imgDate',
                    'readonly' => 'readonly',
                ),
            ));
            ?>
        </div>
        <div class="tcol-td form-group">
            <?php echo CHtml::button(Yii::t('CONTROL_ACCIONES', 'Search'), array('id' => 'btn_buscar', 'name' => 'btn_buscar', 'class' => 'btn btn-success', 'onclick' => 'buscarDataIndex("","")')); ?>
        </div>
    </div>
</div>