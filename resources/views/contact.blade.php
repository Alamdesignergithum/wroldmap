<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Contact Us</title>

  @include ("include.header")
    <section class="contact-us-form pt-5 pb-5" style="background: url('assets/images/contact-us-bg.svg')no-repeat center bottom">
      <div class="container">
          <div class="row justify-content-lg-between align-items-center">
              <div class="col-lg-12 col-md-12 col-12 mb-4">
                  <div class="section-heading text-center">
                      <h2>Talk to Our Department Team</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
              <div class="col-lg-6 col-md-8">
                  <div class="bg-light p-4 rounded">
                      <form action="#" class="register-form">
                          <div class="row">
                              <div class="col-sm-6">
                                  <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="firstName" required="" placeholder="First name" aria-label="First name">
                                  </div>
                              </div>
                              <div class="col-sm-6 ">
                                  <label for="lastName" class="mb-1">Last name</label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="lastName" placeholder="Last name" aria-label="Last name">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" id="phone" required="" placeholder="Phone" aria-label="Phone">
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                  <div class="input-group mb-3">
                                      <input type="email" class="form-control" id="email" required="" placeholder="Email" aria-label="Email">
                                  </div>
                              </div>
                              <div class="col-12">
                                  <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                  <div class="input-group mb-3">
                                      <textarea class="form-control" id="yourMessage" required="" placeholder="How can we help you?" style="height: 120px"></textarea>
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary mt-4">Get in Touch</button>
                      </form>
                  </div>
              </div>
              <div class="col-lg-5 col-md-10">
                  <div class="contact-us-img">
                      <img src="assets/images/contact-us-img-2.svg" alt="contact us" class="img-fluid">
                  </div>
              </div>
          </div>
      </div>
  </section>

  @include ("include.footer")
