<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>NuhcanATAR || Resim Yükleme</title>

  

      <link rel="stylesheet" href="css/profile_creation_page.css">

      <script src=”https://code.jquery.com/jquery-3.4.1.min.js“></script>

      <!--
      fontawesom
      -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/brands.min.css" integrity="sha512-AMDXrE+qaoUHsd0DXQJr5dL4m5xmpkGLxXZQik2TvR2VCVKT/XRPQ4e/LTnwl84mCv+eFm92UG6ErWDtGM/Q5Q==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" integrity="sha512-8jdwayz5n8F2cnW26l9vpV6+yGOcRAqz6HTu+DQ3FtVIAts2gTdlFZOGpYhvBMXkWEgxPN3Y22UWyZXuDowNLA==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/regular.min.css" integrity="sha512-qgtcTTDJDk6Fs9eNeN1tnuQwYjhnrJ8wdTVxJpUTkeafKKP6vprqRx5Sj/rB7Q57hoYDbZdtHR4krNZ/11zONg==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.min.css" integrity="sha512-QN7X/bUbbeel9bbq6JVNJXk1Zowt+n+QPN+DjhEmTa4TdL1YPCsCey5JrvfRW8xp28LDYgGG/waNVdrhwMQmVQ==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/svg-with-js.min.css" integrity="sha512-gX1L9ovb6aHWz/bJYE364vKdGBDOeZLMt168kVRpRdo2I2TpveBJpbDzHMZQWy8liTTG7Qm9Onl1Ji92Eo3x7Q==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/v4-shims.min.css" integrity="sha512-njWvXjJPMYfvYHb2DAnEL0MS5KEmoIeZVdpK7tpxiApoL3ZoUzHSvkoSFrbASdTuIHnEVG+Ko+ES/DXKygBH4g==" crossorigin="anonymous" />

  </head>
 <body>

  <!-- Header Start  -->
   <div class="header_content">
     <h1 class="animation a1">Profil Resmi Yükle</h1>
   </div>
  <!-- Header End  -->

 <!-- Body Start -->
   <div class="animation body_content">
       <style>
          .profile_img_content_loading img{
            display: none;
          }
       </style>
      <div class="profile_img_content_loading" id="imagePreview">
        <img src="img/user_profil_img-removebg-preview.png" alt="" name="" class="image-preview__image">
      </div>
      <div class="button-wrapper">
        <span class="label">
        <i class="fas fa-plus"></i>
        </span>

        <input type="file" name="inpFile" id="inpFile" class="upload-box" placeholder="Upload File">

      </div>


   </div>
 <!-- Body End -->

 <!-- Footer Start -->
  <div class="back_image_footer_content">

  </div>
  <!-- Footer End -->

  <!-- Footer next btns start -->
  <form action="" method="post">
    <div class="animation footer_next_btns_content">
      <button type="submit">Devam Et<i class="fas fa-angle-right"></i></button>
    </div>
  </form>
  <!-- Footer next btns end -->



  <script type="text/javascript">

    /* profil & kapak resmi yükleme başlangıcı */

    const inpFile = document.getElementById("inpFile");
   const previewContainer = document.getElementById("imagePreview");
   const previewImage = previewContainer.querySelector(".image-preview__image");

   inpFile.addEventListener("change", function(){
      const file = this.files[0];

      if(file){
        const reader = new FileReader();

        previewImage.style.display = "block";

        reader.addEventListener("load", function() {
           previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
   });



   /* profil & kapak resmi yükleme bitişi */

</script>
 </body>
</html>
