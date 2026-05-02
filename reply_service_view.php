<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Add Event</title>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  background: linear-gradient(135deg, #001a4d, #4b006e, #9b0f6f);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
}

.login-container {
  width: 320px;
}

h1 {
  text-align: center;
  font-size: 42px;
  margin-bottom: 10px;
}

.subtitle {
  text-align: center;
  opacity: 0.8;
  margin-bottom: 40px;
}

.form-group {
  margin-bottom: 30px;
}

label {
  display: block;
  font-size: 12px;
  letter-spacing: 1px;
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
  width: 100%;
  padding: 14px;
  border-radius: 30px;
  border: 2px solid rgba(255,255,255,0.7);
  background: transparent;
  color: white;
  outline: none;
  appearance: none;
  font-size: 14px;
}

select option {
  color: black;
}
textarea {
  height: 160px;
  resize: none;
  border-radius: 20px;
}
.radio-group {
  margin-bottom: 50px;
}

.radio {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 1px;
}

.radio input {
  display: none;
}

.radio span {
  width: 20px;
  height: 20px;
  border: 2px solid white;
  border-radius: 50%;
  margin-right: 12px;
  position: relative;
}

.radio input:checked + span::after {
  content: "";
  width: 10px;
  height: 10px;
  background: white;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.login-btn {
  width: 100%;
  padding: 15px;
  border-radius: 30px;
  border: 2px solid white;
  background: transparent;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.login-btn:hover {
  background: white;
  color: #4b006e;
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
.field {
  margin-bottom: 22px;
}
</style>
<?php
include "database.php";
 ?>
 <?php 
include "reply_service.php";
?>
<body>

  <div class="container">
    <h1>reply service</h1>

    <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="radio-group">
      
    <div class="field">
        <label>event</label>
        <input type="text" placeholder="Party" name="event">
      </div>
      <div class="field">
        <label>service</label>
        <input type="text" placeholder="Party" name="service">
      </div>
      <label>reply</label>
      <br>
      <label class="radio">
        <input type="radio" name="reply" value="yes">
        <span></span>
        yes
      </label>

      <label class="radio">
        <input type="radio" name="reply" value="no">
        <span></span>
        no
      </label>

      
       <div class="field">
        <label>reason</label>
        <textarea placeholder="" name="reason"></textarea>
      </div>

      <button type="submit" name="add">Submit</button>
    </form>
  </div>
    
  </div>

</body>
</html>
