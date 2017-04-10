<?php
// Sample Integer Array
$data_array = array("[[1,2,[3]],4]");

$data_json = json_decode(implode(" ", $data_array));
integerArrayFlatten($data_json, $final_array);

// Get Final array in flattened form
echo '<pre>';
print_r($final_array);

/* Function to flatten Integer Array */
function integerArrayFlatten($data_json, &$tempCopy)
{
    array_walk_recursive($data_json, function($temp) use (&$tempCopy)
    {
        $tempCopy[] = $temp;
    });
}