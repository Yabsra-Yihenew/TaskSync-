<?php
include 'includes/includes.inc.php';

$db = new Db();
$dbConnection = $db->conn();

if (!$dbConnection) {
  die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])) {
  $email = $_POST['delete'];
  $query = "DELETE * FROM GROUPS";
  $result = mysqli_query($dbConnection, $query);

  if(!$result) {
    die("Delete query failed: " . mysqli_error($dbConnection));
  }
}

$query = "SELECT * FROM GROUPS";
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
        <h2>Groups</h2>
      </div>

      <table>
        <thead>
          <tr>
            <th>GroupName</th>
            <th>AssignmentName</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Process the query result
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['GroupName'] . "</td>";
            echo "<td>" . $row['AssignmentName'] . "</td>";
            echo "<td><form method='post' onsubmit='return confirmDelete()'><button type='submit' name='delete' value='" . $row['GroupName'] . "' class='delete-button'>Delete</button></form></td>";            
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
    </div>
  </div>
  
<script>
  function confirmDelete() {
      return confirm("Are you sure you want to delete this user?");
    }
</script>

</body>

</html>