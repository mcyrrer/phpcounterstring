<?php

/**
 * 
 */
class CounterString
{
    function generate($length = 0, $echo = false)
    {
        $position_marker_character = "*";
        $output = "";

        if ($length == 0)
            return "";
        elseif ($length == 1)
            return "1";
        elseif ($length == 2)
            return "*2";
        else
        {
            $output = "*3" . $position_marker_character;
            $last_position_number = 3;
            $i = 0;
            while (strlen($output) < $length)
            {
                $i++;
                $position_number = strlen($output) + strlen(strval($last_position_number)) + 1;
                if (strlen(strval($position_number)) > strlen(strval($last_position_number))) {
                    $position_number += 1;
                }
                $token = strval($position_number) . $position_marker_character;
                $remaining_length = $length - strlen($output);
                if ($remaining_length < strlen($token) + strlen($output)) {
                    $token = substr($token, 0, $remaining_length);
                }
                if($echo)
                {
                    echo $output . $token;

                }
                else
                {
                    $output = $output . $token;
                }
            }
            return $output;

        }

    }
}

?>
