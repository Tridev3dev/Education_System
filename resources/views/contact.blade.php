@extends('layout.default')
@section('content')
<!-- Bootstrap 5 Contact Form Snippet -->
  <div class="container px-5 my-5">
  <div class="row justify-content-center">
  <div class="col-lg-8">
  <div class="card border-0 rounded-3 shadow-lg">
  <div class="card-body p-4">
  <div class="text-center">
  <div class="h1 fw-light">Contact Form</div>
  <title>CONTACT</title>
<!-- <p class="mb-4 text-muted">A functional, Bootstrap 5 contact form with validation built using SB Forms. Try it out!</p> -->
</div>
<!-- * * * * * * * * * * * * * *
  / * * SB Forms Contact Form * *
  // * * * * * * * * * * * * * * *
  // This form is pre-integrated with SB Forms.
  // To make this form functional, sign up at
  // https://startbootstrap.com/solution/contact-forms
  // to get an API token!
-->
  <form id="contactForm" data-sb-form-api-token="API_TOKEN">
<!-- Name Input -->
  <div class="form-floating mb-3">
  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
  <label for="name">Name</label>
  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
</div>

<!-- Email Input -->
  <div class="form-floating mb-3">
  <input class="form-control" id="email" type="email" placeholder="Email " data-sb-validations="required,email" />
  <label for="emailAddress">Email </label>
  <div class="invalid-feedback" data-sb-feedback="email:required">Email  is required.</div>
  <div class="invalid-feedback" data-sb-feedback="email:email">Email  Email is not valid.</div>
</div>

<!-- Address Input -->
  <div class="form-floating mb-3">
  <input class="form-control" id="address" type="address" placeholder="Address " data-sb-validations="required,address" />
  <label for="addressAddress">Address </label>
  <div class="invalid-feedback" data-sb-feedback="address:required">Address  is required.</div>
  <div class="invalid-feedback" data-sb-feedback="address:address">Address Details Email is not valid.</div>
</div>

<!--Pincode Input -->
  <div class="form-floating mb-3">
  <input class="form-control" id="pin" type="pin" placeholder="Pin " data-sb-validations="required,pin" />
  <label for="Pin">Pin </label>
  <div class="invalid-feedback" data-sb-feedback="pin:required">Pincode  is required.</div>
  <div class="invalid-feedback" data-sb-feedback="pin:pin">Pincode  is not valid.</div>
</div>

<!-- Contact   Input -->
  <div class="form-floating mb-3">
  <input class="form-control" id="emailAddress" type="contact" placeholder="Contact" data-sb-validations="required,contact " />
  <label for="Contact">Contact </label>
  <div class="invalid-feedback" data-sb-feedback="Contact :required">Contact  is required.</div>
  <div class="invalid-feedback" data-sb-feedback="Contact :Contact ">Contact Details is not valid.</div>
</div>

<!-- Message Input -->
  <div class="form-floating mb-3">
  <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
  <label for="message">Message</label>
  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
</div>

<!-- Submit success message -->
  <div class="d-none" id="submitSuccessMessage">
  <div class="text-center mb-3">
  <div class="fw-bolder">Form submission successful!</div>
  <p>To activate this form, sign up at</p>
  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
</div>
</div>

<!-- Submit error message -->
  <div class="d-none" id="submitErrorMessage">
  <div class="text-center text-danger mb-3">Error sending message!</div>
</div>

<!-- Submit button -->
  <div class="d-grid">
  <button class="btn btn-primary btn-lg enabled" id="submit" type="submit">Submit</button>
</div>
</form>
</form>

<!-- End of contact form -->

</div>
</div>
</div>
</div>
</div>

<!-- CDN Link to SB Forms Scripts -->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <style type="text/css">
body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}
</style>
 <p class="float-end"><a href="#">Back to top</a></p>
@stop