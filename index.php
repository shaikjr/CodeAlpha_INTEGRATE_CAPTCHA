<?php
include_once 'submit.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script>
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
        </script>

</head>
<body>
    <div class="container">
        <h1>CONTACT FORM</h1>
        <div class="cw-form">
            <form id="contactForm" method="post" action="">

                <?php if(!empty($statusMsg)){ ?>
            <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                <?php } ?>
                <div class="input-group">
                    <input type="text" name="name" value="" placeholder="Your name">
                </div>
                <div class="input-group">	
                    <input type="email" name="email" value="" placeholder="Your email">
                </div>
                <div class="input-group">
                    <textarea name="message" placeholder="Type message..."></textarea>
                </div>

            
                <input type="hidden" name="submit_frm" value="1">
                <button class="g-recaptcha" 
                    data-sitekey="6LccqIgnAAAAAKy3hGFh91GGRh6Ckr2t5RoYHibw" 
                    data-callback='onSubmit' 
                    data-action='submit'>Submit</button>
            </form>

        </div>
    </div>
    
</body>
</html>