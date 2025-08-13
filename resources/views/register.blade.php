<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
  <div class="container">
  <form method="POST" action="/register" class="row">
    @csrf
    <h2>Registration</h2>

    <div class="row mb-3">
      <div class="col-md-12">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required autofocus />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" required />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required />
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
      </div>
    </div>

    <div class="mb-3 buttons">
      <button type="reset" class="cancel">Cancel</button>
      <button type="submit" class="submit">Submit</button>
    </div>
  </form>
  <p class="mt-3">You have an account? <a href="/login-page">Login here</a></p>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
