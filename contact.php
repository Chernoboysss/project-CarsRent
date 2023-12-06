<?php
include 'header.php';
?>
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

                <h3>Contact</h3>
            </nav>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 mt-3 d-flex align-items-stretch">
                <div class="contact-box w-100 d-flex flex-column row-gap-3">
                    <div class="row" id="contact-item">
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <i class='bx bx-map' id="contact-icon"></i>
                        </div>
                        <div class="col-10">
                            <h6>Location : </h6>
                            <small>Jl.Pagelaran Bogor, Ciomas 16610 Indonesia</small>
                        </div>
                    </div>
                    <div class="row" id="contact-item">
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <i class='bx bx-envelope' id="contact-icon"></i>
                        </div>
                        <div class="col-10">
                            <h6>Email :</h6>
                            <small>helpdesk@CarsRent.com</small>
                        </div>
                    </div>
                    <div class="row" id="contact-item">
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <i class='bx bx-phone' id="contact-icon"></i>
                        </div>
                        <div class="col-10">
                            <h6>Phone : </h6>
                            <small>+62 5984 6716 635</small>
                        </div>
                    </div>
                    <div class="row flex-grow-1" id="contact-item">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.109683117262!2d106.75286772698799!3d-6.612412423491212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5724cf53d59%3A0xd61ec15819a57035!2sPagelaran%2C%20Kec.%20Ciomas%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1685937694528!5m2!1sid!2sid"
                            id="map"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 mt-3 d-flex align-items-stretch">
                <div class="contact-box w-100">
                    <div class="form">
                        <div class="row row-gap-3">
                            <div class="col-6">
                                <label class="form-label">Your Name :</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Your Email :</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Subject :</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message :</label>
                                <textarea rows="5" class="form-control"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="form-control" id="form-submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>