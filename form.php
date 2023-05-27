<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-container">
        <img class="logo" src="logo.png" alt="">
        <h2>Cogent Developers Network Registration Form</h2>
        <form class="form-css">
            <div class="form-field">
                <div class="form-field-heading">1. Name</div>
                <div class="input-container">
                    <textarea type="name" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-name"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-name-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-name-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-name-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">2. E-Mail</div>
                <div class="input-container">
                    <textarea type="email" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-mail"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-mail-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-mail-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-mail-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">3. Graduation year</div>
                <div class="input-container">
                    <textarea type="year" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-graduation"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-graduation-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-graduation-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-graduation-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">4. Mobile Number</div>
                <div class="input-container">
                    <textarea type="mobile" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-mobile"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-mobile-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-mobile-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-mobile-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">5. WhatsApp Number</div>
                <div class="input-container">
                    <textarea type="whatsapp" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-whatsapp"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-whatsapp-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-whatsapp-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-whatsapp-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">6. Technical Skills</div>
                <div class="select-field">
                    <div>
                        <input type="checkbox" id="checkbox1">
                        <label type="skills" for="checkbox1">Flutter</label><br>
                    </div>
                    <div>
                    <input type="checkbox" id="checkbox2">
                    <label type="skills" for="checkbox2">React Native</label><br>
                </div>
                    <div>
                        <input type="checkbox" id="checkbox3">
                        <label type="skills" for="checkbox3">Android</label><br>
                    </div>
                    <div>
                    <input type="checkbox" id="checkbox4">
                    <label type="skills" for="checkbox4">lonic</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox5">
                        <label type="skills" for="checkbox5">Java</label><br>
                    </div>
                </div>
                <div class="input-container">
                    <textarea type="skills" class="input-field" placeholder="other" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-technical"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-technical-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-technical-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-technical-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">7. Short Introduction About Me</div>
                <div class="input-container">
                    <textarea type="intro" class="input-field" onchange="fieldOnChange(this)" onblur="blurField(this)" max-length=100 id="form-introduction"></textarea>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-introduction-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-introduction-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-introduction-text-counter">0/100</div>
                </div>
            </div>
            <div class="form-field">
                <div class="form-field-heading">8. Resume</div>
                <div class="upload-container">
                    <input type="resume" id="files"class="btn" type="file">
                    <p>* Maximum allowed file size is <strong>5MB</strong>.</p>
                </div>
                <div class="info-container">
                    <div class="req-field" id="form-introduction-reg-field">Required</div>
                    <div class="waring-field" style="display:none;" id="form-introduction-warning">This question requires an answer</div>
                    <div class="text-counter" id="form-introduction-text-counter">0/100</div>
                </div>
            </div>
            <button class="btn-submit">Submit ✔</button>
        </form> 
    </div>
    <script>
        function blurField(ele)
        {
            let warningDiv = document.getElementById(ele.id+"-warning"),
                regDiv = document.getElementById(ele.id+"-reg-field");
            if(warningDiv && regDiv)
            {
                if(ele.value == "")
                {
                    regDiv.style.display="none";
                    warningDiv.style.display="";
                }
                else
                {
                    regDiv.style.display="";
                    warningDiv.style.display="none";
                }
            }
        }
        function fieldOnChange(ele)
        {
            let textCounter = document.getElementById(ele.id+"-text-counter");
            if(textCounter)
            {
                textCounter.innerHTML = ele.value.length+"/100";
            }
        }
    </script>
       <?php

$connection = mysqli_connect('localhost','root','Priyesh@2143','form_db');

if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $year = $_POST['year'];
   $mobile = $_POST['mobile'];
   $whatsapp = $_POST['whatsapp'];
   $intro = $_POST['intro'];
   $resume = $_POST['resume'];
   

   $request = " insert into book_form(name, email, year, mobile, whatsapp, intro, resume) values('$name','$email','$year','$mobile','$whatsapp','$intro','$resume') ";
   mysqli_query($connection, $request);
   header('location:book.php'); 
}else{
   echo 'something went wrong please try again!';
}

?>
</body>
</html>