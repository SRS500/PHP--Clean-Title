function cleanTitle($str) {
    $str = trim($str);
    $chars = array('!', '@', '#', '$', '%', '^', '&', '*', '+', '=', '[', ']', '\\', ';', ',', '.', '/', '{', '}', '|', ':', '<', '>', '?', '~', '`', '\'', '"', ' ', '-', '(', ')', '�', '�');
    $str = str_replace($chars, "-", trim($str));
    $str = preg_replace("(-+)", "-", $str);
    //$str = filter_var($str, FILTER_SANITIZE_URL);
    if ($str == "-") {
        return $str;
    }
    $str = trim($str, "-");
    $str = strtolower($str);
    return $str;
}

