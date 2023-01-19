<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <h3>How to Disable Right Click using jQuery</h3>

    <script>
        $(document).ready(function() {
            $(document).bind("contextmenu", function(e) {
                // alert('right click disabled');
                return false;
            });
        });
    </script>

</body>

</html>