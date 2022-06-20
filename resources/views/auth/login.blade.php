<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body onload="myFunction()">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" style="display:inline;" id="staticBackdropLabel">LOGIN
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div> -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="user_email" class="form-label">Email</label>
                                            <input type="email" name="email" :value="old('email')" required autofocus class="form-control" id="uemail"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="user_pass" class="form-label">Password</label>
                                            <input type="password"
                                name="password"
                                required autocomplete="current-password"  class="form-control" id="upass"
                                                placeholder="Your Password">
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            function myFunction() {
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
        myModal.show();
    }

    function show1() {
        document.getElementById('dataToggle').style.display = 'none';
    }

    function show2() {
        document.getElementById('dataToggle').style.display = 'block';
    }

    function displayDivDemo(id, elementValue) {
        document.getElementById(id).style.display = elementValue.value == 4 ? 'block' : 'none';
    }
        </script>

    </body>

</html>