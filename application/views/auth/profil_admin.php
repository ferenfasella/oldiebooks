   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= site_url('Dashboard/') ?>">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body" >
            <h2 class="section-title" >Hi,<?= $user['nama']; ?>!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?= base_url('/template/assets/img/profil/') . $user['gambar']; ?>" class="rounded-circle profile-widget-picture">
                    
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?= $user['nama']; ?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div>Administrator</div></div>
                    
                  </div>

                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation"  enctype="multipart/form-data">
                    <div class="card-header">
                      <h4 style="color: red;">Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" value="<?= $user['email']; ?>" name="email" readonly>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" value="<?= $user['nama']; ?>" name="nama" required="">
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-12 col-12">
                        <label>Gambar</label>
                        <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-danger" type="submit">Ubah Profil</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>