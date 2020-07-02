<?php include 'inc/header.php' ?>
<style>
    .box {
        background: #666;
        width: 100px;
        height: 100px;
        font-size: 20px;
        color: #fff;
    }
</style>
<script>
    $(document).ready(function() {
        $('#boxone').resizable({

            alsoResize: "#box2",
            
            autoHide: true,
            animateEasing: "easeOutBounce"
        });


    });
</script>
<div class="box" id="boxone">Widget one</div>
<br>
<div class="box" id="">Widget two</div>


<?php include 'inc/footer.php' ?>