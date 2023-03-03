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
    <button type="button" onclick="create()">Click Me</button>



    <script>
        // $(document).ready(function() {
        //     $(document).bind("contextmenu", function(e) {
        //         // alert('right click disabled');
        //         return false;
        //     });
        // });
        function create () {
            $.ajax({
                url:"test.php",    //the page containing php script
                type: "post",    //request type,
                dataType: 'json',
                data: {
                    registration: "success", 
                    name: "xyz", 
                    email: "abc@gmail.com"
                    },
                success:function(result){
                    console.log(result.abc);
                }
            });
        }
    </script>

</body>

</html>