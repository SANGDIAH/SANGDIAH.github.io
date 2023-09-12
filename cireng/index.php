<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <title>MangOboy</title>
</head>

<body>


  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>Go </span>Zi<span>RE</span>Ng</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Product</a></li>
            <li><a href="#projects" data-after="Projects">Info</a></li>
            <li><a href="#pesan" data-after="Projects">Pesan</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>WELCOME <span></span></h1>
        <h1>TO<span></span></h1>
        <h1>GO ZIRENG<span></span></h1>
        <a href="#projects" type="button" class="cta">PESAN SEKARANG</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->


  <!-- Product -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Prod<span>u</span>ct</h1>
        <p>Nikmati Kelezatan Pedasnya, dan Pedasnya bikin ngiler, bikin nagih!</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="img/9.png" /></div>
          <h2></h2>
          <p>Varian cireng matang</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/10.png" /></div>
          <h2></h2>
          <p>Varian cireng mentah</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/12.png"></div>
          <h2></h2>
          <p>bisa request tingkat kepedasan yang sesuai,Pedasnya dari cabe pilihan</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="./img/13.png" /></div>
          <h2></h2>
          <p>Include cod didaerah kampus maupun Sindang</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End My Motivasi Section -->


  <!-- Cireng ku-->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Go-<span>Zireng</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Pedasnya Nampol</h1>
            <p>Membuat lidah semakin bergoyang-goyang</p>
          </div>
          <div class="project-img">
            <img src="./img/2.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Higenis Dalam Membuat</h1>
            <p>Diolah dengan kebersihan yang dijaga dengan sangat baik</p>
          </div>
          <div class="project-img">
            <img src="./img/6.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Bumbu yang Meresap</h1>
            <p>Dibuat dengan rempah-rempah pilihan</p>
          </div>
          <div class="project-img">
            <img src="./img/8.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Nikmat nya bikin nagih</h1>
            <p>Dengan Resep turun temurun menjadikan citra rasa yang lebih original</p>
          </div>
          <div class="project-img">
            <img src="./img/7.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Lembut dan Tidak Keras</h1>
            <p>Dengan teknik memasak yang khusus yang ami lakukan</p>
          </div>
          <div class="project-img">
            <img src="./img/5.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <!-- End Projects Section -->


  <!-- form-->
  <br><br><br>
  <section id="pesan">
    <h1 class="section-title" style="margin: 30px;">PE<span>S</span>AN</h1>
    <div class="wrapper">
      <h2 class="pesanan">CONTACT US</h2>

      <form action="" method="post">
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text">
        </div>
        <div class="form-group">
          <label for="">Tujuan Pengiriman</label>
          <input type="text">
        </div>
        <div class="form-group">
          <label for="">Jumlah Pesanan</label>
          <input type="number" name="age" min="1" max="99">
        </div>
        <div class="form-group">
          <input type="radio" name="payment" id="card" checked="checked" />
          <label class="aci" for="card">Mentah</label>
          <input type="radio" name="payment" id="cash" />
          <label class="aci" for="cash">Mateng</label>
        </div>
        <div class="form-group">
          <label for="">Catatan (notes)</label>
          <textarea name="" id="" rows="5" placeholder="Type your message here..."></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="submit">Kirim</button>
        </div>
      </form>
    </div>
  </section>
  <!-- end form -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
        <br><br><br><br><br>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 83874604111 (WA)</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>go-zireng123@gmail.com</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></div>
          <div class="contact-info">
            <h1>Instagram</h1>
            <h2>@go.zi_reng</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>GO</span> <span></span>ZIRENG</h1>
      </div>
      <h2>PESAN SEKARANG</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/50/000000/whatsapp.png" /></a>
        </div>
        <!-- <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div> -->
      </div>
      <p>www.Go-ZIRENG.COM</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>

  <script src="p03jquery/js/jquery-3.6.0.min.js"></script>
  <script>
    $('.cell').on('click', function() {
      alert('Kamu sedang mengklik nama ' + $(this).text())
      var changeCell = prompt('Apakah kamu ingin mengubah nama ini?')
      $(this).text(changeCell)
    });

    $('#aksi-2').on('click', function() {
      if (confirm('Apakah kamu yakin ingin menghapus ini?')) {
        $('#baris-2').remove()
      }
    })
    $('#aksi-3').on('click', function() {
      if (confirm('Apakah kamu yakin ingin menghapus ini?')) {
        $('#baris-3').remove()
      }
    })
    $('#aksi-4').on('click', function() {
      if (confirm('Apakah kamu yakin ingin menghapus ini?')) {
        $('#baris-4').remove()
      }
    })
    $('#aksi-5').on('click', function() {
      if (confirm('Apakah kamu yakin ingin menghapus ini?')) {
        $('#baris-5').remove()
      }
    })
    $('#aksi-1').on('click', function() {
      if (confirm('Apakah kamu yakin ingin menghapus ini?')) {
        $('#baris-1').remove()
      }
    })
  </script>
</body>

</html>