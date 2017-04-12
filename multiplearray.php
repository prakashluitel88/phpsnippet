<?php
// Sample Array data
echo "Input Example Arrays (Multiple arrays handling)<br/>";
echo "array('[[6,7,[8]],9]','[[3,4,[5]],6, [7]]')";

$data_array = array(
    "[[1,2,[3]],4]",
    "[[1,2,[3]],4, [5]]"
);

// Recursive call of $data_array to get flatten array
// Output
echo "<br/><br/>Output";
foreach ($data_array as $arr) {
    $final_array = array();
    $data_json   = json_decode($arr);
    
    integerArrayFlatten($data_json, $final_array);
    
    // Get Final array in flattened form
    echo '<pre>';
    print_r($final_array);
}


/* Function to flatten Integer Array */
function integerArrayFlatten($data_json, &$tempCopy)
{
    array_walk_recursive($data_json, function($temp) use (&$tempCopy)
    {
        $tempCopy[] = $temp;
    });
}