<?php
class Model_Program extends Model
{
	public function get_data()
	{	
		$data = getFromTable($GLOBALS['mysqli'], "SELECT * FROM programs;");
		return $data;
	}

  public function add_program()
  {
    $query = "INSERT INTO programs (title, description, time) VALUES ('Title', 'Description', 0)";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }

  public function detail_program($post)
  {
    if (!$post['id'])
    {
      $id = $_SESSION['programId'];
    }
    else
    {
      $id = $post['id'];
      $_SESSION['programId'] = $id;
    }
    $data = array();
    $data['programs'] = getFromTable($GLOBALS['mysqli'], "SELECT * FROM programs WHERE id=$id;");
    $data['steps'] = getFromTable($GLOBALS['mysqli'], "SELECT * FROM steps WHERE program_id=$id;");
		return $data;
  }

  public function delete_program($post)
  {
    $id = $post['id'];
    $query = "DELETE FROM programs WHERE id=$id";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }

  public function change_program($post)
  {
    $id = $post['id'];
    $title = $post['title'];
    $description = $post['description'];
    $query = "UPDATE programs SET title='$title', description='$description' WHERE id=$id";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }

  public function add_step($post)
  {
    $programId = $post['programId'];
    $query = "INSERT INTO steps (title, description, time, program_id) VALUES ('Title', 'Description', 0, $programId)";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }

  public function detail_step($post)
  {
    $id = $post['id'];
    $data = array();
    $data = getFromTable($GLOBALS['mysqli'], "SELECT * FROM steps WHERE id=$id;");
		return $data;
  }

  public function delete_step($post)
  {
    $id = $post['id'];
    $query = "DELETE FROM steps WHERE id=$id";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }

  public function change_step($post)
  {
    $id = $post['id'];
    $title = $post['title'];
    $description = $post['description'];
    $query = "UPDATE steps SET title='$title', description='$description' WHERE id=$id";
      if (!changeTable($GLOBALS['mysqli'], $query)) {
        echo "Error from post to table";
      } else {
        echo "Success!";
      }
  }
}
?>
