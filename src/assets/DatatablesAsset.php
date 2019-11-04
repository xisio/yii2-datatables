<?php
namespace xisio\datatables\assets;
use yii\web\AssetBundle;

class DatatablesAsset extends AssetBundle 
{
    public $sourcePath = '@bower/datatables'; 
    public $css = [
        "media/css/jquery.dataTables.css",
    ];
    public $js = [
        "media/js/jquery.dataTables.js",
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
