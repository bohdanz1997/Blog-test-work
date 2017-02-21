<div class=" text-center center-block">
    <h2>New Article</h2>
</div>
<div class="container">
    <form class="form-horizontal" action='/create-article' method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <p><label for="name">Title</label></p>
            <input id="name" class="form-control" type="text" name="article[title]" value="" required>
        </div>
        <div class="form-group">
            <p><label for="name">Description</label></p>
            <input id="name" class="form-control" type="text" name="article[description]" value="" required>
        </div>
        <div class="form-group">
            <p><label>Text</label></p>
            <textarea name="article[text]" id="text" class="form-control" rows="10" tabindex="2"></textarea>
        </div>

        <div class="form-group">
            <label for="formAcc">Category</label>
                <select id="formAcc" name="article[category_id]" class="form-control">
                    <?php
                        foreach ($data as $value){
                            echo "<option value=$value[id]>".$value['name']."</option>";
                        }
                    ?>
                </select>
        </div>

        <div class="form-group">
            <p><label>Photo</label></p>
            <input name="picture" class="btn btn-default" type="file" >
        </div>

        <input type="submit" value="Create Article" id="submit" class="btn btn-default "/>
    </form>
</div>

<script>
    CKEDITOR.replace( 'text' );
</script>