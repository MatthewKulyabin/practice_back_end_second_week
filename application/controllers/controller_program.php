<?php
  class Controller_Program extends Controller
  {
    function __construct()
    {
      $this->model = new Model_Program();
      $this->view = new View();
    }

    function action_index()
    {
      $data = $this->model->get_data();
      $this->view->generate('program_view.php', 'template_view.php', $data);
    }

    function action_add_program()
    {
      $this->model->add_program();
      header("LOCATION: http://localhost:3000/program");
    }

    function action_detail_program()
    {
      $data = $this->model->detail_program($_POST);
      $this->view->generate('program_detail_view.php', 'template_view.php', $data);
    }

    function action_change_program()
    {
      $this->model->change_program($_POST);
      header("LOCATION: http://localhost:3000/program");
    }

    function action_delete_program()
    {
      $this->model->delete_program($_POST);
      header("LOCATION: http://localhost:3000/program");
    }

    function action_add_step()
    {
      $this->model->add_step($_POST);
      header("LOCATION: http://localhost:3000/program/detail_program");
    }

    function action_detail_step()
    {
      $data = $this->model->detail_step($_POST);
      $this->view->generate('step_detail_view.php', 'template_view.php', $data);
    }

    function action_delete_step()
    {
      $this->model->delete_step($_POST);
      header("LOCATION: http://localhost:3000/program/detail_program");
    }

    function action_change_step()
    {
      $this->model->change_step($_POST);
      header("LOCATION: http://localhost:3000/program/detail_program");
    }
  }
?>
<!-- CREATE TABLE steps (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), title TEXT NOT NULL, description TEXT NOT NULL, time INTEGER NOT NULL, program_id INT, INDEX program_ind (program_id), FOREIGN KEY (program_id) REFERENCES programs(id) ON DELETE CASCADE); -->

<!-- CREATE TABLE programs (id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), title TEXT NOT NULL, description TEXT NOT NULL, time INTEGER NOT NULL); -->
