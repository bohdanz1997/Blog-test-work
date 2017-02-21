<h3 class="text-center">Current categories</h3>
<div class="container">
    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th class="text-center">id</th>
            <th class="text-center">Category Name</th>
        </tr>
        <?php if(!empty($data)):?>
            <?php foreach ($data as $key => $value): ?>
                <tr class="text-center">
                    <td><?=$value['id']?></td>
                    <td><?=$value['name']?></td>
                </tr>
            <?php endforeach;?>
        <?php else:?>
            <h3> You don`t have any category</h3>
        <?php endif;?>
    </table>
</div>

<hr>
<h3>Create new category</h3>
<div class="container">
    <form class="form-horizontal" action='/create-category' method="POST">
        <div class="form-group">
            <p><label for="name">Category name:</label></p>
            <input id="name" class="form-control" type="text" name="category[name]" required>
        </div>
        <input type="submit" value="Create" id="submit" class="btn btn-default"/>
    </form>
</div>