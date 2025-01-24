<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title> Registration_Form</title>
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link rel="stylesheet" type="text/CSS" href="mediaQureries.css">
</head>

<body>
    <section>
        <form class="Grid_container" id="form" method="Post" action="insertProcess.php">
            <div class="input Regis_heading">
                <h1>Registration</h1>
            </div>
            <div class="input std_name">
                 <input type="text" placeholder="Name*"  name="std_name" id="std_name" required>
            </div>
            <div class="input fName">
                <input type="text" placeholder="Father Name*" name="fName" id="fName" required>
            </div>
            <div class="input gender">
                <input type="text" placeholder="Gender*" name="gender" id="gender" required>
            </div>
            <div class="input email">
                <input type="email" placeholder="Email*: xyx@gmail.com" name="email" id="email" required>
            </div>
            <div class="input DOB div_padd1">
                <input type="date" placeholder="DOB*" name="DOB" id="DOB" required>
            </div>
            <div class="input phone">
                <input type="text" placeholder="Phone_num: 0300-0000000" pattern="[0-9]{4}-[0-9]{7}" name="phone" id="phone">
            </div>
            <div class="input Temp_addr">
                <input type="text" placeholder="Temporary Address" name="Temp_addr" id="Temp_addr">
            </div>
            <div class="input Per_add">
                <input type="text" placeholder="Permanent Address*" name="Per_add" id="Per_add" required>
            </div>
            <div class="input upload_img div_padd">
                <input type="file" placeholder="upload_img" name="upload_img" id="upload_img">
            </div>
            <div class="Note">
                <p><span>Note: </span>Please fill form carefully. After submission you will not able to make any changes.</p>
            </div>
            <div class="input submit">
                <button  type="submit" id="submit" name="submit">Submit</button>
            </div>
</form>
    </section>
</body>

</html>
