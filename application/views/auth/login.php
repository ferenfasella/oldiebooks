<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
           <br>           <br>           <br>           <br>            <br>            <br>            <br>

            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Admin Page</span></h4>
            <p class="text-muted">This in an Admin Page, if you are an Admin. Please login in here!</p>
            <?= $this->session->flashdata('message'); ?>
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user" value="<?= set_value('password'); ?>" name="password" id="password" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group text-right">

                <button type="submit" class="btn btn-danger btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>
            </form>


            
          </div>
        </div>
        <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url() ?>/template/assets/img/unsplash/login-bgs.jpg">
          <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Have a nice day</h1>
                <h5 class="font-weight-normal text-muted-transparent">Semangat kerjanya!</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>