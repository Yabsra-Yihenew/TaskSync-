<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <style>
    .delete-button {
      background-color: lightcoral; 
      color: white; 
      border: none;
      padding: 8px 16px;
      cursor: pointer; 
      border-radius: 4px; 
    }

    .delete-button:hover {
      background-color: darkred; 
    }
    .edit-button {
      background-color: lightblue; 
      color: white; 
      border: none;
      padding: 8px 16px;
      cursor: pointer; 
      border-radius: 4px; 
    }

    .edit-button:hover {
      background-color: blue; 
    }
  </style>

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
 
  <title>Admin</title>
</head>
<body>
  <div class="full-container">
    <div class="sidebar">
      <div class="sidebar_header">
        <a href="AdminHome.html">
          <div class="logo">
            <i class="fa fa-file"></i>
          </div>
          <div class="company_name">
            <h3>Task Sync</h3>
            <p><i>Work with us</i></p>
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
        <a href="AddUser.php">
          <div class="sidebar_nav">
            <i class="fa fa-plus fa-lg"></i>
            <p>Add User</p>
          </div>
        </a>
        <a href="AllUsers.php">
          <div class="sidebar_nav">
            <i class="fa fa-eye fa-lg"></i>
            <p>Show Data</p>
          </div>
        </a>
        <a href="Logout.php">
          <div class="sidebar_nav">
            <i class="fa fa-power-off fa-lg"></i>
            <p>Logout</p>
          </div>
        </a>
      </div>
    </div>
    <div class="right-body">
      <div class="navbar">
      <a id="openDropdown" href="Profile.php" class="">
            <img height="40" width="40" src="Images/download.jpeg" alt="" />
          </a>
      </div>
      