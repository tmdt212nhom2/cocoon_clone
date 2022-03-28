<h1>Editing Category</h1>
<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost/assignment/"</script>';
}
?>
<?php 
    require_once "../assignment/mvc/views/admin/categories/form_category.php";
?>
<a href="http://localhost/Assignment/Category/index">Back</a>
