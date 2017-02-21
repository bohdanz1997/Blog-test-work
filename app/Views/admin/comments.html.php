<h3 class="text-center">Current comments</h3>
<div class="container">
    <table class="table table-bordered table-striped table-responsive">
        <tr class="text-center">
            <th class="text-center">Id</th>
            <th class="text-center">Comment text</th>
            <th class="text-center">User</th>
            <th class="text-center">Article title</th>
            <th class="text-center">Status</th>
            <th class="text-center">Date</th>
        </tr>
        <?php if(!empty($data)):?>
            <?php foreach ($data as $key => $value): ?>
                <tr class="text-center">
                    <td class="col-md-1"><?=$value['id']?></td>
                    <td class="col-md-5"><?=$value['text']?></td>
                    <td class="col-md-1"><?=$value['name']?></td>
                    <td class="col-md-1"><?=$value['title']?></td>
                    <td class="col-md-2">
                        <form class="form-horizontal" action='/comments' method="POST">
                            <input type="hidden" name="comment[id]" value="<?=$value['id']?>">
                            <select id="select" name="comment[status]" class="form-control">
                            <?php if ($value['status'] == 1): ?>
                               <option value="0">Disable</option>;
                               <option value="1" selected>Active</option>;
                            <?php else:?>
                                <option value="0" selected>Disable</option>;
                                <option value="1">Active</option>;
                            <?php endif;?>
                            </select>
                            <input type="submit" value="add" class="form-control">
                        </form>
                    </td>
                    <td class="col-md-2"><?=$value['created_at']?></td>
                </tr>
            <?php endforeach;?>
        <?php else:?>
            <h3> You don`t have any comments</h3>
        <?php endif;?>
    </table>
</div>