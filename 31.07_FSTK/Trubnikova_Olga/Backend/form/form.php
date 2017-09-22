<?php
/*Отработать изученный на занятии код, попробовать переписать самим.
Стилизовать форму и вывод сообщений.*/

/*$validators = [
        'email' => ['validateNotEmpty', 'validateEmail'],
        'message' => ['validateNotEmpty', 'validateMessage'],
        'name' => ['validateNotEmpty'],
];*/

$success = true;
$errors = array_unique(validateInput());


function validateField($field, $validators){
    global $success;
    if (isset($_POST[$field])){
        $fieldName = $_POST[$field];
        foreach ($validators as $validator){
            $error = call_user_func($validator, $fieldName);
            if ($error){
                $success = false;
                return $error;
            }
        }
    } else {
        $success = false;
    }
}


function validateInput() {
    $errors = [];
    array_push($errors, validateField('name', ['validateNotEmpty']));
    array_push($errors, validateField('email', ['validateNotEmpty', 'validateEmail']));
    array_push($errors, validateField('message', ['validateNotEmpty', 'validateMessage']));
    return $errors;
}

function validateNotEmpty($name) {
    if (empty($name)) {
        return "Please fill out the missing fields.";
    }
}

function validateEmail($email){
       $validated = filter_var($email, FILTER_VALIDATE_EMAIL);
       if (!$validated){
           return "The email address is incorrect.";
       }
}

function validateMessage($message){
     if (mb_strlen($message) < 4){
        return "Message is too short.";
       }
}



function saveToFile() {
    $input = [];
    $input['name'] = sanitize($_POST['name']);
    $input['email'] = sanitize($_POST['email']);
    $input['message'] = sanitize($_POST['message']);
    $data = json_encode($input) . PHP_EOL;
    file_put_contents('contact.txt', $data, FILE_APPEND);
}


function printMessages() {
    $data = explode(PHP_EOL, file_get_contents('contact.txt'));
    if ($data) {
        foreach ($data as $value) {
            if ($value) {
                $output = json_decode($value);
                echo "<div class=\"well\">";
                foreach ($output as $key => $comment) {
                    echo "<b>$key: </b>" . $comment."<br>";
                }
                echo "</div>";
            }
        }
    }
}

function sanitize($value){
    return htmlspecialchars(strip_tags($value), ENT_QUOTES);
}

function postParam($name){
    if (!empty($_POST)) {
        echo $_POST[$name];
    }
}


?>


<!doctype html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title> Form</title>
</head>
    <body class="container jumbotron">
        <form action="" method="POST" name="form" class="col-md-6 col-md-offset-3" novalidate>
        <?php if ($success): saveToFile(); ?>
            <div class="alert alert-success" role="alert">Your message sent successfully!</div>
        <?php else: ?>
        <?php
            if (isset($_POST['name'])) {
                $errorsStr = "";
                foreach ($errors as $error) {
                    $errorsStr .= $error . " ";
                }
                echo "<div class=\"alert alert-danger \" role=\"alert\">" . $errorsStr . "</div>";
            }
        ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name" placeholder="Name" value="<?php postParam('name');?>">
            </div>

            <div class="form-group">
                <label for="email1">Email</label>
                <input type="email" class="form-control" id="email1" name="email" placeholder="Email" value="<?php postParam('email');?>">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"><?php postParam('message');?></textarea>
            </div>

            <input class="btn btn-primary center-block" type="submit" name="submit" value="Send"/><br>

        <?php endif; ?>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Comments</h3>
                </div>
                <div class="panel-body">
                    <?php printMessages();?>
                </div>
            </div>
        </form>
    </body>
</html>