<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Password</title>
    <link rel="icon" href="assets/icon/yt_Logo-Circle.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        .mr-tp-19 {
            margin-top: 19px;
        }
    </style>
</head>

<body> <img src="assets/img/shield.png" alt="encrption">
    <div class="refresh"> <a href="index.php"><img src="assets/img/refresh.png" alt="refresh"></a> </div>
    <h4>Generate Password</h4>
    <div class="container">
        <div class="space-bt-50"></div>
        <form method="POST">
            <div class="form-group row"> <label for="inputEmail3" class="col-sm-2 col-form-label">Enter Your Password : </label>
                <div class="col-sm-10"> <input type="text" class="form-control" value="<?php if (isset($_POST['convert'])) {
                                                                                            echo $_POST['password'];
                                                                                        } ?>" name="password" id="inputEmail3" placeholder="password">

                    <div class="space-bt-20"></div>
                    <label for="Method">Choose Type :</label>
                    <select name="select_method">
                        <option value="" class="text-muted">Select</option>
                        <option value="md5">MD5()</option>
                        <option value="password_hash">Password_Hash()</option>

                    </select>
                    <div class="space-bt-20"></div><button type="submit" name="convert" class="btn btn-secondary btn-sm">Convert</button>



                </div>

            </div>
        </form>
        <div class="space-bt-20"></div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Result >> </legend>
                <div class="col-sm-10">
                    <hr />
                    <div class="row">
                        <div class="col-md-8"> <label class="form-check-label" for="gridRadios1"> <b>Your Password: </b> </label>
                            <p id="text"><?php if (isset($_POST['convert'])) {
                                                echo $_POST['password'];
                                            } ?></p>
                        </div>
                        <div class="col-md-4 mr-tp-19"> <button type="button" type="button" class="btn btn-secondary btn-sm" onclick="copyToClipboard('#text')">Copy</button> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"> <label class="form-check-label" for="gridRadios2"> <b>Encrypt Password: </b> </label>
                            <p id="md5_text"><?php if (isset($_POST['convert'])) {

                                                    if ($_POST['password']) {

                                                        if ($_POST['select_method']) {

                                                            if ($_POST['select_method'] == 'md5') {

                                                                echo md5($_POST['password']);
                                                            } else if ($_POST['select_method'] == 'password_hash') {

                                                                echo password_hash($_POST['password'], PASSWORD_DEFAULT);
                                                            } else {

                                                                echo 'Method not match';
                                                            }
                                                        } else {
                                                            echo 'Please choose any type';
                                                        }
                                                    } else {
                                                        echo 'Please choose enter your password';
                                                    }
                                                }
                                                ?></p>
                        </div>
                        <div class="col-md-4 mr-tp-19"> <button type="button" class="btn btn-secondary btn-sm" onclick="copyToClipboard('#md5_text')">Copy</button> </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</body>


<footer> Design by : Aman Kumar Mukhi</footer>

</html>