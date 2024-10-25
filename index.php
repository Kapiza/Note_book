<?php
include_once("post_preprocessor.php");
include_once("reset.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Записная книга</title>
</head>

<body>
  <div id="wrapper_content_id">
    <header>
      <h1>Записная книга</h1>
    </header>
    <hr>
    <main>
      <section class="input-output" id="input_id">
        <h2>Здесь вы можете ввести вашу запись</h2>
        <div class="wrapper_in_out_content">
          <form class="in_out_content" method="post">
            <script src="input_on_click.js"></script>
            <div class="mes_area">
              <textarea class="mes_default" id="mes_in_id" name="mes_in" type="text" 
              placeholder="Текст записи" onClick="input_on_click()"></textarea>
            </div>
            <div class="button" id="send_btn_id">
              <input title="Сделать запись" class="icon" name="send" type="image" 
              src="images/edit-2-svgrepo-com.svg" alt="Submit">
            </div>
          </form>
        </div>
        <hr>
      </section>
      <section class="input-output" id="output_id">
        <h2>Здесь вы можете увидеть ранее оставленные записи</h2>
        <div class="wrapper_in_out_content" id="wrapper_list_mes_id">
          <div class="in_out_content">
            <form class="button" id="reset_id" method="post">
              <script src="change_reset.js"></script>
              <input title="Очистить список записей" class="icon" name="reset" type="image" 
              src="images/free-icon-font-trash-3917242.svg" alt="Submit">
            </form>
            <ul class="mes_area" id="list_mes_id" style="list-style: none">
              <?php
              include_once("output.php")
              ?>
            </ul>
          </div>
        </div>
      </section>
    </main>
  </div>
  <footer>Made by &nbsp<span class="fleuta">fleuta</span></footer>
</body>

</html>

<?php
  include_once "input_empty.php"
?>


