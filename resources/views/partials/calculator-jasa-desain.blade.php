<!-- calculator hitung jasa desain arsitek -->
<section class="tb-150-color" data-aos="fade-up" data-aos-delay="100">
    <div class="container tb-70">
        <form action="#" method="get" id="formJasaDesain" onsubmit="return false">
            <div class="cont_order">
                <legend class="mb-3 text-uppercase fs-2 fw-bold text-center">hitung biaya jasa desain arsitek</legend>
                <p class="mb-3 text-center">Fitur dibawah ini memudahkan untuk menghitung biaya jasa desain arsitek</p>

                <!-- panjang rumah -->
                <label for="panjangDesain" class="form-label mt-3">Panjang(m)</label>
                <input type="number" class="form-control" id="panjangDesain" onchange="calculateTotalDesain()" required>

                <!-- lebar rumah -->
                <label for="lebarDesain" class="form-label mt-3">Lebar(m)</label>
                <input type="number" class="form-control" id="lebarDesain" onchange="calculateTotalDesain()" required>

                <!-- pilih paket -->
                <label for="pilihPaketDesain" class="form-label mt-3">Pilih Paket Desain</label>
                <select name="pilihPaketDesain" id="pilihPaketDesain" class="form-select" onchange="calculateTotalDesain()" required>
                    <option value="none">Pilih</option>
                    <option value="Paket Silver">Paket Silver (40rb/m<sup>2</sup>)</option>
                    <option value="Paket Gold">Paket Gold (50rb/m<sup>2</sup>)</option>
                    <option value="Paket Diamond">Paket Diamond (60rb/m<sup>2</sup>)</option>
                    <option value="Paket Platinum">Paket Platinum (80rb/m<sup>2</sup>)</option>
                </select>

                <!-- jumlah lantai -->
                <label for="lantaiDesain" class="form-label mt-3">Jumlah Lantai</label>
                <input type="number" class="form-control" id="lantaiDesain" onchange="calculateTotalDesain()" required>

                <!-- total harga -->
                <div class="bg-warning mt-3" id="totalHargaDesain"></div>
            </div>
        </form>
    </div>
</section>