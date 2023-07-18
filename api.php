
<?php


    if (isset($_POST["timestamp"])) {
        $timestamp = $_POST["timestamp"];
        $convertedDate = convertTimestampToMySQLDate($timestamp);
        
            echo $convertedDate;
       
    }  
    
    
    function convertTimestampToMySQLDate($timestamp) {
    return date("Y-m-d H:i:s", $timestamp);
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Timestamp to Date Converter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Timestamp to Date Converter</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST'>
        <label for="timestamp">Timestamp:</label>
        <input type="text" name="timestamp" id="timestamp" required>
        <input type="submit" value="Convert" name="submit">
    </form>
</body>
</html>