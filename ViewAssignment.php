<?php
include 'includes/includes.inc.php';

$db = new Db();
$dbConnection = $db->conn();

if (!$dbConnection) {
  die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])) {
  $assignmentName = $_POST['delete'];
  $query = "DELETE FROM ASSIGNMENT WHERE AssignmentName = '$assignmentName'";
  $result = mysqli_query($dbConnection, $query);

  if(!$result) {
    die("Delete query failed: " . mysqli_error($dbConnection));
  }
}

if(isset($_POST['editAssignment'])) {
  $assignmentName = $_POST['assignmentName'];
  $description = $_POST['editDescription'];
  
  $query = "UPDATE ASSIGNMENT SET Description = '$description' WHERE AssignmentName = '$assignmentName'";
  $result = mysqli_query($dbConnection, $query);

  if(!$result) {
    die("Update query failed: " . mysqli_error($dbConnection));
  }
}

$query = "SELECT * FROM ASSIGNMENT";
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
  <h2>Assignments</h2>
</div>

<table>
  <thead>
    <tr>
      <th>Assignment Name</th>
      <th>Description</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Process the query result
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['AssignmentName'] . "</td>";
      echo "<td>" . $row['Description'] . "</td>";
      echo "<td><button onclick=\"editAssignment('" . $row['AssignmentName'] . "', '" . $row['Description'] . "')\" class='edit-button'>Edit</button></td>";
      echo "<td><form method='post' onsubmit='return confirmDelete()'><button type='submit' name='delete' value='" . $row['AssignmentName'] . "' class='delete-button'>Delete</button></form></td>";            
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
    <h5>Edit Assignment</h5>
    <button onclick="closeModal()">
      <i class="fa fa-close fa-lg"></i>
    </button>
  </div>
  <hr />
  <div class="modal_body">
    <form id="editForm" action="" method="POST">
      <input type="hidden" id="assignmentName" name="assignmentName">
      <div class="login-input">
        <label for="editDescription">Description</label>
        <div class="input-style">
          <textarea id="editDescription" name="editDescription" required></textarea>
        </div>
      </div>
      <div class="modal_button">
        <button type="submit" name="editAssignment">Save Changes</button>
      </div>
    </form>
  </div>
</div>
</div>

<script>
  function confirmDelete() {
    return confirm("Are you sure you want to delete this assignment?");
  }

  function editAssignment(assignmentName, description) {
    document.getElementById('assignmentName').value = assignmentName;
    document.getElementById('editDescription').value = description;
    document.getElementById('myModal').style.display = "flex";
  }

  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  }
</script>

</body>

</html>
