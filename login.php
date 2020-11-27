<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login Form Design | CodeLab</title> -->
    <link rel="stylesheet" href="loginstyle.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">
FOR YOU</div>
<form method='get' action="login_action.php">
<div class="field">
          <input name="studentID" type="text" required>
          <label>Student Number</label>
        </div>
<div class="field">
          <input name="name" type="text" required>
          <label>Name</label>
        </div>
<div class="field">
          <input name="phone" type="text" required>
          <label>Phone number</label>
        </div>

<div class="field">
          <input type="submit" value="확인">
        </div>

</form>
</div>
</body>
</html>