
<br><br><br><br>
   <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

         <div class="card">
          <h5 class="card-header">Form Paket Kecil</h5>
          <div class="card-body">
            <div class="row">
             
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                  </div>
       
                    <form method="post" action="<?= base_url('paket/paketkecil'); ?>">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="id">ID Pelangaan</label>
                          <input type="text" class="form-control" id="id" value="<?= $users['id']; ?>" name="id" required readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control" id="nama" value="<?= $users['nama']; ?>" required>
                          <input type="hidden" class="form-control" id="id_paket" name="id_paket" value="001" required>
                          <input type="hidden" class="form-control" id="id_jenis_paket" name="id_jenis_paket" value="KCL" required>
                          <input type="hidden" class="form-control" id="kode_transaksi" name="kode_transaksi" value="<?= 'P-00'. $jumlah ?>" required>
                          <input type="hidden" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="<?= $tanggal ?>" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="jenis_paket">Jenis Paket</label>
                          <input type="text" class="form-control" id="jenis_paket" name="jenis_paket" value="Kecil" required readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="jumlah_tukang">Jumlah Tukang</label>
                          <select class="custom-select" id="jumlah_tukang" name="jumlah_tukang" required>
                            <option selected value="1">1</option>
                            <option selected value="2">2</option>
                            <option selected value="3">3</option>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="harga">Harga</label>
                          <input type="text" class="form-control" id="harga" name="harga" value="<?= $harga ?>" required>
                        </div>
                       <div class="col-md-12 mb-3">
                          <label for="permintaan">Permintaan</label>
                          <input type="text" class="form-control" id="permintaan" name="permintaan" required>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit" id="submit" name="submit">Pesan</button>
                    </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>