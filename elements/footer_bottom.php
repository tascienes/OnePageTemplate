
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
<!--<script type="text/javascript" src="./js/jquery-3.3.1.js"></script>-->
<!--<script type="text/javascript" src="./libs/facybox/jquery.fancybox.min.js"></script>-->
<script type="text/javascript" src="./libs/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="./libs/remodal/remodal.min.js"></script>
<script type="text/javascript" src="./libs/bootstrap/popper.min.js"></script>
<script type="text/javascript" src="./libs/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/scrollIt.js"></script>
<script type="text/javascript" src="./js/scripts.js"></script>

<script>$(function() { $.scrollIt(); });</script>



<!-- lang -->
<script type="text/javascript" src="./js/langv2.js"></script>

<script type="text/javascript">
    $(function(){

        if(localStorage.getItem("language") == null){
            var default_lang = "tr";
        }else{
            var default_lang = localStorage.getItem("language");
        }

        $('[data-lang-filter]').click(function(e){

            default_lang = $(this).data('lang-filter');

            if (typeof(Storage) !== "undefined") {
                localStorage.setItem("language", default_lang);
            } else {
                alert('Dil Değişikliği Kayıt Edilemedi');
            }

            $('[data-lang]').each(function(){
                var key = $(this).data('lang');
                $(this).text(lang[default_lang][key]);
            });;
            e.preventDefault();
        });

        $('[data-lang]').each(function(){
            var key = $(this).data('lang');
            $(this).text(lang[default_lang][key]);
        });;

    });
</script>
<!-- lang -->

<script type="text/javascript">
    $(document).ready(function(){
        $('.menu-bar').click(function(){

            if (document.getElementById('menu-ul').style.display=='block') {
                $(".menu-ul").slideUp();
            }
            else{
                $(".menu-ul").slideDown();
                $('.menu-ul').toggleClass('active1');
                
            }
            
        })
    })

    

    var eventlink=document.getElementById("events");
    eventlink.onclick=function(){
        document.getElementById("events.baslik").style.color= 'red';
        document.getElementById("news.baslik").style.color= 'red';
        document.getElementById("documents.baslik").style.color= '#333';
    }

    var documentslink=document.getElementById("documents");
    documentslink.onclick=function(){
        document.getElementById("events.baslik").style.color= '#333';
        document.getElementById("news.baslik").style.color= '#333';
        document.getElementById("documents.baslik").style.color= 'red';
    }

</script>

<script>
    $("[data-fancybox]").fancybox({
        loop:true,
        gutter: 350,
        buttons: [
        "zoom",
        //"share",
        //"fullScreen",
        "download",
        "thumbs",
        "close"
    ],
    animationEffect: "tube",
    transitionEffect: "slide"
});
</script>


</body>
</html>
