/**
 * 
 * calculator jasa desain arsitek
 * 
 */
function panjangDesain(){ 
    var panjang = document.getElementById('panjangDesain');
    return panjang.value;
} // menangkap value input panjang desain

function lebarDesain() {
    var lebar = document.getElementById('lebarDesain');
    return lebar.value;
} //menangkap value input lebar desain

var pilihPaketDesain = new Array();
pilihPaketDesain["none"] = 0; //menangkap option input dari form select pilih paket dan mengisinya menggunakan harga paket
pilihPaketDesain["Paket Silver"] = 40000; //menangkap option input dari form select pilih paket dan mengisinya menggunakan harga paket
pilihPaketDesain["Paket Gold"] = 50000; //menangkap option input dari form select pilih paket dan mengisinya menggunakan harga paket
pilihPaketDesain["Paket Diamond"] = 60000; //menangkap option input dari form select pilih paket dan mengisinya menggunakan harga paket
pilihPaketDesain["Paket Platinum"] = 80000; //menangkap option input dari form select pilih paket dan mengisinya menggunakan harga paket

function ambilPaketDesain() {
    var hargaPaket = 0;
    var theForm = document.forms["formJasaDesain"]; //menangkap form dengan id formJasaDesain
    var selectedFilling = theForm.elements["pilihPaketDesain"]; //menangkap value form element dengan id pilihPaketDesain <select></select>
    hargaPaket = pilihPaketDesain[selectedFilling.value]; //mengisi hargaPaket dengan apa yang dipilih oleh user
    return hargaPaket; //mengembalikan nilai hargapaket yang dpilih
}

function lantaiDesain() {
    var lantai = document.getElementById('lantaiDesain');
    return lantai.value;
} //menangkap value lantai desain

function calculateTotalDesain() {
    var hargaDesain = panjangDesain() * lebarDesain() * ambilPaketDesain() * lantaiDesain(); //this is the aritmathic

    var divobj = document.getElementById('totalHargaDesain');
    divobj.style.display = 'block';
    divobj.innerHTML = "Total Biaya " + hargaDesain.toLocaleString('en-US', {
        style: 'currency',
        currency: 'IDR', //change it into Indonesian Currency
    });
} //function to show the result

function hideTotalDesain() {
    var divobj = document.getElementById('totalHargaDesain');
    divobj.style.display = 'none';
} //menyembunyikan result ketika tidak ada input dan menampilkannya ketika ada inputan yang masuk

/**
 * 
 * calculator jasa bangun
 * 
 */
// calculate field form jasa bangun desainmurah.id

    // tangkan value panjang rumah
    function panjangRumah() {
        var panjang = document.getElementById('panjang');
        return panjang.value;
    }

    // tangkap value lebar rumah
    function lebarRumah() {
        var lebar = document.getElementById('lebar');
        return lebar.value;
    }

    // tangkap value dropdown
    var pilihPaket = new Array();
    pilihPaket["none"]=0;
    pilihPaket["basic"]=3500000;
    pilihPaket["standard"]=3750000;
    pilihPaket["premium"]=4000000;

    function ambilPaketBangun()
    {
        var hargaPaket=0;
        var theForm = document.forms["formJasaBangun"];
        var selectedFilling = theForm.elements["pilihPaket"];
        hargaPaket = pilihPaket[selectedFilling.value];
        return hargaPaket;
    }

    // tankap value jumlah lantai
    function jumlahLantai() { 
        var lantai = document.getElementById('lantai');
        return lantai.value;
    }


            
    function calculateTotal()
    {
        var cakePrice = panjangRumah() * lebarRumah() * ambilPaketBangun() * jumlahLantai();
        
        //display the result
        var divobj = document.getElementById('totalPrice');
        divobj.style.display='block';
        divobj.innerHTML = "Total Biaya "+cakePrice.toLocaleString('en-US',{
            style: 'currency',
            currency: 'IDR',
        });
    }

    function hideTotal()
    {
        var divobj = document.getElementById('totalPrice');
        divobj.style.display='none';
    }