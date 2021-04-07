let slide = document.querySelector('#hide');
let nav = document.querySelector('#nav');
var state=0;

function showSlide() {
    nav.style="display: block";
    slide.innerHTML="&#x269F;";
    slide.style="color: white";
}

function hideSLide() {
    nav.style="display: none";
    slide.innerHTML="&#x2630;";
    slide.style="color: black";
}

slide.addEventListener('click',function(){
    if(state==0){
        showSlide();
        state=1;
    } else {
        hideSLide();
        state=0;
    }
})

var lop = document.querySelector('#submit');
var nama = document.querySelector('#nama');
var no = document.querySelector('#nohp');
var alam = document.querySelector('#alamat');
lop.addEventListener('click', function() {
    if(nama.value == "") {
        alert("Harap isi Nama Anda");
    } else if (no.value == "") {
        alert("Harap isi Nomer Telepon Anda");
    } else if (alam.value == "") {
        alert("Harap isi Alamat Tinggal Anda");
    } else {
        alert("Pendaftaran akan segera diproses, Terimakasih");
    }
})

let pr1 = document.querySelector("#doctor");
var dummy1 = 0;
pr1.addEventListener('click', function() {
    if(dummy1==0) {
        pr1.style="padding: 10px;";
        pr1.children[0].style="display: none";
        pr1.children[1].innerHTML="Tenaga Kesehatan<br>yang memiliki<br>risiko tinggi<br>untuk terinfeksi<br>dan menularkan<br>COVID-19, seperti<br>Dokter, Perawat<br>dan Sukarelawan<br>yang turut<br>membantu dalam<br>memerangi COVID-19";
        dummy1=1;
    } else {
        pr1.style="padding: 20px;";
        pr1.children[0].style="display: block";
        pr1.children[1].innerHTML="Tenaga Kesehatan";
        dummy1=0;
    }
})

let pr2 = document.querySelector("#petugas");
var dummy2 = 0;
pr2.addEventListener('click', function() {
    if(dummy2==0) {
        pr2.style="padding: 10px;";
        pr2.children[0].style="display: none";
        pr2.children[1].innerHTML="Orang dengan<br>pekerjaan yang<br>memiliki risiko<br>tinggi tertular<br>dan menularkan<br>COVID-19 karena<br>tidak dapat<br>melakukan jaga<br>jarak secara<br>efektif, seperti<br>anggota TNI/Polri,<br>aparat hukum,<br>dan petugas<br>pelayanan publik";
        dummy2=1;
    } else {
        pr2.style="padding: 20px;";
        pr2.children[0].style="display: block";
        pr2.children[1].innerHTML="Petugas Pelayanan <br>Public";
        dummy2=0;
    }
})

let pr3 = document.querySelector("#lansia");
var dummy3 = 0;
pr3.addEventListener('click', function() {
    if(dummy3==0) {
        pr3.style="padding: 10px;";
        pr3.children[0].style="display: none";
        pr3.children[1].innerHTML="Orang yang<br>memiliki penyakit<br>penyerta dengan<br>risiko kematian<br>tinggi bila<br>terkena COVID-19,<br>termasuk lansia";
        dummy3=1;
    } else {
        pr3.style="padding: 20px;";
        pr3.children[0].style="display: block";
        pr3.children[1].innerHTML="Lansia";
        dummy3=0;
    }
})