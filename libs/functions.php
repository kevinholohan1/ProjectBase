<?php
    
    /**
     * Replace the last string occurance of a needle in a haystack
     * 
     * @param type $search
     * @param type $replace
     * @param type $subject
     * @return type
     */
function str_lreplace($search, $replace, $subject)
{
    $pos = strrpos($subject, $search);

    if($pos !== false)
    {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }

    return $subject;
}
?>
