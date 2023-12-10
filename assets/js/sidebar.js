
document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });

    function potongTeks(elemen, kataYangDitampilkan) {
        let element = elemen;

        let teksAwal = element.textContent.split(" ").slice(0, kataYangDitampilkan).join(" ");
        let teksSisa = element.textContent.split(" ").slice(kataYangDitampilkan).join(" ");


        element.innerHTML = teksAwal + '<span style="display: inline-block; margin-left: 2px;"></span>';
        element.setAttribute("title", element.textContent);
    }

    // Dapatkan semua elemen dengan kelas "text-panjang"
    let semuaElemen = document.querySelectorAll('.text-panjang');
    console.log(semuaElemen);

    // Iterasi melalui setiap elemen dan panggil fungsi potongTeks
    semuaElemen.forEach(function(elemen) {
        potongTeks(elemen,50); // Ganti dengan jumlah kata yang diinginkan
    });

    function ubahWarna(index) {
        // Dapatkan elemen checkbox yang diubah
        let checkbox = document.getElementById('flexCheckDefault' + index);
    
        // Dapatkan seluruh baris terkait pada tabel
        let row = document.getElementById('row' + index);

        // mendapatkan link baca selengkapnya
        let linkMassage = document.getElementById('linkMassage'+index);
     
        // mendapatkan button disabled hapus
        let btnDeleteMassage = document.getElementById('btnDeleteMassage'+index);
        console.log(btnDeleteMassage);

        // Dapatkan seluruh sel (td) dalam baris tersebut
        let seluruhSel = row.getElementsByTagName('td');

    
        // Tambahkan atau hapus kelas 'bg-success' berdasarkan status checkbox
        // Tambahkan atau hapus kelas 'text-white' untuk warna teks putih pada semua sel
        if (checkbox.checked) {
            
          btnDeleteMassage.removeAttribute("disabled");
          linkMassage.style.display = 'none';
          row.classList.add('table-success');
          for (let i = 0; i < seluruhSel.length; i++) {
              seluruhSel[i].classList.add('text-white');
            }
        } else {
            btnDeleteMassage.setAttribute("disabled",null);
            linkMassage.style.display = 'block';
          row.classList.remove('table-success');
          for (let i = 0; i < seluruhSel.length; i++) {
            seluruhSel[i].classList.remove('text-white');
          }
        }
      }

      function myFunction() {
        document.getElementById("myLink").disabled = true;
      }


      function toggleLinkVisibility() {
        // Dapatkan semua elemen dengan kelas "text-panjang"
        let paragraphs = document.querySelectorAll('.text-panjang');
        let links = document.querySelectorAll('.linkMassage');
        console.log(paragraphs);
        for (let i = 0; i < paragraphs.length; i++) {
            // Dapatkan teks dari setiap elemen paragraf
            let teks = paragraphs[i].textContent || paragraphs[i].innerText;

            // Hitung jumlah kata dalam teks
            let jumlahKata = teks.split(/\s+/).length;

            // Tentukan link yang sesuai
            let linkMassage = links[i];

            // Sembunyikan atau tampilkan link berdasarkan jumlah kata
            linkMassage.style.display = (jumlahKata >= 15) ? 'inline' : 'none';
        }
    }

    // Panggil fungsi toggleLinkVisibility saat halaman dimuat
    document.addEventListener("DOMContentLoaded", toggleLinkVisibility);