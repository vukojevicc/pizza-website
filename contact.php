<?php
    if(isset($_POST['send']) && $_POST['send'] == 'contact'){
        $formData = $_POST;
        $formErrors = array();
        if(!isset($formData["email"])){
            $formErrors["email"][] = "Email must be provided";
        }else{
            $email = trim($formData["email"]);
            if(empty($email)){
                $formErrors["email"][] = "Email field can't be empty";
            }
            if(strpos($email, "@") < 1){
                $formErrors["email"][] = "Please provide valid email adress";
            }
        }
        if(!isset($formData["name"])){
            $formErrors["name"][] = "Name is not provided";
        }else{
            $name = trim($formData["name"]);
            if(empty($name)){
                $formErrors["name"][] = "Name field can't be empty";
            }
        }
        if(!isset($formData["message"])){
            $formErrors["message"][] = "Message is not provided";
        }else{
            $message = trim($formData["message"]);
            if(empty($message)){
                $formErrors["message"][] = "Message field can't be empty";
            }
        }
    }
    include "partials/contactMap.php";
    include "partials/header.php";
    include "partials/form-group.php"
?>
<main>
    <div class="container">
        <section class="contact-section">
            <aside class="form-wrapper">
                <form method="POST" action="" class="contact-form">
                    <?php foreach ($inputs as $key => $value): ?>
                        <div class="form-group">
                            <label for='<?php echo $key ?>'>Your <?php echo $key ?>*</label>
                            <?php echo $value ?>
                            <?php if (!empty($formErrors) && array_key_exists($key, $formErrors)): ?>
                                <div class="error-wrapper">
                                    <?php echo implode("<br>", $formErrors[$key]); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    <div class="form-group">
                        <button type="submit" name="send" value="contact" class="btn">Send Message</button>
                    </div>
                </form>
                <?php if (isset($formErrors) && empty($formErrors)): ?>
                    <div class="success-wrapper">
                        Vaša poruka je uspešno poslata. Hvala što nam pišete.
                    </div>
                <?php endif; ?>
            </aside>
            <div class="contact-map">
                <iframe src="<?php echo $contactMap; ?>"></iframe>
            </div>
        </section>
    </div>
</main>
<?php
    include "partials/footer.php";
