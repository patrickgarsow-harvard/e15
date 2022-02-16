<!doctype html>
<html lang='en'>

<head>
    <title>Patrick Garsow - E15 Project 1</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <h1>Project 1 - String Information Tool</h1>

                <form method="post" action="index.php">
                    <label for='string'>Enter a string</label>
                    <input type="text" id="string" name="string" required size="20"
                        placeholder="<?php echo $inputString;?>"><br>
                    <input type="submit" class="btn btn-primary" value="Process String">
                </form>
                <br>
                <h3><u>Detailed Results</u></h3>

                <p><strong>Is a Palindrome: </strong><?php echo palindromeAnalysis($inputString) ?></p>
                <p><strong>Vowel Count: </strong><?php echo vowelCount($inputString); ?></p>
                <br>
                <p><strong>Processed String: </strong><?php echo $inputString; ?></p>
                <p><strong>Qualified Character String: </strong><?php echo $alphaString; ?></p>
                <p><strong>String Length: </strong><?php echo $stringLength; ?></p>
                <p><strong>Reversed String: </strong><?php echo $alphaStringReversed; ?></p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>