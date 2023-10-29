<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <h1>Raw Form Data</h1>
    <pre>
        Array
        <?php
        print_r($_POST);
        ?>
    </pre>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h1>Form Data</h1>";
        echo "<p><strong>Company Name:</strong> " . $_POST["position"] . "</p>";
        echo "<p><strong>Company ID:</strong> " . $_POST["CompanyID"] . "</p>";
        echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
        echo "<p><strong>City:</strong> " . $_POST["city"] . "</p>";
        echo "<p><strong>Zipcode:</strong> " . $_POST["zipcode"] . "</p>";
        echo "<p><strong>Phone (optional):</strong> " . $_POST["tel"] . "</p>";
        echo "<p><strong>Email (optional):</strong> " . $_POST["email"] . "</p>";
        echo "<p><strong>More than one location:</strong> " . (isset($_POST["multiple_locations"]) ? "Yes" : "No") . "</p>";
    }
    ?>
</body>
</html>
