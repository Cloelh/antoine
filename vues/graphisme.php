<div class="navigation-wrapper">
    <div class="project-preview-wrapper">
    <div class="project-preview"></div>
    </div>

    <ul class="navigation-list">
        <li class="navigation-item">
            <a class="navigation-link navigation-link-1" href="?action=pochettes-officielles" target = "_blank">
            <span data-text="Officielles">Officielles</span>
            </a>
        </li>
        <div class="project-overlay"></div>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-2" href="?action=pochettes-officielles" target = "_blank">
            <span data-text="Alternatives">Alternatives</span>
            </a>
        </li>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-3" href="?action=enter-in-my-vision" target = "_blank">
            <span data-text="Vision">Vision</span>
            </a>
        </li>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-4" href="?action=affiches-posters" target = "_blank">
            <span data-text="Affiches">Affiches</span>
            </a>
        </li>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-5" href="?action=logos" target = "_blank">
            <span data-text="Logos">Logos</span>
            </a>
        </li>
        <li class="navigation-item">
            <a class="navigation-link navigation-link-6" href="?action=fonds-decran" target = "_blank">
            <span data-text="Fonds">Fonds</span>
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
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_pochette_officielle.png)" });
    });

    $(".navigation-link-2").hover(function() {
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_pochette_alternative.png)" });
    });

    $(".navigation-link-3").hover(function() {
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_vision.jpg)" });
    });

    $(".navigation-link-4").hover(function() {
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_affiche.png)" });
    });

    $(".navigation-link-5").hover(function() {
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_logo.png)" });
    });

    $(".navigation-link-6").hover(function() {
        $(".project-preview").css({ "background-image": "url(public/img/im-accueil/sazura_home_wallpaper.png)" });
    });


    $(window).scroll(function() {
        var scroll = $(window).scrollTop(),
        dh = $(document).height(),
        wh = $(window).height();
        scrollPercent = (scroll / (dh - wh)) * 100;
        $(".progressbar").css("height", scrollPercent + "%");
    });
</script>       