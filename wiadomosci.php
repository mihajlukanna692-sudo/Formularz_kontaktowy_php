<?php
echo "<link rel='stylesheet' href='style.css'>";

if (file_exists("dane.txt")) {
    $linie = file("dane.txt");

    echo "<table border='1'>";
    echo "<tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Email</th>
            <th>Temat</th>
            <th>Treść</th>
          </tr>";

    foreach ($linie as $linia) {
        $dane = explode(" | ", $linia);

        echo "<tr>";
        echo "<td>" . $dane[0] . "</td>";
        echo "<td>" . $dane[1] . "</td>";
        echo "<td>" . $dane[2] . "</td>";
        echo "<td>" . $dane[3] . "</td>";
        echo "<td>" . $dane[4] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<a href='index.html'>Powrót do formularza</a>";
}
?>