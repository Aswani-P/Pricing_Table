
<!-- <form action="index.php" method="post"> -->
    <!-- <div class="container-sm"  style="background-image: linear-gradient(#080A52, #63BFD1);height:600px;padding:100px">
            <div class="form-floating mb-3" >
                <input type="text" name="fname" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" name="lname"id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3" >
                <input type="text" class="form-control" name="number"id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Contact Number</label>
            </div>
            <div class="form-floating mb-3" >
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password"placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        
        <a class="btn btn-primary" href="index.php"  role="button" style="margin-top:20px">Login</a>
    </div>
</form> -->

<div class="container-sm"  style="background-image: linear-gradient(#080A52, #63BFD1);height:600px;padding:100px">
    <form class="row g-3 needs-validation" action="index.php" method="post"novalidate>
        <div class="col-md-4">
            <label for="fname" class="form-label" style="color:white">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="lname" class="form-label"style="color:white">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname"value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label"style="color:white">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="email"name="email" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="password" class="form-label"style="color:white">Password</label>
            <input type="password" class="form-control" id="password" name="password"value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label"style="color:white">City</label>
            <input type="text" class="form-control" id="city"name="city" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="district" class="form-label"style="color:white">District</label>
            <select class="form-select" id="district"name="district" required>
            <option selected disabled value="">Choose...</option>
            <option>Kasargod</option>
            <option>Kannur</option>
            <option>Wayanad</option>
            <option>Kozhikode</option>
            <option>Malappuram</option>
            <option>Thrissure</option>
            <option>Eranakulam</option>
            <option>Palakkad</option>
            <option>Alappuzha</option>
            <option>Kottayam</option>
            <option>Pathanamthitta</option>
            <option>Kollam</option>
            <option>Thiruvananthapuram</option>
            <option>Idukki</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-3">
            <label for="zip" class="form-label"style="color:white">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck"style="color:white">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Log In</button>
        </div>
        </form>
        </div>
        <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
        </script>