<?php
  include('config/db_connect.php');

  $name = $research = $tags = '';
  $errors = ['name' => '', 'research' => '', 'tags' => ''];

  if (isset($_POST['submit'])) {
    // Check Name
    if (empty($_POST['name'])) {
      $errors['name'] = "Name is required.";
    } else {
      $name = $_POST['name'];
      if (!preg_match('/^[a-zA-Z\d]+$/', $name)) {
        $errors['name'] = "Name can be letters and numbers only.";
      }
    }

    // Check Research
    if (empty($_POST['research'])) {
      $errors['research'] = "Research is required.";
    } else {
      $research = $_POST['research'];
      if (!preg_match('/^[\w\s\d]+$/', $research)) {
        $errors['research'] = "Not a valid research.";
      }
    }

    // Check Tags
    if (empty($_POST['tags'])) {
      $errors['tags'] = "At least 1 tag is required.";
    } else {
      $tags = $_POST['tags'];
      if (!preg_match('/^([a-zA-Z\s\d]+)(,\s*[a-zA-Z\s\d]*)*$/', $tags)) {
        $errors['tags'] = "Tags must be a comma separated list.";
      }
    }

    if (array_filter($errors)) {
      // echo 'there are errors in the form';
    } else {
      // echo 'form is valid';
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $research = mysqli_real_escape_string($conn, $_POST['research']);
      $tags = mysqli_real_escape_string($conn, $_POST['tags']);

      $sql = "INSERT INTO cheemies(name, research, tags) VALUES('$name', '$research', '$tags')";

      if(mysqli_query($conn, $sql)) {
      // success 
        header('Location: index.php');
      } else {
        // fail
        echo 'query error: '.mysqli_error($conn);
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php include('partials/header.php'); ?>

<main>
  <div class="container">
    <h2 class="center">Add a cheemy</h2>
    <form action="add.php" method="POST">
      <label for="name">Your Name</label>
      <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>">
      <div class="error">
        <?php echo $errors['name']; ?>
      </div>

      <label for="research">Your detail research about the cheemy</label>
      <input type="text" name="research" id="research" value="<?php echo htmlspecialchars($research); ?>">
      <div class="error">
        <?php echo $errors['research']; ?>
      </div>

      <label for="tags">Tags (comma separated)</label>
      <input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($tags); ?>">
      <div class="error">
        <?php echo $errors['tags']; ?>
      </div>

      <input type="submit" value="Add" class="button" name="submit">
    </form>
  </div>
</main>

<?php include('partials/footer.php'); ?>

</html>