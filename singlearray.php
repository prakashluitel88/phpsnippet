<?php
// Sample Integer Array
echo "Input Example Array ('[[6,7,[8]],9]')" ;
$data_array = array("[[6,7,[8]],9]");

$data_json = json_decode(implode(" ", $data_array));
integerArrayFlatten($data_json, $final_array);

// Get Final array in flattened form
echo "<br/><br/>Output";
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