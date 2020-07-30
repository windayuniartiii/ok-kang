  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="600px" src="<?= base_url('assets/img/c1.jpg'); ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="600px" fill="#777"/></img>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Mengapa Memilih OKE+KANG?</h1>
            <p>OKE+KANG mempermudah pemilik properti dalam mengelola, mambangun, dan memperbaiki properti yang dimiliki dengan fitur yang sederhana dan kepastian harga yang terjangkau</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="600px" src="<?= base_url('assets/img/c2.jpg'); ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="600px" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Apa saja fitur yang disediakan?</h1>
             <p>Pengguna dapat memilih jenis paket sesuai kebutuhan proyek anda selanjutnya
             pengguna dapat mengatur harga yang dikeluarkan dengan fitur penentuan waktu penggunaan jasa disewakan. </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="600px" src="<?= base_url('assets/img/c3.jpg'); ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="600px" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
           <h1>Jika anda berminat</h1>
              <p>Mulai proyek anda dan berkomitmen dengan kami dan kami akan memberikan jaminan proyek anda selesai</p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="<?= base_url('assets/img/kecil.png')?>"  alt="Generic placeholder image" width="140" height="140"/>
        <h2>Paket Kecil</h2>
          <p>Paket kecil memberikan layanan kepada pengguna untuk memperbaiki atau instalasi suatu bagian bangunan seperti perbaikan AC atau instalasi TV.</p>
          <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View Details &raquo;</button></p>
          <div id="myModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Paket Kecil</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <p>Harga yang ditentukan untuk pemesanan Paket Kecil adalah : Rp.200.000</p>
              <p>Contoh permintaan dengan kategori Paket Kecil adalah seperti Pemasangan Ac, perbaikan jendela dll.</p>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="<?= base_url('paket/paketkecil')?>">Pesan</a>
          </div>
          </div>
        </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="<?= base_url('assets/img/sedang.png')?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Paket Sedang</h2>
          <p> Paket sedang akan memberikan layanan kepada pengguna untuk membangun atau memperbarui beberapa bagian dari bangunan.</p>
          <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">View Details &raquo;</button></p>
          <div id="myModal2" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Paket Sedang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <p>Harga yang ditentukan untuk pemesanan Paket Sedang adalah : Rp.600.000</p>
              <p>Contoh permintaan dengan kategori Paket Kecil adalah seperti Memperbarui dekorasi ruangan, menambah ruangan baru dari bangunan  dll.</p>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="<?= base_url('paket/paketsedang')?>">Pesan</a>
          </div>
          </div>
        </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <br>
         <img class="img-circle" src="<?= base_url('assets/img/besar.png')?>" alt="Generic placeholder image" width="140" height="140">
          <h2>Paket Besar</h2>
          <p>Paket Besar memberikan layanan kepada pengguna untuk membangun atau merenovasi keseluruhan bangunan.</p>
          <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">View Details &raquo;</button></p>
          <div id="myModal3" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Paket Besar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <p>Harga yang ditentukan untuk pemesanan Paket Besar adalah : Rp.1.000.000</p>
              <p>Contoh permintaan dengan kategori Paket Kecil adalah seperti Bangun ruko, Dekorasi rumah dll.</p>
              </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="<?= base_url('paket/paketbesar')?>">Pesan</a>
          </div>
          </div>
        </div>
        </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2>Mulai proyek Anda</h2>
        <p class="lead"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
        </svg> Pilih Paket</p>
        <p>Pilih paket sesuai kebutuhan anda diantara 3 paket yang kami sediakan yaitu paket kecil, paket sedang, dan paket besar.</p>
         <p class="lead"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
        </svg> Buat pesanan anda</p>
        <p>Isi data pesanan untuk jumlah tukang, dan permintaan untuk penyediaan jasa sesuai kebutuhan.</p>
         <p class="lead"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
        </svg> Pembayaran</p>
        <p>Selesaikan pembayaran sesuai penawaran harga yang disediakan</p>
         <p class="lead"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
        </svg> Mulai pekerjaan</p>
        <p>Proyek dimulai dan tukang akan bekerja sesuai permintaan pelanggan</p>
         <p class="lead"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
        </svg> Masa Retensi</p>
        <p>Oke+Kang berkomitmen untuk memberikan jaminan dan garansi proyek Anda selesai.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?= base_url('assets/img/logo.png'); ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Kritik Dan saran.</h2>
        <p class="lead">Jika anda memiliki kritik dan saran, tolong isi form disamping ini.<br>
        Dengan mengisi form tersebut, anda ikut berkontirbusi dalam pengembangan aplikasi.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>