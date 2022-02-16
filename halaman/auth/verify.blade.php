<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card py-4">
                <div class="card-body">
                    // Inform user after click resend verification email button is successful <--- this
                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success text-center">A new email verification link has been emailed to you!</div>
                    @endif
                    <div class="text-center mb-5">
                        // Instructions for new users <--- this
                        <h3>Verify e-mail address</h3>
                        <p>You must verify your email address to access this page.</p>
                    </div>
                    <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                        @csrf
                        <button type="submit" class="btn btn-primary">Resend verification email</button>
                    </form>
                </div>
                // Optional: Add this link to let user clear browser cache <--- this
                <p class="mt-3 mb-0 text-center"><small>Issues with the verification process or entered the wrong email?
                    <br>Please sign up with <a href="/register-retry">another</a> email address.</small></p>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>