<?php
  include('config/db_connect.php');
  $sql = 'SELECT * FROM cheemies ORDER BY created_at';
  $result = mysqli_query($conn, $sql);
  $cheemies = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);
  mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<?php include('partials/header.php'); ?>

<main id="home">
  <div class="container">
    <h2>cheemies that sailed through 7 seas</h2>
    <?php foreach ($cheemies as $cheemy): ?>
      <div class="cheemy">
        <h3><?php echo htmlspecialchars($cheemy['research']) ?></h4>
        <p><em><?php echo htmlspecialchars($cheemy['name']) ?></em></p>
        <ul>
          <?php foreach(explode(',', $cheemy['tags']) as $tag): ?>
            <li class="tag"><?php echo htmlspecialchars($tag); ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="details.php?id=<?php echo $cheemy['id']; ?>" class="see-more">more info</a>
      </div>
    <?php endforeach; ?>
  </div>

</main>

<?php include('partials/footer.php'); ?>

</html>