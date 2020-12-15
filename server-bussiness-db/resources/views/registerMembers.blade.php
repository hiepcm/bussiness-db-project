<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>Vertical (basic) form</h2>
      <form action="{{ route('registerMember') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">User Name:</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="User name" />
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
          <label for="name">Your Full Name:</label>
          <input type="text" class="form-control" id="name" name="fullname" placeholder="Your full name" />
        </div>
        <div class="checkbox">
          <label><input type="checkbox" name="is_male"> Is Male</label>
        </div>
        <div class="form-group">
          <label for="birthday">Birthday:</label>
          <input type="text" class="form-control" id="birthday" placeholder="Enter your birthday" name="birthday">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
        </div>
        <div class="form-group">
          <label for="access_level">Access Level:</label>
          <input type="unsigned" class="form-control" id="access_level" placeholder="Access level" name="access_level">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div>
  </div>
</div>
