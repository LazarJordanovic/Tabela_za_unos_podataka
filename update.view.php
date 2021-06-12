<?php require 'delovi/head.php'; ?>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-md">
    <a class="navbar-brand">Update table</a>
  </div>
</nav>

<div class="mb-3"></div>
<form action="update_record.php" method="post">
<input type="hidden" name="id" value="<?php echo $result['id']?>" >
<input type="text" name="name" value="<?php echo $result['name']?>" class="form-control"><br>
<input type="text" name="zanimanje" value="<?php echo $result['zanimanje']?>" class="form-control"><br>
<button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require 'delovi/footer.php'; ?>