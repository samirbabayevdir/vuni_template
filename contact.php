<?php
include('header.php');
?>
<section class="banner__wrapper">
  <div class="banner page banner__home">
    <div class="banner__bg" style="background-image: url(/assets/images/banniere.jpg);"></div>
    <div class="container">
      <div class="row">
        <div class="banner__inner">
          <div class="banner__title">VEKTOR UNİFORMA</div>
          <h1 class="banner__title-h1">Bizimlə Əlaqə</h1>
        </div>
      </div>
    </div>
    <div class="banner__skewed-bar"></div>
  </div>
</section>
<main class="main contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="main__about-left">
          <h2>Bİzə Yazın!</h2>
          <div class="cotnact__form">
            <form action="">
              <div class="two">
                <div class="input__inner">Ad<input type="text" placeholder=""></div>
                <div class="input__inner">Soyad<input type="text" placeholder=""></div>
              </div>
              <div class="two">
                <div class="input__inner">Email<input type="email" placeholder="email@email.com"></div>
                <div class="input__inner">Telefon<input type="phone" placeholder="088 888 88 88"></div>
              </div>
              <div class="input__inner">
                Mesaj
                <textarea name="" id="" cols="30" rows="10" placeholder="Təkliflər, Məhsullar, Sifarişlər, Əlavə Məlumat..."></textarea>
              </div>
              <div class="button__inner"><button class="btn__vk">Göndər</button></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="main__about-right">
          <h2>Əlaqə Məlumatı</h2>
          <ul>
            <li>Email: info@vektoruniforma.com</li>
            <li>Telefon: +994 00 000 00 00</li>
            <li>Ünvan: Sədərək Ticarət Mərkəzi, Təsərrüfat b, sıra 2, mağaza 12</li>
          </ul>
          <img src="/assets/images/vektor-vektors.svg" alt="VEKTOR UNIFORMA">
        </div>
      </div>
    </div>
  </div>
</main>
<section class="map">
  <div class="" id="map">
    <script>
      // position we will use later
      var lat = 40.329146;
      var lon = 49.776107;
      // initialize map
      map = L.map('map', {
        scrollWheelZoom: false
      }).setView([lat, lon], 13);

      var myIcon = L.icon({
        iconUrl: '/assets/images/vektor_icon.svg',
        // iconSize: [38, 95],
        iconAnchor: [40, 40],
        // popupAnchor: [-3, -76],
        // shadowUrl: 'my-icon-shadow.png',
        // shadowSize: [68, 95],
        // shadowAnchor: [22, 94]
      });

      // set map tiles source
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18,
      }).addTo(map);
      // add marker to the map
      marker = L.marker([lat, lon], {
        icon: myIcon
      }).addTo(map);
      // add popup to the marker
      marker.bindPopup("<b>VEKTOR UNIFORMA.</b><br/>Sədərək T.M, Təsərrüfat b.<br />Sıra 2, Mağaza 12").openPopup();
    </script>
  </div>
</section>
<?php
include('footer.php');
?>