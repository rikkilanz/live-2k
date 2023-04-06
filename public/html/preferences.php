<?php
require('../../app/init.php');
// Check session
$session->is_logged_in();

//current seesion user id stored in a variable
$user_id = ($session->user_id);
// Put selected genre to user preferred genre_id

// once submit is hit, we want to place selected value by user to genre id

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $genre_id = $_POST['checkbox'];
    $user = new User();
    $user->set_genre($genre_id[0], $user_id);
    redirect('html/profile.php');
}
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
            <form action="<?php echo get_public_url('html/preferences.php') ?>" method="POST">
              <div id="genreBtn">
                  <label onclick="tgl(event)">
                    <input type="checkbox" name="checkbox[]" value="1" ><span>POP</span>
                  </label>
                  <label onclick="tgl(event)">
                    <input type="checkbox" name="checkbox[]" value="2"><span>HIP HOP</span>
                  </label>
                  <label onclick="tgl(event)">
                    <input type="checkbox" name="checkbox[]" value="3"><span>ROCK</span>
                  </label>
                  <label onclick="tgl(event)">
                    <input type="checkbox" name="checkbox[]" value="4"><span>DANCE</span>
                  </label>
                  <label onclick="tgl(event)">
                    <input type="checkbox" name="checkbox[]" value="5"><span>RNB</span>
                  </label>
              </div>
              <div class="genreSub">
                  <button type="submit" id="subBtn">Submit</button>
              </div>
            </form>
        </section>

    </main>
    <?php include('../partials/footer.php'); ?>
</body>
<script>

var count = 0;

function tgl(event) {
  const el = event.target;

  if(el.classList.contains('active')){
    el.removeAttribute('class', 'active');
    count--;
  }else{
    el.setAttribute('class', 'active');
    count++;
  }

  if(count == 0){
    document.getElementById('subBtn').classList.remove('rdy');
  }else{
    document.getElementById('subBtn').classList.add('rdy');
  }
}

 
</script>
</html>