@extends('layouts.pagelayout')
@section('page_content')
<div class="container">
<!--Section: Contact v.2-->
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">
            @if(session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form">
                    @csrf
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" required="name">
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Your email</label>
                                <input type="text" id="email" name="email" class="form-control" required="email">
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required="subject">
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <!--Grid row-->
                    <div class="row">
                       <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-md-left">
                        <button class="btn btn-success" id="submit">Submit</button>
                    </div>
                    <!--Grid row-->
                </form>
            </div>
        </div>
    </section>
   
    <!--Section: Contact v.2-->
 </div> 
@endsection