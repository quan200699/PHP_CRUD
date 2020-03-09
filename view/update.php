<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $customer->name; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <textarea name="phone" class="form-control"><?php echo $customer->phone; ?></textarea>
    </div>
    <div class="form-group">
        <label>Country</label>
        <textarea name="country" class="form-control"><?php echo $customer->country; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>