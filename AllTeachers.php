<?php
include 'includes/includes.inc.php'; // Include the file with the database connection

// Instantiate the Db class to create a database connection
$db = new Db();
$dbConnection = $db->conn();

// Check if the database connection is successful
if (!$dbConnection) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Check if the delete button is clicked
if(isset($_POST['delete'])) {
  $email = $_POST['delete'];
  $query = "DELETE FROM USER WHERE Email = '$email'";
  $result = mysqli_query($dbConnection, $query);

  if(!$result) {
    die("Delete query failed: " . mysqli_error($dbConnection));
  }
}

$query = "SELECT * FROM USER WHERE Role = 'Teacher'";
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
        <h2>All Teachers</h2>
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
    
    </div>
  </div>

  <script>
    function confirmDelete() {
      return confirm("Are you sure you want to delete this user?");
    }
  </script>
</body>

</html>
