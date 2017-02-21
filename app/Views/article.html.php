<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1><?=$data['title']?></h1>
            <img class="img-responsive" src="<?= $data['image']?>" alt="">
            <div class="like" data-id="<?= $data['id']?>"><span class="counter"><?=$data['likes'] ?></span></div>
            <hr>
            <div><?=$data['text']?></div>
            <hr>

            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment:</h4>
                <form role="form" action='/create-comment' method="POST">
                    <input type="hidden" name="comment[id]" value="<?=$data['id']?>">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="comment[text]" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>

            <!-- All Comments -->
            <?php if(!empty($data['comments'])):?>
                <?php foreach ($data['comments'] as $key => $value): ?>
                    <div class="media">
                            <img class="media-object pull-left" src="/images/icon.png" alt="">
                        <div class="media-body">
                            <h4 class="media-heading"><?=$value['name']?>
                                <small><?=$value['created_at']?></small>
                            </h4>
                            <?=$value['text']?>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>

</div>
<script type="text/javascript" src="/app/Views/js/script.js"></script>
