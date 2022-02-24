<?php
include('config/db_connect.php');

if(isset($_POST['delete'])) {
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  $sql = "DELETE FROM cheemies WHERE id = $id_to_delete";

  if(mysqli_query($conn, $sql)) {
    // success
    header('Location: index.php');
  } else {
    // fail
    echo 'error '.mysqli_error($conn);
  }
}

if (isset($_GET['id'])) {
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM cheemies WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $cheemy = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('partials/header.php'); ?>

<main>
  <div class="container">
    <?php if ($cheemy) : ?>
      <h2>A Detail Research about this cheemy</h2>
      <img src="img/cheemy.jpg" alt="a cheemy" class="cheemy-img">
      <p>this research is written by: <b><?php echo htmlspecialchars($cheemy['name']); ?></b></p>
      <h4><?php echo htmlspecialchars($cheemy['research']); ?></h4>
      <ul>
        <?php foreach (explode(',', $cheemy['tags']) as $tag) : ?>
          <li class="tag white-border"><?php echo htmlspecialchars($tag); ?></li>
        <?php endforeach; ?>
      </ul> 
      <p><em>time stamp: <?php echo date($cheemy['created_at']); ?></em></p>
      
      <!-- delete cheemy form -->
      <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value="<?php echo $cheemy['id']; ?>">
        <input type="submit" name="delete" value="Delete" class="button">
      </form>
    <?php else : ?>
      <h2 class="error-404">No such cheemy exists. We don't do that here 4head.</h2>
    <?php endif; ?>
  </div>
</main>

<?php include('partials/footer.php'); ?>

</html>