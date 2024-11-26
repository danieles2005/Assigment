<?php
if (isset($_GET['numbers']) && isset($_GET['threshold'])) {
    $numbers = escapeshellarg($_GET['numbers']);
    $threshold = escapeshellarg($_GET['threshold']);

    // Llamar al script de Python
    $command = "python3 bitwise_operations.py $numbers $threshold";
    $output = shell_exec($command);

    // Decodificar y mostrar los resultados
    $result = json_decode($output, true);

    if (isset($result['error'])) {
        echo "<p>Error: " . htmlspecialchars($result['error']) . "</p>";
    } else {
        echo "<h3>Results:</h3>";
        echo "<p>Bitwise AND: " . htmlspecialchars($result['bitwise_and']) . "</p>";
        echo "<p>Bitwise OR: " . htmlspecialchars($result['bitwise_or']) . "</p>";
        echo "<p>Bitwise XOR: " . htmlspecialchars($result['bitwise_xor']) . "</p>";
        echo "<p>Numbers greater than threshold: " . implode(", ", $result['filtered_numbers']) . "</p>";
    }
} else {
    echo "<p>Invalid input. Please go back and try again.</p>";
}
?>

