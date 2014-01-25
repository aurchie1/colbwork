   <?php 

   if (isset($_POST['submit'])) { // Handle the form.

      $message = NULL; // Create an empty new variable.

      // Check for a name.
      if (strlen($_POST['name']) > 0) {
          $name = TRUE;
     } else {
         $name = FALSE;
         $message .= '<p>You forgot to enter your name!</p>';
     }

     // Check for an email address.
     if (strlen($_POST['email']) > 0) {
         $email = TRUE;
     } else {
         $email = FALSE;
         $message .= '<p>You forgot to enter your email address!</p>';
     }

     // Check for a username.
     if (strlen($_POST['username']) > 0) {
         $username = TRUE;
     } else {
         $username = FALSE;
        $message .= '<p>You forgot to enter your user name!</p>';
     }

     // Check for a password and match against the confirmed password.
     if (strlen($_POST['password1']) > 0) {
         if ($_POST['password1'] == $_POST['password2']) {
             $password = TRUE;
         } else {
             $password = FALSE;
             $message .= '<p>Your password did not match the confirmed password!</p>';
         }
     } else {
         $password = FALSE;
         $message .= '<p>You forgot to enter your password!</p>';
     }

     if ($name && $email && $username && $password) { // If everything's okayOK.
         // Register the user.
echo "user is registered";
         // Send an email.
         $body = "Thank you for registering with our site!\nYour username is
{$_POST['username']}' and your password is '{$_POST['password1']}'.\n\nSincerely,\nUs";
        mail ($_POST['email'], 'Thank you for registering!', $body, 'From: admin@site
.com');


        
         exit();
     } else {
         $message .= '<p>Please try again.</p>';
     }

  }

  // Set the page title and include the HTML header.
  $page_title = 'Register!';


  // Print the error message if there is one.
  if (isset($message)) {
      echo '<font color="red">', $message, '</font>';
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <fieldset><legend>Enter your information in the form below:</legend>

  <p><b>Name:</b> <input type="text" name="name" size="20" maxlength="40" value="<?php 
if (isset($_POST['name'])) echo $_POST['name']; ?>" /></p>

  <p><b>Email Address:</b> <input type="text" name="email" size="40" maxlength="60" 
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /></p>

  <p><b>User Name:</b> <input type="text" name="username" size="20" maxlength="40" 
value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" /></p>

  <p><b>Password:</b> <input type="password" name="password1" size="20" maxlength="40" /></p>

  <p><b>Confirm Password:</b> <input type="password" name="password2" size="20" 
maxlength="40" /></p>
  </fieldset>

  <div align="center"><input type="submit" name="submit" value="Submit Information" /></div>

  </form><!-- End of Form -->

 