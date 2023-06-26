<?php
// Start the session
// session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
  // Redirect to the appropriate dashboard based on the user's role
  header('Location: dashboard.php');
  exit();
}

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Retrieve the form data
  $username = $_GET['username'];
  $password = $_GET['password'];
  $userType = $_GET['userType'];

  // Perform the necessary validation and database lookup
  // Replace the following lines with your own logic for validation and database query

  // Example validation: check if username and password match
  if ($username === 'admin' && $password === 'password' && $userType === 'admin') {
    // Valid login credentials
    // Set the user's information in the session
    // $_SESSION['username'] = $username;
    // $_SESSION['userType'] = $userType;

    // Redirect to the appropriate dashboard based on the user's role
    header('Location: admin-dashboard.php');
    exit();
  } elseif ($username === 'student' && $password === 'password' && $userType === 'student') {
    // Valid login credentials for student
    // Set the user's information in the session
    // $_SESSION['username'] = $username;
    // $_SESSION['userType'] = $userType;

    // Redirect to the appropriate dashboard based on the user's role
    header('Location: student-dashboard.php');
    exit();
  } elseif ($username === 'coordinator' && $password === 'password' && $userType === 'coordinator') {
    // Valid login credentials for coordinator
    // Set the user's information in the session
    $_SESSION['username'] = $username;
    $_SESSION['userType'] = $userType;

    // Redirect to the appropriate dashboard based on the user's role
    header('Location: coordinator-dashboard.php');
    exit();
  } else {
    // Invalid login credentials
    // Redirect back to the login page with an error message
    header('Location: index.html?error=1');
    exit();
  }
}
?>
