<?php include 'inc/header.php' ?>

<script>
    $(document).ready(function() {
        $("#dialog").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
                "Delete ": function() {
                    $(this).dialog("close");
                },
                Cancel: function() {
                    $(this).dialog("close");
                }
            }
        });
    });
</script>



<?php include 'inc/footer.php' ?>