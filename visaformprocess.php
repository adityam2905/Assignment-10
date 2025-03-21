<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['country'] ?? '';

    $messages = [
        'USA' => 'Visa required for most applicants.',
        'Canada' => 'Visa required unless you have an eTA.',
        'India' => 'Visa required before travel.',
        'UK' => 'Visa depends on the duration of stay.',
        'Australia' => 'eVisa available for eligible travelers.'
    ];

    if (array_key_exists($country, $messages)) {
        echo "<p>{$messages[$country]}</p>";
    } else {
        echo "<p class='error'>Invalid country selection.</p>";
    }
}
?>

</body>
</html>