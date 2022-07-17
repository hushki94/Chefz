<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Task</title>
</head>
<body>
<div>
    <h1>levenshtein distance </h1>
    <p>Levenshtein distance: that have 3 possible operators: insert, delete or substitution operations. The function should consider all possibilities but should not consider the same part twice, and report the smallest possible distance.</p>
<form action="./Chefz.php" method="post">
<label for="1">Enter your first string:</label>
<br>
<input type="text" style="margin:30px;" name="lev_1">
<br>
<label for="2">Enter your second string:</label>
<br>
<input type="text" style="margin:30px;" name="lev_2">
<br>
<button type="submit" style="margin:30px;">Enter</button>
</form>
</div>

<div>
    <h1>Hamming distance </h1>
    <p>Hamming distance that only has substitute operations (ex. substitute letter X with letter Y).</p>
<form action="./Chefz.php" method="post">
<label for="1">Enter your first string:</label>
<br>
<input type="text" style="margin:30px;" name="ham_1">
<br>
<label for="2">Enter your second string:</label>
<br>
<input type="text" style="margin:30px;" name="ham_2">
<br>
<button type="submit" style="margin:30px;">Enter</button>
</form>
</div>

</body>
</html>

<!-- 
To run this code please follow these instructions:
     1. Clone this code from the github
     2. Create new folder 
     3. Inside the new folder, open the terminal and clone the url that you copy from the github in step 1 
     4. After the content installed run this command : php -S localhost:8000
     5. You can submit 2 forms ( hamming and levenshtein ) and the result will appear.
-->
