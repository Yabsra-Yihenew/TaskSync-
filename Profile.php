<?php
include 'includes/includes.inc.php';

$controller = new Controler();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $fullName = $_POST['fullName'];
  $role = $_POST['role'];

  try {
    $data = $controller->Update($email, $fullName, $role);

    echo '<script>alert("Account Updated successfully.");</script>';
    header('Location: Profile.php');
    exit();
  } catch (mysqli_sql_exception $e) {
    
    echo '<script>alert("Error: This email is already registered. Please try with a different email address.");</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <title>Admin</title>
  </head>
  <body>
    <div class="full-container">
      <div class="sidebar">
        <div class="sidebar_header">
          <a href="Admin.html">
            <div class="logo">
              <i class="fa fa-file"></i>
            </div>
            <div class="company_name">
              <h3>Task Sync</h3>
              <p>Small Detail</p>
            </div>
          </a>
          <hr />
        </div>

        <div class="sidebar_body">
          <a href="AdminHome.php">
            <div class="sidebar_nav">
              <i class="fa fa-home fa-lg"></i>
              <p>Dashboard</p>
            </div>
          </a>
          <a id="AddUser.php">
            <div class="sidebar_nav">
              <i class="fa fa-plus fa-lg"></i>
              <p>Add User</p>
            </div>
          </a>
          <a href="AllUser.php">
            <div class="sidebar_nav">
              <i class="fa fa-eye fa-lg"></i>
              <p>Show Data</p>
            </div>
          </a>
          <a href="Profile.php" href="">
            <div class="sidebar_nav">
              <i class="fa fa-wrench fa-lg"></i>
              <p>Settings</p>
            </div>
          </a>
        </div>
      </div>
      <div class="right-body">
        <div class="navbar">
          <a id="openDropdown" href="#" class="">
            <img height="40" width="40" src="Images/download.jpeg" alt="" />
          </a>
        </div>
        <div class="profile_container">
          <div class="profile_header">
            <div class="profile_img">
              <img src="Images/download.jpeg" alt="" />
            </div>
            <div class="upload_photo">
              <button
                style="
                  background-color: #2f98e8;
                  color: white;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  cursor: pointer;
                "
              >
                Upload Photo
              </button>
            </div>
          </div>
          <form class="user-info-container">
            <div class="user-info">
              <p>Name:</p>
              <input type="text" placeholder="fullname" />
            </div>
            <div class="user-info">
              <p>Email:</p>
              <input type="text" placeholder="email" />     
            </div>
            <div class="user-info">
              <p>Role:</p>
              <input type="text" placeholder="role" />
            </div>
            <div class="edit_profile">
              <button
                style="
                  background-color: #2f98e8;
                  color: white;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  cursor: pointer;
                "
              >
                Edit
              </button>
            </div>
          </form>
          <div class="upload_profile_button">
            <button
              style="
                background-color: #2f98e8;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
              "
            >
              Upload Profile
            </button>
          </div>
          
        </div>
      </div>
      <div id="myModal" class="modal">
        <div class="modal_header">
          <h5>Add User</h5>
          <button>
            <i class="fa fa-close fa-lg"></i>
          </button>
        </div>
        <hr />
        <div class="modal_body">
          <form action="">
            <div class="login-input">
              <label for="">Full Name</label>
              <div class="input-style">
                <input type="text" />
              </div>
            </div>
            <div class="login-input">
              <label for="">Email</label>
              <div class="input-style">
                <input type="email" />
              </div>
            </div>
            <div class="login-input">
              <label for="">Role</label>
              <div class="input-style">
                <select name="" id="">
                  <option value=""></option>
                  <option value="">Teacher</option>
                  <option value="">Student</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="modal_footer">
          <div class="modal_button">
            <button>Add User</button>
          </div>
        </div>
      </div>
      <div id="dropdown" class="dropdown">
        <a href="Profile.html">View Profile</a>
        <div class="dropdown_button">
          <button>Log Out</button>
        </div>
      </div>
    </div>
    
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var landingCardLink = document.getElementById("landingCardLink");
      var viewCardsContainer = document.getElementById("viewCardsContainer");

      landingCardLink.addEventListener("click", function (event) {
        event.preventDefault();
        viewCardsContainer.style.display =
          viewCardsContainer.style.display === "none" ||
          viewCardsContainer.style.display === ""
            ? "flex"
            : "none";
      });
    });
    document.addEventListener("DOMContentLoaded", function () {
      var openModalBtn = document.getElementById("openModalBtn");
      var modal = document.getElementById("myModal");

      openModalBtn.addEventListener("click", function () {
        modal.style.display = "flex";
      });

      // Close the modal when the close button is clicked
      var closeModalBtn = document.querySelector(".modal_header button");
      closeModalBtn.addEventListener("click", function () {
        modal.style.display = "none";
      });
    });
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
  </body>
</html>
