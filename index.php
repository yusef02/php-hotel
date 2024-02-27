<?php
require_once './main.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hotel db</title>
</head>
<body>


  <form  method='GET'>
    <input type="checkbox" name="check_parking" id="check_parking" <?php if($filter_parking) echo 'checked' ?>>
    <label for="check_parking">parking yes</label> <br>

    <input type='number' name="vote" id="vote" value='<?=$filter_vote?>' min="1" max="5">
    <label for="vote">filter by vote</label><br>

    <button type="submit">filter</button>
  </form>
  <br>
  <br>
  <br>
  <br>
  <table border='1px'>
    <thead>
      <th>NAME</th>
      <th>DESCRIPTION</th>
      <th>PARKING</th>
      <th>VOTE</th>
      <th>DISTANCE TO CENTER</th>
    </thead>
    <?php foreach($hotels as $hotel): ?>
    <tbody>
      <tr>
        <td><?= $hotel['name'] ?></td>
        <td><?= $hotel['description'] ?></td>
        <td><?= $hotel['parking'] ? 'yes': 'no' ?></td>
        <td><?= $hotel['vote'] ?></td>
        <td><?= $hotel['distance_to_center'] ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
  
</body>
</html>