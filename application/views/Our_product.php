    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php $this->load->view('templates/navbar'); ?>

    <!-- Page Content -->


    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>sixteen products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="products">
      <div class="container">
        <?php $this->load->view('our_product/mouse') ; ?>
        <?php $this->load->view('our_product/mousepad') ; ?>
        <?php $this->load->view('our_product/keyboard') ; ?>
        <?php $this->load->view('our_product/headset') ; ?>
        <?php $this->load->view('our_product/kursi') ; ?>
      </div>
    </div>
    <div class="container-fluid bg-danger">
      <div class="row">

      </div>
    </div>
    <footer>
      <div class="container my-5">
        <div class="row">
          <div class="col-md-12">            
              <b>
                <p>Made &copy; 2023 AAW STORE. </p>
              </b>    
          </div>
        </div>
      </div>
    </footer>