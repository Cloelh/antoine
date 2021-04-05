<div class="navigation-wrapper">
    <div class="project-preview-wrapper">
    <div class="project-preview"></div>
    </div>

    <ul class="navigation-list">
        <li class="navigation-item">
            <a class="navigation-link navigation-link-1" href="?action=pochettes-officielles" target = "_blank">
            <span data-text="13block">13block</span>
            </a>
        </li>
        <div class="project-overlay"></div>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-2" href="?action=pochettes-alternatives" target = "_blank">
            <span data-text="Zamdane">Zamdane</span>
            </a>
        </li>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-3" href="?action=enter-in-my-vision" target = "_blank">
            <span data-text="A2H">A2H</span>
            </a>
        </li>
    </ul>
</div>

<div class="progressbar"></div>

    <script>
        $(document).ready(function() {
          TweenMax.set(".project-preview", { width: 0 });
  
          var tl = new TimelineLite();
  
          $(document)
            .on("mouseover", ".navigation-item", function(evt) {
              tl = new TimelineLite();
              tl.to($(".project-preview"), 1, {
                width: "1200px",
                ease: Expo.easeInOut
              });
            })
            .on("mouseout", ".navigation-item", function(evt) {
              tl = new TimelineLite();
              tl.to($(".project-preview"), 0.5, {
                width: 0,
                ease: Expo.easeInOut
              });
            });
        });
  
        $(".navigation-link-1").hover(function() {
          $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_concert_13block.png)" });
        });
  
        $(".navigation-link-2").hover(function() {
          $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_concert_zamdane.png)" });
        });
  
        $(".navigation-link-3").hover(function() {
          $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_concert_palace.png)" });
        });
  
  
  
        $(window).scroll(function() {
          var scroll = $(window).scrollTop(),
            dh = $(document).height(),
            wh = $(window).height();
          scrollPercent = (scroll / (dh - wh)) * 100;
          $(".progressbar").css("height", scrollPercent + "%");
        });
    </script>