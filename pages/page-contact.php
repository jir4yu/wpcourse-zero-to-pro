<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>

<div class="contact-wrapper">
  <!-- header -->
  <section class="contact-header">
    <div class="container">
      <h1>CONTACT US</h1>
      <p>
        Hi, welcome to Starbugs.<br/> 
        What can we do for you?
      </p>
    </div>
  </section>
  
  <!-- content -->
  <section class="contact-content">
    <article class="page-content">
      <div class="container">
        <p>We love hearing from our customers, all questions, comments and feedback are always welcome. They help us to ensure that every Starbugs experience you have is the best it can be.</p>
        <h4>Customer Care</h4>
        <p>You can call us at +66 0000 0000 from 9.00 a.m. – 6.00 p.m. Monday to Sunday. Alternatively, you can send us an email to customer@coffeecoffee.co.th, and we’ll do our best to reply as quickly as possible.</p>
        <h4>Starbucks Thailand Headquarter</h4>
        <p>You can call us at +66 0808 0000 from 9.00 a.m. – 6.00 p.m. Monday to Sunday. Alternatively, you can send us an email to customer@coffee-hq.th, and we’ll do our best to reply as quickly as possible.</p>
      </div>
    </article>
  </section>

  <!-- contact form -->
  <section class="contact-form">
    <div class="container">
      <h3>Contact Form</h3>
      <p>We will get back to you as soon as possible</p>
      <form action="" class="form" id="contact_form">
        <div class="row">
          <!-- first name -->
          <div class="col-lg-4">
            <div class="form-group">
              <label for="" class="control-label">
                Your name <span>*</span>
              </label>
              <input type="text" class="form-control">
            </div>
          </div>
          <!-- email -->
          <div class="col-lg-4">
            <div class="form-group">
              <label for="" class="control-label">
                Email <span>*</span>
              </label>
              <input type="text" class="form-control">
            </div>
          </div>
          <!-- phone number -->
          <div class="col-lg-4">
            <div class="form-group">
              <label for="" class="control-label">
                Phone number <span>&nbsp;</span>
              </label>
              <input type="text" class="form-control">
            </div>
          </div>
          <!-- message -->
          <div class="col-lg-12">
            <div class="form-group">
              <label for="" class="control-label">Message <span>*</span></label>
              <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>
          <!-- button -->
          <div class="col-lg-12">
            <div class="form-group">
              <button class="btn btn-primary" type="button">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<?php get_footer(); ?>