<?php
require('../../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('../partials/head.php'); ?>
<body>
    <div class="bg"></div>
    <?php include('../partials/header.php'); ?>
    <main class="prefContainer">
        <section class="prefBanner">
            <div class="bannerMsg">
                <h2>HELP US DEFINE YOUR EXPERIENCE</h2>
                <h4>PERSONALIZE AND PLAN YOUR LIVE2K EXPERIENCE BY TELLING US YOUR FAVOURITE MUSIC GENRE.</h4>
            </div>
            <div class="genreBanner">
                <img src="<?php echo get_public_url('/images/genre-banner-img.png')?>"  alt="genre_banner">
            </div>
        </section>
        <section class="prefSelect">
            <div class="subHeading">
                <h4>select your preferred music genre</h4>
            </div>
            <div id="genreBtn">
                    <button class="gBtn" onclick="tgl(event)">Hip Hop</button>
                    <button class="gBtn" onclick="tgl(event)">Rock</button>
                    <button class="gBtn" onclick="tgl(event)">Pop</button>
                    <button class="gBtn" onclick="tgl(event)">Dance</button>
                    <button class="gBtn" onclick="tgl(event)">RNB</button>
            </div>
            <div class="genreSub">
                <button id="subBtn">Submit</button>
            </div>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>
<script>
//     var list = document.getElementById("genreBtn");

//     var btns = list.getElementsByClassName("gBtn");

//     for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");

//     current[0].className = current[0].className.replace("active", "");
//     this.className += " active";
//     });
// }

var count = 0;

function tgl(event) {
  const el = event.target;

  if(el.classList.contains('active')){
    el.removeAttribute('class', 'active');
    count--;
    // count = count - 1
  }else{
    el.setAttribute('class', 'active');
    count++;
    // count = count + 1
  }

//   console.log(count);

  if(count == 0){
    document.getElementById('subBtn').classList.remove('rdy');
  }else{
    document.getElementById('subBtn').classList.add('rdy');
  }
}

 
</script>
</html>