<div class="container">
    <h1>Categories</h1>
    <?php foreach ($data as $key => $val):?>
        <h3>
            <span class="label"><a href="/articles?category=<?=$val['id']?>"><?=$val['name']?></a></span>
        </h3>
    <?php endforeach;?>
</div>
