<?php

use Ramsey\Uuid\Uuid;
// form validate shorhand
if (!function_exists('isValidateForm')) {
    function isValidateForm($rules)
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();

        // Pastikan metode request adalah POST
        if ($request->getMethod() === 'POST') {
            // Set aturan validasi dan jalankan validasi
            $validation->setRules($rules);
            if ($validation->withRequest($request)->run()) {
                echo 'Validate success';
            } else {
                // echo '<pre>';
                foreach ($rules as $field => $ruleSet) {
                    if ($validation->hasError($field)) {
                        echo $field . ' error: ' . $validation->getError($field) . '<br>';
                    }
                }
                // echo '</pre>';
            }
        } else {
            echo "Request method is not POST, it is: " . $request->getMethod();
        }
    }
}

// generate uuid
if (!function_exists('uuid')) {
    function uuid() {
        $uuid = Uuid::uuid4()->toString();
        return $uuid;
    }
}

// generate datenow
if (!function_exists('datenow')) {
    function datenow() {
        $datetime = (new \DateTime())->format('Y-m-d H:i:s');
        return $datetime;
    }
}

// dump die
if (!function_exists('dump')) {
    function dump($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable 
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/]=>n(s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        } else {
            return $output;
        }
    }
}

if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE)
    {
        dump($var, $label, $echo);
        exit;
    }
}                    
