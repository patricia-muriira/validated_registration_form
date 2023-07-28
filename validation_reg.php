<?php


$errors = array(
    'fname' => '',
    'lname' => '',
    'date_of_birth' => '',
    'tel' => '',
    'email' => '',
    'photo' => '',
    'message' => ''
);

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // validation to check if field are filled
    if (empty($_POST['fname'])) {
        $errors['fname'] = "This field is required";
    } else {
        $fname = $_POST['fname'];
        // second validation
        if (!preg_match('/^[a-zA-Z]{2,15}$/', $fname)) {
            $errors['fname'] = "Enter a Valid Name";
        }
    }
    // validation of last name
    if (empty($_POST['lname'])) {
        $errors['lname'] = "This field is required";
    } else {
        $lname = $_POST['lname'];
        // second validation
        if (!preg_match('/^[a-zA-Z]{2,15}$/', $lname)) {
            $errors['lname'] = "Enter a Valid last name";
        }
    }

    // validate date of birth
    if (empty($_POST['date_of_birth'])) {
        $errors['date_of_birth'] = "This field is required";
    } else {
        $date_of_birth = $_POST['date_of_birth'];
    }

    // validate phone number
    if (empty($_POST['tel'])) {
        $errors['tel'] = "This field is required";
    } else {
        $tel = $_POST['tel'];
        // second validation
        if (!preg_match('/^0(1|7)[\d]{8}$/', $tel)) {
            $errors['tel'] = "please enter a valid phone number";
        }
    }
    // validate email
    if (empty($_POST['email'])) {
        $errors['email'] = "This field is required";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "please enter a valid email address";
        }
    }

    // validate the profile photo
    if (empty($_FILES['photo']['name'])) {
        $errors['photo'] = "This field is required";
    } else {
        $files = $_FILES['photo'];

        $fileName = $files['name'];
        $fileSize = $files['size'];
        $fileTmpLoc = $files['tmp_name'];
        $fileError = $files['error'];

        // allowed only jpg jpeg png files
        $f = explode('.', $fileName);
        $fileExt = strtolower($f[1]);

        $allowedExt = array('jpg', 'jpeg', 'png');
        if (!in_array($fileExt, $allowedExt)) {
            $errors['photo'] = "File Type not supported";
        } else {
            // checking the size of the image
            if ($fileSize > 2000000) {
                $errors['photo'] = "File size too large";
            } else {
                $dest = 'uploads/' . $fileName;
                move_uploaded_file($fileTmpLoc, $dest);
            }
        }

    }

    // validate the message
    if (empty($_POST['message'])) {
        $errors['message'] = "This field is required";
    } else {
        $message = $_POST['message'];
        // check if it is string
        if (!is_string($message)) {
            $errors['message'] = "message should be a string only";
        } else {
            $maxLength = 250;
            if (str_word_count($message) > $maxLength) {
                $errors['message'] = "message should not exceed 250 words";
            }
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>