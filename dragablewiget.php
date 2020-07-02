<?php include 'inc/header.php' ?>
<style>
    #dragable {
        width: 100px;
        height: 100px;
        background: darkred;
        color: #fff;
        vertical-align: middle;
    }

    #parent {
        width: 300px;
        height: 300px;
        border: 1px solid #ddd;
    }
</style>
<script>
    $(document).ready(function() {
        $('#dragable').draggable({
            revert: true
        });
    });
</script>
<div id="parent">
    <div id="dragable">
        drag me around
    </div>
</div>


<?php include 'inc/footer.php' ?>