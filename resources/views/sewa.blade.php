<x-layout>
    <div class="container" id="sewa-content">
        <div class="container p-5" id="container-intro-sewa">
            <div class="container" id="intro-sewa">
                <div class="row justify-content-center">
                    <div class="d-flex col-md-3 justify-content-center align-items-center text-center mb-2 p-2 rounded-3" id="textbox-sewa">
                        <h3 class="" id="heading-white">Reservasi Lapangan</h3>
                    </div>
                    <div class="col-md-7">
                    <p class="intro-white float-right">
                        1. Isi data diri anda pada formulir sewa lapangan<br>
                        2. Pilih lapangan mana yang akan anda sewa  <br>
                        3. Pilih tanggal dan waktu sewa lapangan <br>
                        4. Klik Bayar untuk melanjutkan ke proses pembayaran <br>
                    </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container p-5" id="container-form-sewa">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="inputNama">
                </div>
                <div class="col-md-6">
                    <label for="inputNomor" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control rounded-pill" id="inputNomor">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control rounded-pill" id="inputEmail">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Soekarno Hatta">
                  </div>
                <div class="col-md-6">
                    <label for="inputLapangan" class="form-label">Lapangan yang Disewa</label>
                    <select id="inputLapangan" class="form-select rounded-pill">
                      <option selected>Lapangan 1</option>
                      <option>Lapangan 2</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Tanggal Sewa</label>
                  <input type="date" class="form-control" id="inputtTanggal">
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-lg btn-primary rounded-pill float-right">BAYAR</button>
                </div>
              </form>
        </div>
    </div>
</x-layout>
