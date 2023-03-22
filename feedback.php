<?php include 'partials/head.php' ?>

<?php 
    $sql = 'SELECT * FROM feedback';
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
   
    <h2 class="text-center">Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p>There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="w-50">
      <div class="card my-3">
      <div class="card-body">
        <?php echo $item['body']; ?>

        <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?> On <?php echo $item['date']; ?>
        </div>
      </div>
    </div>
    </div>
  <?php endforeach; ?>

  </div>
  <?php include 'partials/footer.php' ?>
