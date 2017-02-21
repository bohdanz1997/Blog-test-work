<div class="container">
    <?php if (!empty($data['title'])): ?>
        <h3>Articles from category <?=$data['title']?></h3>
    <?php endif;?>
    <div class="container">
        <div class="row"> <div class="text-center"><?= $data['paginate']; ?></div></div>

    </div>
<?php foreach($data['content'] as $key => $val):?>
    <div class="col-sm-6 col-lg-6 col-md-6">
        <div class="thumbnail">
            <a href="/article?id=<?=$val['id'] ?>">
                <img src="<?=$val['image'] ?>" alt="" class="img-responsive ">
            </a>

            <div class="caption">
                <h4><a href="/article?id=<?=$val['id'] ?>"><?=$val['title'] ?></a>
                </h4>
                <p><?= $val['description'] ?></p>
            </div>
        </div>
    </div>

<?php endforeach; ?>
</div>