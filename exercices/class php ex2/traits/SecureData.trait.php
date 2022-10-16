<?php

namespace traits;

trait SecureData
{
    public function protectData(string $dataValid):string{
        $dataValid = htmlspecialchars($dataValid);
        $dataValid = trim($dataValid);
        $dataValid = stripslashes($dataValid);
        return $dataValid;
    }
}