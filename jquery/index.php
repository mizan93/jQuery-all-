<?php include 'inc/header.php'; ?>
<style>
    .content {
        min-height: 300px;
        background: #fff;
    }
</style>
<div class="content">

    <script>
        $(function() {
            $("#dialogmsg").dialog();
        });
    </script>
    <div id="dialogmsg" title="This is my dialog"> THis is just for test.</div>

</div>
<?php include 'inc/footer.php'; ?>