<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insallot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">InsAllot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#">Classrooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-primary shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModel">
                        Login
                    </button>

                    <button type="button" class="btn btn-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#SignInModel">
                        Sign Up
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person fs-2 me-2"></i>User Login </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1 shadow-none" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1 shadow-none">
                            <div class="form-text">We'll never share your password with anyone else.</div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-primary shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="SignInModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <span class="badge bg-light text-primary mb-3 text-wrap lh-base mt-2 fs-6">NOTE: We will never share your credentials with others.</span>
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-add fs-2 me-2"></i> Sign Up </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Name:</label>
                                        <input type="text" class="form-control" shadow-none">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">E-mail:</label>
                                        <input type="email" class="form-control" shadow-none">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Password:</label>
                                        <input type="password" class="form-control" shadow-none">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Confirm Password:</label>
                                        <input type="password" class="form-control" shadow-none">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Date-Of-Birth:</label>
                                        <input type="date" class="form-control" shadow-none">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Address:</label>
                                        <textarea class="form-control"rows="1"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Picture:</label>
                                        <input type="file" class="form-control" shadow-none">
                                    </div>
                                </div>
                                <div class="text-center my-1">
                                <button class="btn btn-dark shadow-none" type="submit">Submit</button>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1 shadow-none" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1 shadow-none">
                            <div class="form-text">We'll never share your password with anyone else.</div>

                        </div>
                        <div class= "d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-primary shadow-none">Login</button>
                            <a href="javascript: void(0)" class = "text-secondary text-decoration-none">Forgot Password?</a>
                        </div> -->
                        </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>