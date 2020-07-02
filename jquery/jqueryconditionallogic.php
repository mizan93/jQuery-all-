<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <ul></ul>
    <script>
        $(document).ready(function() {
            company();
        });

        function company() {
            $.ajax({
                url: "person.xml",
                dataType: "xml",
                success: function(date) {
                    $("ul").children().remove();
                    $(data).find("employee").each(function() {
                        var alldata = '<li>Name: ' + $(this).find('name').text() + '</li> < li > Skill: ' + $(this).find('skill')
                            .text() + ' < /li><li>company: ' + $(this).find('company').text();
                      $("ul").append(alldata);
                    });
                },
                error: function(){
$('ul').append('error');
                }
            });
        }
    </script>
</body>

</html>