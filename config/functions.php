<?php
class API {
    public function setHash($string)
    {
        return json_encode([
            'success' => true,
            'result' => [
                'entered_key' => $string,
                'hash' => hash('sha256', $string)
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    public function error()
    {
        return json_encode([
            'error' => "Please, enter key parametr for get hash key"
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

}
?>