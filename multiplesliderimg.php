<?php include 'inc/header.php' ?>
<style>
    img {
        width: 100px;
        height: 100px;
    }
</style>

<script>
    $(function() {
        $("#imgheight, #imgwidth").slider({
            min: 100,
            max: 500,
            slide: controlImg
        });
        $("#imgopacity").slider({
            min: 0,
            max: 100,
            value: 100,
            slide: controlImg
        });

        function controlImg() {
            var height = $("#imgheight").slider('value');
            var width = $("#imgwidth").slider('value');
            var opacity = $("#imgopacity").slider('value');
            $("#liveimg").css({
                height: height,
                width: width,
                opacity: opacity / 100
            });
            $("#state").html("Height: " + height + " pixels<br>" +

                "Width: " + width + " pixels<br>" +
                "Opacity: " + opacity / 100
            );
        }
    });
</script>
<div id="imgheight"> </div> <br>
<div id="imgwidth"></div><br>
<div id="imgopacity"></div><br>


<div id="state"></div><br>

<img id="liveimg" src="img/post2.png" alt="">

<?php include 'inc/footer.php' ?>