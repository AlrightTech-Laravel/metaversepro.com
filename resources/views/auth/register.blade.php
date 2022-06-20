<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MetaversePro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body onload="myFunction()">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" style="display:inline;" id="staticBackdropLabel">Registration
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form method="POST" action="{{ url('register-user') }}"
                            enctype="multipart/form-data">
                            <input type="hidden" name="role_as" value="{{ $role_id }}">
                                @csrf

                                <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="prefix" class="form-label">Prefix</label>
                                            <input type="text" name="prefix" class="form-control" id="prefix"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" name="first_name" class="form-control" id="first_name"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" name="last_name" class="form-control" id="last_name"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email<span
                                                    style="color:red;">*</span></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <span
                                                    style="color:red;">*</span></label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="suffix" class="form-label">Suffix</label>
                                            <input type="text" name="suffix" class="form-control" id="suffix"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control" id="image"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                placeholder="service remote, zipcode of business needed">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="education" class="form-label">Education <span
                                                    style="color:red;">*</span></label>
                                            <input type="text" name="education" class="form-control" id="education"
                                                placeholder="Level Completed">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="yes_no_radio">License</label>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input type="radio" value="yes" name="license"
                                                        checked>&nbsp;&nbsp;Yes</input>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" value="no" name="license">&nbsp;&nbsp;No</input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="yes_no_radio">Counseling Certification</label>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input type="radio" value="yes" name="counseling"
                                                        checked>&nbsp;&nbsp;Yes</input>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" value="no"
                                                        name="counseling">&nbsp;&nbsp;No</input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="yes_no_radio">Expertise</label>
                                            <div class="mt-2">
                                                <input class="mt-1" type="radio" value="Accelerated
                                            Experiential Dynamic Psychotherapy (AEDP)"
                                                    name="offerings">&nbsp;&nbsp;Accelerated
                                                Experiential Dynamic Psychotherapy (AEDP)</input> <br>
                                                <input class="mt-1" type="radio" value="Accelerated
                                            Resolution Therapy (ART)" name="offerings">&nbsp;&nbsp;Accelerated
                                                Resolution Therapy (ART)</input> <br>
                                                <input class="mt-1" type="radio" value="Acceptance and
                                            Commitment Therapy (ACT)" name="offerings">&nbsp;&nbsp;Acceptance and
                                                Commitment Therapy (ACT)</input>
                                                <br>
                                                <input class="mt-1" type="radio" value="Adlerian
                                            Psychology / Psychotherapy" name="offerings">&nbsp;&nbsp;Adlerian
                                                Psychology / Psychotherapy</input> <br>
                                                <input class="mt-1" type="radio" value="Anger
                                            Management" name="offerings">&nbsp;&nbsp;Anger
                                                Management</input> <br>
                                                <input class="mt-1" type="radio" value="Animal-Assisted Psychotherapy"
                                                    name="offerings">&nbsp;&nbsp;Animal-Assisted Psychotherapy</input>
                                                <br>
                                                <input class="mt-1" type="radio" value="Applied
                                            Behavior Analysis (ABA)" name="offerings">&nbsp;&nbsp;Applied
                                                Behavior Analysis (ABA)</input> <br>
                                                <input class="mt-1" type="radio" value="Art
                                            Therapy" name="offerings">&nbsp;&nbsp;Art
                                                Therapy</input> <br>
                                                <input class="mt-1" type="radio" value="Attachment-Based Family Therapy
                                            (ABFT)" name="offerings">&nbsp;&nbsp;Attachment-Based Family Therapy
                                                (ABFT)</input> <br>
                                                <input class="mt-1" type="radio" value="Authentic
                                            Movement" name="offerings">&nbsp;&nbsp;Authentic
                                                Movement</input> <br>
                                                <input class="mt-1" type="radio" value="Autogenic
                                            Training" name="offerings">&nbsp;&nbsp;Autogenic
                                                Training</input> <br>
                                                <input class="mt-1" type="radio" value="Aversion
                                            Therapy" name="offerings">&nbsp;&nbsp;Aversion
                                                Therapy</input> <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="yes_no_radio">Offering now</label>
                                            <select class="form-select mt-2" name="Offering_now"
                                                aria-label="Default select example"
                                                onchange="displayDivDemo('dataToggle2', this)">
                                                <option selected>One to One Case Consultation</option>
                                                <option value="1">Therapist Supervision</option>
                                                <option value="2">Mentor</option>
                                                <option value="3">Training</option>
                                                <option value="4">CE Courses</option>
                                                <option value="5">Private Practice Consultation</option>
                                                <option value="6">Ethics Consultation</option>
                                                <option value="7">Referrals</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display:none;" id="dataToggle2">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="addDesc" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="addDesc" rows="3"
                                                placeholder="Add description including link to site to for tickets"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Pictures (Max 2)</label>
                                            <input type="file" name="images[]" multiple class="form-control" id="image"
                                                placeholder="" max="2" multiple>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="yes_no_radio">Events</label>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <input type="radio" value="yes" id="eventYes" name="events"
                                                        onclick="show2();">&nbsp;&nbsp;Yes</input>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="radio" id="eventNo" value="no" name="events"
                                                        onclick="show1();">&nbsp;&nbsp;No</input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display:none;" id="dataToggle">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="addDesc" class="form-label">Description</label>
                                            <textarea class="form-control" name="event_description" id="addDesc"
                                                rows="3"
                                                placeholder="Add description including link to site to for tickets"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Upload Pictures (Max 2)</label>
                                            <input type="file" name="event_image[]" multiple class="form-control"
                                                id="image" placeholder="" max="2" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="availability" class="form-label">Availability</label>
                                            <input type="text" name="availability" class="form-control"
                                                id="availability"
                                                placeholder="Days and Times(30 min increment to 1hr increment slot)">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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