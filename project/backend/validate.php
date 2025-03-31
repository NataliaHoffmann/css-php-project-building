<?php
class validate {
    
    // Function to check if any required fields are empty
    public function checkEmpty($postData, $requiredFields = array()) {
        $msg = null;

        foreach($requiredFields as $field) {
            if (empty($postData[$field])) {
                $msg = "The field $field cannot be empty.";
                break;  // Exit the loop as soon as we find an empty field
            }
        }

        return $msg;
    }

    // Function to validate email format
    public function validEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Function to validate phone number format
    public function validPhone($phone) {
        // Check if the phone number matches a specific pattern (10 digits)
        return preg_match('/^[0-9]{10}$/', $phone);
    }
}
?>
  