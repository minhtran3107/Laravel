<h1>Thêm chuyên mục</h1>
<form method="POST" action="<?php echo route('categories.add')?>">
    <div>
        <input type="text" name="category_name" placeholder="Tên chuyên mục" value="<?php echo old('category_name')?>"/>
        <?php echo csrf_field() ?>
        {{-- <input type="hidden" name="_token" value="" /> --}}
    </div>
    <button type="submit">Thêm chuyên mục</button>
</form>