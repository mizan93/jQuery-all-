<?php include 'inc/header.php'
?>
<style>
    #resizable {
        width: 150px;
        height: 150px;
        padding: 0.5em;
    }

    #resizable h3 {
        text-align: center;
        margin: 0;
    }

    .ui-resizable-helper {
        border: 2px dotted #00F;
    }
</style>
<script>
    $(function() {
        $("#resizable").resizable({
            maxHeight: 250,
            maxWidth: 350,
            minHeight: 150,
            minWidth: 200
        });
    });
</script>
<div id="resizable" class="ui-widget-content">
    <h3 class="ui-widget-header">Helper</h3>
</div>


<?php include 'inc/footer.php' ?>