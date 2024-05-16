<?php
include 'includes/includes.inc.php';

$controller = new Controler();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $fullName = $_POST['fullName'];
  $pass = '123456';
  $role = $_POST['role'];

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) or !preg_match("/^[a-zA-Z ]*$/", $fullName)){
        echo '<script>alert("Error: Invalid email format or Name should contain only letters and spaces.");</script>';
    } 
  else {
      try {
        $data = $controller->signup($email, $fullName, $pass, $role);

        echo '<script>alert("User added successfully.");</script>';
        // Redirect after displaying the alert
        header('Location: AddUser.php');
         // Make sure to exit after redirection
      } catch (mysqli_sql_exception $e) {
        echo '<script>alert("Error: This email is already registered. Please try with a different email address.");</script>';
      }
    }
  
}
?>
<?php
include_once 'includes/ViewBody.php'
?>
      <div style="">
      <form class="user-info-container"  action="" method="POST">
        <div class="add_container">
            <div class="login-input_">
              <label for="fullName">Full Name</label>
              <div class="input-style_">
                <input type="text" name="fullName" id="fullName" required />
              </div>
            </div>
            <div class="login-input_">
              <label for="email">Email</label>
              <div class="input-style_">
                <input type="email" name="email" id="email" required />
              </div>
            </div>
            <div class="login-input_">
              <label for="role">Role</label>
              <div class="input-style_">
                <select name="role" id="role" required>
                  <option value=""></option>
                  <option value="Teacher">Teacher</option>
                  <option value="Student">Student</option>
                </select>
              </div>
            </div>
            <div class="login-btn-div_">
              <button style="
                  background-color: #2f98e8;
                  color: white;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  cursor: pointer;
                " type="submit">Add User</button>
            </div>
            </div>
          </form>

          </div>
</body>
<script>
  document.addEventListener("DOMContentLoaded", function () {
      var openDropdownElement = document.getElementById("openDropdown");
      var dropdownContainer = document.getElementById("dropdown");

      openDropdownElement.addEventListener("click", function (event) {
        event.preventDefault();
        dropdownContainer.style.display =
          dropdownContainer.style.display === "none" ||
          dropdownContainer.style.display === ""
            ? "flex"
            : "none";
      });
    });
</script>

</html>
