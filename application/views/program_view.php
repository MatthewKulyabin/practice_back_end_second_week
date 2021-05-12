<h1>Program</h1>

<form method='POST' action='program/add_program'>
  <input type='submit' value='Add Program' /><br><br>
</form>

<?php
  echo "<table>Programs<tr><td>Id</td><td>Delete</td><td>Title</td><td>Description</td><td>Time</td></tr>";
  foreach ($data as $row) {
    echo '<tr><td><form method="post" action="program/detail_program"><input type="submit" name="id" value="'.$row['id'].'"/>'
      .'</form></td>'.'<td><form method="post" action="program/delete_program"><input type="submit" name="id" value="'.$row['id'].'"/></form></td><td>'.$row['title']
      .'</td><td>'.$row['description']
      .'</td><td>'.$row['time']
      .'</td></tr>';
  }
?>
