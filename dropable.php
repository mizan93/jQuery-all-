<?php include 'inc/header.php' ?>
<style>
    .box {
        background: #eee;
        border: 1px solid #666;
        display: inline-table;
        padding: 5px;
        width: 200px;
    }
</style>
<script>
    $(document).ready(function() {
        $('#techlist li').draggable({
            helper: 'clone'
        });
        $('#phpframework').droppable({
            accept: 'li[data-value="php"]',
            drop: function(event, ui) {

                $('#php').append(ui.draggable);
            }
        });
        $('#javaframework').droppable({
            accept: 'li[data-value="java"]',

            drop: function(event, ui) {

                $('#java').append(ui.draggable);
            }
        });

    });
</script>
<div class="box"> php & java framework
    <hr>
    <ul id="techlist">
        <li data-value="php">Laravel</li>
        <li data-value="php">Laravel</li>
        <li data-value="php">Laravel</li>
        <li data-value="java">Spring</li>
        <li data-value="java">Spring</li>
        <li data-value="java">Spring</li>
    </ul>
</div>
<div class="box" id="phpframework">php framework
    <hr>
    <ul id="php"></ul>
</div>
<div class="box" id="javaframework">java framework
    <hr>
    <ul id="java"></ul>
</div>


<?php include 'inc/footer.php' ?>