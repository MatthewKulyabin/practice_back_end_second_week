<h1>Detail Program</h1>

<?php
  $programs = $data['programs'][0];
  $steps = $data['steps'];
  echo "<fieldset>
  <legend>Change</legend>
  <form method='POST' action='/program/change_program'>
    Title of program <input type='text' name='title' required /><br><br>
    Description of program <input type='text' name='description' required /><br><br>
    <input type='text' name='id' value='$programs[id]' style='display:none;' />
    <input type='submit' value='Change' />
  </form>
</fieldset><br>";

  echo "<table>Programs<tr><td>Delete</td><td>Title</td><td>Description</td><td>Time</td></tr>";

    echo '<tr><td><form method="post" action="/program/delete_program"><input type="submit" name="id" value="'.$programs['id'].'"/></form></td><td>'.$programs['title']
      .'</td><td>'.$programs['description']
      .'</td><td>'.$programs['time']
      .'</td></tr></table>';
  
  echo "<br><br><form method='POST' action='/program/add_step'>
    <input type='text' name='programId' value='$programs[id]' style='display: none;' />
    <input type='submit' value='Add Step' /><br><br>
  </form>";

  echo "<table>Steps<tr><td>Id</td><td>Delete</td><td>Title</td><td>Description</td><td>Time</td></tr>";
  foreach ($steps as $row) {
    echo '<tr><td><form method="post" action="/program/detail_step"><input type="submit" name="id" value="'.$row['id'].'"/>'
      .'</form></td>'.'<td><form method="post" action="/program/delete_step"><input type="submit" name="id" value="'.$row['id'].'"/></form></td><td>'.$row['title']
      .'</td><td>'.$row['description']
      .'</td><td>'.$row['time']
      .'</td></tr>';
  }
?>
