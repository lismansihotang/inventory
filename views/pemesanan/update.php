<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pemesanan */

$this->title = 'Update Pemesanan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?php echo $this->render('_form', [
'model' => $model,
]); ?>

