<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  min-height: 100vh;
  background: linear-gradient(160deg, #001a4d, #5a0a7a, #1c1f9e);
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
}

.container {
  width: 360px;
  padding: 30px 20px;
}

h1 {
  font-size: 42px;
  font-weight: bold;
  margin-bottom: 30px;
  line-height: 1.1;
}

.field {
  margin-bottom: 22px;
}

label {
  display: block;
  font-size: 12px;
  letter-spacing: 2px;
  margin-bottom: 8px;
  text-transform: uppercase;
}

input,
select,
textarea {
  width: 100%;
  padding: 14px 16px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.9);
  border-radius: 25px;
  color: #fff;
  font-size: 14px;
  outline: none;
}

select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12'%3E%3Cpath d='M2 4l4 4 4-4' fill='none' stroke='white' stroke-width='2'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 16px center;
}
select option {
  color: black;
}
textarea {
  height: 160px;
  resize: none;
  border-radius: 20px;
}

input::placeholder,
textarea::placeholder {
  color: rgba(255, 255, 255, 0.8);
}

button {
  width: 100%;
  margin-top: 20px;
  padding: 14px;
  background: transparent;
  border: 2px solid #fff;
  border-radius: 30px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  background: rgba(255, 255, 255, 0.15);
}
</style>
<body>
<?php
include "database.php";
 ?>
 <?php 
include "date_time.php";
?>
  <div class="login-container">
    <h1>date and time</h1>
    
<br>
<form action="date_time_view.php?id=<?php echo $id; ?>" method="post">
   <div class="field">
        <label>date</label>
        <input type="text" placeholder="Party" name="e_date">
      </div>
      <div class="field">
        <label>time</label>
        <input type="text" placeholder="Party" name="e_time">
      </div>
      <div class="field">
        <label>durartion</label>
        <input type="text" placeholder="Party" name="e_duration">
      </div>
    <button class="login-btn" name="add">submit</button>
</form>
  </div>

</body>
</html>
