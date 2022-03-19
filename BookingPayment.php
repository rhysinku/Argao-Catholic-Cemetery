<?php 
session_start();

if(isset($_GET["error"]))
{
    if ($_GET["error"] == "IncorrectPass")
    {
        $error = " <span class='text-danger' style='font-size: 12px;' >Incorrect Password</span> ";
    }
   
}
else
{
    $error = "";
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cemetery New</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="d-flex justify-content-center" style="padding: 46px;">
        <div style="width: 764px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row" style="padding: 10px;">
                            <div class="col text-center">
                                <h1>Gcash Payment</h1>
                            </div>
                        </div>
                        <form  enctype="multipart/form-data" method="POST" action="assets/php/dbBookingPayment.php">
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Cost: Php 500.00</p>
                                <p>Send to: 09273743328</p>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Gcash Number</p><input name="gcash" type="text" required>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Account Password</p><input name="accpass" type="password" required> <?php echo $error; ?>
                            </div>
                        </div>
                        <div class="row" style="padding: 10px;">
                            <div class="col">
                                <p>Upload Gcash Receipt</p>
                                <input id="inputimg" onchange="imgval()" name="bookimg"  type="file" required accept="image/png, image/jpg, image/jpeg" >
                            </div>
                            <span id='message'></span>
                        </div>
                        <div class="row d-flex align-items-center" style="padding: 10px;">
                            <div class="col d-flex flex-row justify-content-center">
                                <button class="btn btn-primary" type="submit" name="pay" style="margin: 10px;">Send Payment</button>
                               
                            <button class="btn btn-primary" type="submit"  role="button" name="pending" style="margin: 10px;"  formnovalidate >Pay Later</button></div>
                            
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center" style="padding: 10px;"><img src="assets/img/gcash.jpg" style="width: 313px;"></div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <script type="text/javascript">
        function imgval(){
            var img = document.getElementById("inputimg").value;
            var imgtype = img.lastIndexOf(".")+1;
            var fileimg = img.substr(imgtype, img.lenght).toLowerCase();
            if(fileimg =="jpg" || fileimg =="jpeg" || fileimg =="png")
            {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Correct Image Format';
            }
            else
            {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Incorrect Format Image';
            }

        }

        function valNum(e)
        {
            const pattern = /^[0-9]$/;
            return pattern.test(e.key)
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>