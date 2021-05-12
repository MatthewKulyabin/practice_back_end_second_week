<h1>Detail Step</h1>

<?php
  $steps = $data[0];
  echo "<fieldset>
  <legend>Change</legend>
  <form method='POST' action='/program/change_step'>
    Title of step <input type='text' name='title' required /><br><br>
    Description of step <input type='text' name='description' required /><br><br>
    <input type='text' name='id' value='$steps[id]' style='display:none;' />
    <input type='submit' value='Change' />
  </form>
</fieldset><br>";

  echo "<table>Steps<tr><td>Delete</td><td>Title</td><td>Description</td><td>Time</td></tr>";

    echo '<tr><td><form method="post" action="/program/delete_step"><input type="submit" name="id" value="'.$steps['id'].'"/></form></td><td>'.$steps['title']
      .'</td><td>'.$steps['description']
      .'</td><td>'.$steps['time']
      .'</td></tr></table>';
?>
