<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="style.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Registrasi</title>
</head>
<body>
    {{-- content --}}
    <section class="vh-100" style="background-color: #4E4FEB">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Registrasi</h3>
                            <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="form-outline mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}" placeholder="">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}" placeholder="">
                                    <label for="username">Username</label>
                                @error('username')
                                <div class="invalid-feedback">
                                 {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password') }}" placeholder="">
                                    <label for="username">Password</label>
                                @error('username')
                                <div class="invalid-feedback">
                                 {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end ">
                                <input class="btn btn-primary mx-2" type="submit" value="sign up">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>