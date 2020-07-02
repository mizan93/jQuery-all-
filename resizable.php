<?php include 'inc/header.php' ?>

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
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#resizable").resizable({
            grid: [20, 10]
        });

    });
</script>
</head>

<body>

    <div id="resizable" class="ui-widget-content">
        <h3 class="ui-widget-header">Resizable</h3>
    </div>



    <?php include 'inc/footer.php' ?>