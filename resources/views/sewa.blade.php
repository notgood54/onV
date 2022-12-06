<x-layout>
    <title>{{$title}}</title>
    <div class="container" id="sewa-content">
        <div class="container p-5" id="container-intro-sewa">
            <div class="container" id="intro-sewa">
                <div class="row justify-content-center">
                    <div class="d-flex col-md-3 justify-content-center align-items-center text-center mb-2 p-2 rounded-3" id="textbox-sewa">
                        <h3 class="" id="heading-white">Reservasi Lapangan</h3>
                    </div>
                    <div class="col-md-7">
                    <p class="intro-white float-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend felis eros, id lacinia dolor hendrerit a. Nullam elementum est auctor purus bibendum pharetra. Phasellus in metus ultrices, condimentum dui ut, feugiat nisl. Nunc nec fringilla tortor. Vivamus sit amet pulvinar ligula.
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
                <div class="col-md-6">
                    <label for="inputLapangan" class="form-label">Lapangan yang Disewa</label>
                    <select id="inputLapangan" class="form-select rounded-pill">
                      <option selected>Lapangan 1</option>
                      <option>Lapangan 2</option>
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
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
