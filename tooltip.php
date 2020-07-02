<?php include 'inc/header.php' ?>
<style>
    label {

        width: 5em;
    }
</style>
<script>
    $(document).ready(function() {
        $('#txtname').tooltip({
            content: toltipData(),track:true,
            show:{delay:100, effect:"slideDown" ,duration:500},
            hide:{delay:100, effect:"slideU" ,duration:500}
        });

        function toltipData() {
            return "Data form my function..";
        }
    });
</script>


<label for="txtname" title="Full name">Name</label>
<input type="text" id="txtname" name="" title="your name wiill be here..">



<?php include 'inc/footer.php' ?>