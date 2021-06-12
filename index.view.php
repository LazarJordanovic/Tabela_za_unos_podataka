<?php require 'delovi/head.php'; ?>

<br>
<div class="mb-3">
<form action="save_name.php" method="post">
<input type="text" name="name" placeholder="Insert new person" class="form-control"><br>
<input type="text" name="zanimanje" placeholder="Insert new occupation" class="form-control"><br>
<button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
<?php foreach($result as $row): ?>
<?php echo "Ime: ".$row['name']."<br>";
      echo "Zanimanje: " .$row['zanimanje']; ?><br> <button class="btn btn-danger"><a style="color:white" href="delete.php?id=<?php echo $row['id']?>" >Delete</a></button>
      <button class="btn btn-primary"><a style="color:white" href="update.php?id=<?php echo $row['id']?>" >Update</a></button><hr>
<?php endforeach; ?>
<?php require 'delovi/footer.php'; ?>