<!DOCTYPE html>
<html lang="en">
<html>  
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>
    </head>
    <style>

.container {
  position: relative;
  max-width: 500px;
  width: 100%;
  background: orange;
  padding: 50px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin: 30px 350px;
  
}

.container header {
  font-size: 1.3rem;
  color: #000;
  font-weight: 600;
  text-align: center;
}

.container .form {
  margin-top: 15px;
  display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}

.form .input-box {
  width: 100%;
  margin-top: 10px;
}

.input-box label {
  color: #000;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #808080;
  margin-top: 5px;
  border: 1px solid #EE4E34;
  border-radius: 6px;
  padding: 0 15px;
  background: #FCEDDA;
}

.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #EE4E34;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #808080;
  font-size: 1rem;
  background: #FCEDDA;
}

.form button {
  height: 40px;
  width: 100%;
  color: #000;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #EE4E34;
}

.form button:hover {
  background: #EE3E34;
}
    </style>
    <body>  
    <section class="container">
  <header>Registration Form</header>
  <form class="form" action="#">
      <div class="input-box">
          <label>Full Name</label>
          <input required="" placeholder="Enter full name" type="text">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input required="" placeholder="Enter phone number" type="telephone">
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input required="" placeholder="Enter birth date" type="date">
          </div>
          
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio">
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-other" type="radio">
            <label for="check-other">Prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="column">
          <div class="select-box">
            <select>
              <option hidden="">City</option>
              <option>Sulaimaniya</option>
              <option>Erbil</option>
              <option>Duhok</option>
              <option>Zakho</option>
            </select>
          </div>
        </div>
      <div class="input-box email">
        <label>Email</label>
        <input required="" placeholder="Email" type="text">
        <div class="input-box password">
        <label>Password</label>
        <input required="" placeholder="Password" type="password">
      
      </div>
      <button type="submit" value="submit" onclick="openNewTab()">Submit</button>
  </form>
  </section>

  <?php
  //PHP code to handle form submission and processing
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Sanitize and retrieve form data
      $fullname = htmlspecialchars($_POST['fullname']);
      $phone = htmlspecialchars($_POST['phone']);
      $birthdate = htmlspecialchars($_POST['birthdate']);
      $gender = htmlspecialchars($_POST['gender']);
      $email = htmlspecialchars($_POST['email']);
      $city = htmlspecialchars($_POST['city']);

     // Perform further processing (e.g., save to database, send email, etc.)
    // Example: Saving to a text file (just for demonstration)
    $file = 'registrations.txt';
    $data = "Full Name: $fullname, Phone: $phone, Birth Date: $birthdate, Gender: $gender, Email: $email, City: ";
    if (!empty($custom_city)) {
    $data .= "$custom_city\n";}
    else {
    $data .= "$city\n";
    }
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    echo "<p>Registration successful!</p>";
  }
    ?>
</body>
</html>