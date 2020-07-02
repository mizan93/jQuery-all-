<?php include 'inc/header.php' ?>
<style>
   
</style>

<script>
    $(function() {
        $("#slider-range-min").slider({
            range: "min",
            value: 20,
            min:20,
            max: 200,
            step:20,
            slide: function(event, ui) {
                $("#amount").val("$" + ui.value);
            }
        });
        $("#amount").val("$" + $("#slider-range-min").slider("value"));
    });
</script>
</head>

<body>

    <p>
        <label for="amount">Maximum price:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>

    <div id="slider-range-min"></div>

    <?php include 'inc/footer.php' ?>