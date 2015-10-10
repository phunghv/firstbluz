<style>
    .trans
    {
        display:inline;
        width:154px;
        float:left;
        margin:0 20px 20px 0;
    }

    /*                .jquery-slider-wrapper
                    {
                        border:8px solid #ccc;
                        height:120px;
                    }*/

    .leyenda
    {
        font-weight:bold;
        font-size:10px;
        line-height:14px;
    }

    h2
    {
        clear:both;
    }
</style>
<div id='home'>
    <center>
        <div id='hot-tutorial'>
            <div id="wrapper">
                <div class="slider">
                    <div>
                        <a target ="_blank" href="http://mp3.zing.vn/bai-hat/Vo-Nguoi-Ta-Phan-Manh-Quynh/ZW7WBZBI.html">
                            <img style="width: 100%;" src="img/slide_1.jpg" alt=""/> 
                        </a>
                    </div>

                    <div>
                        <a target ="_blank" href="http://mp3.zing.vn/bai-hat/Vo-Nguoi-Ta-Phan-Manh-Quynh/ZW7WBZBI.html">
                            <img style="width: 100%;" src="img/slide_2.jpg" alt=""/>
                        </a>
                    </div>

                    <div>
                        <a target ="_blank" href="http://mp3.zing.vn/bai-hat/Vo-Nguoi-Ta-Phan-Manh-Quynh/ZW7WBZBI.html">
                            <img style="width: 100%;" src="img/slide_3.jpg" alt=""/>
                        </a>

                    </div>

                    <div>
                        <a target ="_blank" href="http://mp3.zing.vn/bai-hat/Vo-Nguoi-Ta-Phan-Manh-Quynh/ZW7WBZBI.html">
                            <img style="width: 100%;" src="img/slide_4.jpg" alt=""/>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </center>
    <div id='unity-tut'>
        <h2 id="help2">Unity</h2>
        <div class="trans">
            <div class="t2">
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                BarLeft
            </div>
        </div>

        <div class="trans">
            <div class="t3">
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                BarRight
            </div>
        </div>

        <div class="trans">
            <div class="t4">
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                Fountain
            </div>
        </div>

        <div class="trans">
            <div class="t5">
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                Rain
            </div>
        </div>
    </div>
    <div id='php-tut'>
        <h2>php</h2>
        <div class="trans">
            <div class="t8">
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                SlideLeft
            </div>
        </div>

        <div class="trans">
            <div class="t9">
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                SlideRight
            </div>
        </div>

        <div class="trans">
            <div class="t10">
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                SlideTop
            </div>
        </div>

        <div class="trans">
            <div class="t11">
                <div>
                    <img src="img/trans_2.jpg" alt=""/>
                </div>
                <div>
                    <img src="img/trans_1.jpg" alt=""/>
                </div>
            </div>
            <div class="leyenda">
                SlideBottom
            </div>
        </div>
    </div>
    <div id='java-tut'>
        <h2>JAV</h2>
        <div class="trans">
      <div class="t12">
        <div>
          <img src="img/trans_2.jpg" alt=""/>
        </div>
        <div>
          <img src="img/trans_1.jpg" alt=""/>
        </div>
      </div>
      <div class="leyenda">
      Explode
      </div>
    </div>

    <div class="trans">
      <div class="t13">
        <div>
          <img src="img/trans_1.jpg" alt=""/>
        </div>
        <div>
          <img src="img/trans_2.jpg" alt=""/>
        </div>
      </div>
      <div class="leyenda">
      ExplodeRandom
      </div>
    </div>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".t1").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 1000,
            speed: 200,
            delay: 3000,
            transition: 'fade'
        });

        $(".t2").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 150,
            delay: 3000,
            transition: 'barleft'
        });

        $(".t3").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 150,
            delay: 3000,
            transition: 'barright'
        });

        $(".t4").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 150,
            delay: 3000,
            transition: 'fountain'
        });

        $(".t5").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 150,
            delay: 3000,
            transition: 'rain'
        });

        $(".t6").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 500,
            speed: 200,
            delay: 3000,
            transition: 'square'
        });

        $(".t7").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 500,
            speed: 200,
            delay: 3000,
            transition: 'squarerandom'
        });

        $(".t8").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 200,
            delay: 3000,
            transition: 'slideleft'
        });

        $(".t9").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 200,
            delay: 3000,
            transition: 'slideright'
        });

        $(".t10").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 200,
            delay: 3000,
            transition: 'slidetop'
        });

        $(".t11").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 800,
            speed: 200,
            delay: 3000,
            transition: 'slidebottom'
        });

        $(".t12").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            pauseOnHover: false,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 500,
            speed: 200,
            delay: 3000,
            transition: 'explode'
        });

        $(".t13").slideshow({
            timer: false,
            control: false,
            navigation: false,
            selector: false,
            width: 120,
            height: 120,
            bars: 5,
            columns: 3,
            padding: 4,
            duration: 500,
            speed: 200,
            pauseOnHover: false,
            delay: 3000,
            transition: 'exploderandom'
        });

    });

</script>