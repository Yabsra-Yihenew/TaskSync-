<?php
include 'includes/includes.inc.php';

$db = new Db();
$dbConnection = $db->conn();

if (!$dbConnection) {
  die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])) {
  $email = $_POST['delete'];
  $query = "DELETE FROM USER WHERE Email = '$email'";
  $result = mysqli_query($dbConnection, $query);

  if(!$result) {
    die("Delete query failed: " . mysqli_error($dbConnection));
  }
}

$query = "SELECT * FROM USER";
$result = mysqli_query($dbConnection, $query);

// Check if the query executed successfully
if (!$result) {
  die("Query failed: " . mysqli_error($dbConnection));
}
?>
<?php
include_once 'includes/ViewBody.php'
?>
      <div class="view_user_header">
        <h2>All Users</h2>
        
      </div>

      <table>
        <thead>
          <tr>
            <th>Email</th>
            <th>Full Name</th>
            <th>Role</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Process the query result
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['FullName'] . "</td>";
            echo "<td>" . $row['Role'] . "</td>";
            echo "<td><form method='post' onsubmit='return confirmDelete()'><button type='submit' name='delete' value='" . $row['Email'] . "' class='delete-button'>Delete</button></form></td>";            
            echo "</tr>";
          }

          // Close the database connection
          mysqli_close($dbConnection);
          ?>
        </tbody>
      </table>
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
            <label for="">Default Password</label>
            <div class="input-style">
              <input type="text" />
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
        <div class="dropdown_button">
         <a href="Logout.php"> <button>Log Out</button></a>
        </div>
      </div>
  </div>
  
<script>
  function confirmDelete() {
      return confirm("Are you sure you want to delete this user?");
    }
</script>

</body>

</html>
