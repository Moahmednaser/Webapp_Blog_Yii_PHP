<?php
// $sql = 'SELECT * FROM tbl_product LIMIT 2';
// $rows = Yii::app()->db->createCommand($sql)->queryAll();
// Yii::app()->cache->set('testquery', $rows, 10);
// print_r('<pre>');
// print_r(Yii::app()->cache->get('testquery'));
require_once('protected/scripts/globals.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($data as $value) :
            ?>
                <div class="col-md-3">
                    <a href="#"><img class="img-fluid" src="<?= Yii::app()->request->baseUrl . $value->image ?>" alt=""></a>
                    <h3><?= $value->name ?></h3>
                    <p>Gia: <?= $value->price ?> VND</p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
<?php print_r(get_BaseUrl()); ?>
    <?php
    $this->widget('CLinkPager', array(
        'currentPage' => $pages->getCurrentPage(),
        'itemCount' => $item_count,
        'pageSize' => $page_size,
        'maxButtonCount' => 4,
        'header' => '',
        'firstPageLabel' => '|<',
        'prevPageLabel' => '<<',
        'nextPageLabel' => '>>',
        'lastPageLabel' => '>|',

    ));
    // print_r('<pre>');
    // print_r(Yii::app()->user->getState('currentUserInfo'));
    ?>
</body>

</html>