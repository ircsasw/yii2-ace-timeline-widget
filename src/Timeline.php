<?php
namespace ircsasw\timeline;

use yii\base\Widget;
use yii\base\InvalidConfigException;

/**
*  ACEAdmin Timeline widget
*
*  Componente para administrar y generar una linea de tiempo.
*
*  @author Arturo Ramos
*/
class Timeline extends Widget
{
    public $models = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('_timeline', ['models' => $this->models]);
    }
}
