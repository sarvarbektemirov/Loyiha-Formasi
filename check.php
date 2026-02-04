<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $a = trim($_POST['a'] ?? '');
    $c = trim($_POST['c'] ?? '');
    $d = trim($_POST['d'] ?? '');
    $e = trim($_POST['e'] ?? '');
    $fileName = $_FILES['b']['name'] ?? '';

    if ($a !== '' && $c !== '' && $d !== '' && $e !== '' && $fileName !== '') {

        $a = filter_input(INPUT_POST, "a", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $c = filter_input(INPUT_POST, "c", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $d = filter_input(INPUT_POST, "d", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $e = filter_input(INPUT_POST, "e", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Upload folder
        $uploadDir = __DIR__ . "/upload/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $safeFileName = basename($_FILES["b"]["name"]);
        $targetFile = $uploadDir . $safeFileName;

        if (move_uploaded_file($_FILES["b"]["tmp_name"], $targetFile)) {
            echo "<h2>✅ Fayl muvaffaqiyatli yuklandi</h2>";
            echo "Loyiha nomi: $a <br>";
            echo "Byudjet: $c <br>";
            echo "Tugallanish sanasi: $d <br>";
            echo "Tavsif: $e <br>";
            echo "Fayl: $safeFileName <br>";
        } else {
            echo "❌ Faylni saqlashda xatolik!";
            include_once("index.php");
        }

    } else {
        echo "❌ Formadagi ma'lumotlar to'liq emas.<br><br>";
        include_once("index.php");
    }

} else {
    echo "Form yuborilmadi.";
}
