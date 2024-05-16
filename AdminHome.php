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
  </script>
  <body>
    <div class="full-container">
      <div class="sidebar">
        <div class="sidebar_header">
          <a href="">
            <div class="logo">
              <i class="fa fa-file"><img src="" alt=""></i>
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
          <a href="#" class="">
            <img height="40" width="40" src="Images/download.jpeg" alt="" />
          </a>
        </div>
        <div class="card_list">
          <a href="" class="landing_card">
            <div class="landing_icon">
              <i class="fa fa-file fa-lg"></i>
            </div>
            <div class="landing_card_writing">
              <h5>View Class</h5>
            </div>
          </a>
          <a id="landingCardLink" href="" class="landing_card">
            <div class="landing_icon">
              <i class="fa fa-file fa-lg"></i>
            </div>
            <div class="landing_card_writing">
              <h5>View Users</h5>
            </div>
          </a>
          <div class="absolute_view_cards" id="viewCardsContainer">
            <a href="AllUsers.php" class="view_cards">
              <p>All Users</p>
            </a>
            <a href="AllStudents.php" class="view_cards">
              <p>Students</p>
            </a>
            <a href="AllTeachers.php" class="view_cards">
              <p>Teachers</p>
            </a>
          </div>
          <a href="ViewGroup.php" class="landing_card">
            <div class="landing_icon">
              <i class="fa fa-file fa-lg"></i>
            </div>
            <div class="landing_card_writing">
              <h5>View Group</h5>
            </div>
          </a>
          <a href="ViewAssignment.php" class="landing_card">
            <div class="landing_icon">
              <i class="fa fa-file fa-lg"></i>
            </div>
            <div class="landing_card_writing">
              <h5>View Assignment</h5>
            </div>
          </a>
          <a href="" class="landing_card">
            <div class="landing_icon">
              <i class="fa fa-file fa-lg"></i>
            </div>
            <div class="landing_card_writing">
              <h5>User Experience</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
    1
  </body>
</html>
