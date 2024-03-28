<!-- calculator hitung jasa bangun -->
<section class="tb-150-color" data-aos="fade-up" data-aos-delay="100">
    <div class="container tb-70">
        <form action="#" method="get" id="formJasaBangun" onsubmit="return false">
            <div class="cont_order">
                <legend class="mb-3 text-uppercase fs-2 fw-bold text-center">hitung biaya jasa bangun</legend>
                <p class="mb-3 text-center">Fitur dibawah ini memudahkan untuk menghitung biaya jasa bangun rumah</p>

                <!-- panjang rumah -->
                <label for="panjang" class="form-label mt-3">Panjang(m)</label>
                <input type="number" class="form-control" id="panjang" onchange="calculateTotal()" required>

                <!-- lebar rumah -->
                <label for="lebar" class="form-label mt-3">Lebar(m)</label>
                <input type="number" class="form-control" id="lebar" onchange="calculateTotal()" required>

                <!-- pilih paket -->
                <label for="pilihPaket" class="form-label mt-3">Pilih Paket </label>
                <select name="pilihPaket" id="pilihPaket" class="form-select" onchange="calculateTotal()" required>
                    <option value="none">Pilih</option>
                    <option value="basic">Paket Basic (3,5 jt)</option>
                    <option value="standard">Paket Standard (3,75 jt)</option>
                    <option value="premium">Paket Premium (4 jt)</option>
                </select>

                <!-- jumlah lantai -->
                <label for="lantai" class="form-label mt-3">Jumlah Lantai</label>
                <input type="number" class="form-control" id="lantai" onchange="calculateTotal()" required>

                <!-- total harga -->
                <div class="bg-warning mt-3" id="totalPrice"></div>
            </div>
        </form>
    </div>
</section>