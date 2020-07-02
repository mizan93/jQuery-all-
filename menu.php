<?php include 'inc/header.php' ?>
<style>
    .ui-menu {
        width: 200px;
    }
</style>

<script>
    $(document).ready(function() {
        $("#menu-5").menu();
    });
</script>

<ul id="menu-5">
    <li><a href="#">Spring</a></li>
    <li><a href="#">Hibernate</a></li>
    <li><a href="#">JSF</a></li>
    <li><a href="#">HTML5</a></li>
    <li><a href="#">Java</a>
        <ul>
            <li><a href="#">Java IO</a></li>
            <li><a href="#">Swing</a></li>
            <li><a href="#">Jaspr Reports</a></li>
        </ul>
    </li>
</ul>
<span id="result"></span>
<?php include 'inc/footer.php' ?>