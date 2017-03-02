<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Freelancer Hub</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
  <link rel="stylesheet" href="jquery//waves.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="css/app.min.css" type="text/css" />

</head>
<body>
<div class="app">
  

  <div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                width: 24px; height: 24px;">
          <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
          <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
          <path d="M 8 80 L 50 0 L 50 100 Z" fill="#fff"></path>
          <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(255, 255, 255, 0.6)"></path>
        </svg>
        <span class="m-l inline">Freelancer Hub</span>
      </div>
    </div>

    <div class="p-lg panel md-whiteframe-z1 text-color m">
      <div class="m-b text-sm">
        Sign up to your Freelancer Hub Account
      </div>
      <form name="form">
        <div class="md-form-group">
          <input type="text" class="md-input" ng-model="user.name" required>
          <label>Name</label>
        </div>
        <div class="md-form-group">
          <input type="email" class="md-input" ng-model="user.email" required>
          <label>Email</label>
        </div>
        <div class="md-form-group">
          <input type="password" class="md-input" ng-model="user.password" required>
          <label>Password</label>
        </div>
        <div class="m-b-md">
          <label class="md-check">
            <input type="checkbox" ng-model="agree" required><i class="indigo"></i> Agree the <a href>terms and policy</a>
          </label>
        </div>
        <button md-ink-ripple type="submit" class="md-btn md-raised pink btn-block p-h-md">Sign up</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div>Already have an account? <a href="signin.php"><button class="md-btn">Sign in</button></a></div>
    </div>
  </div>



</div>

<script src="scripts/app.min.js"></script>

</body>
</html>
