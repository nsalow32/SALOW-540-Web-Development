<!DOCTYPE html>
<html lang = "en">

<head>
    <title>Salow ACSG 540 Web Development GIPHY Final PHP</title>
    <meta charset = "utf-8" />
    <link rel="icon" href="data:,">

    <link href="./style.css" type = "text/css" rel = "stylesheet"/>
    <script type = "text/javascript" src = "./index.js">
            </script>
</head>

<body>
    <header>GIPHY Images <br />
        <p class="subhead"> Cows are the best. By Nicole S. </p>
    </header>

    <?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $api_instance = new GPH\Api\DefaultApi();
    $api_key = "EMnm5fpUKYhxn6dIpYuXzCW5s6YiEtyb"; // string | Giphy API Key.
    $q = "highland cows"; // string | Search query term or prhase.
    $limit = 50; // int | The maximum number of records to return.
    $offset = 0; // int | An optional results offset. Defaults to 0.
    $rating = "g"; // string | Filters results by specified rating.
    $lang = "en"; // string | Specify default country for regional content; use a 2-letter ISO 639-1 country code. See list of supported languages <a href = \"../language-support\">here</a>.
    $fmt = "json"; // string | Used to indicate the expected response format. Default is Json.

    try {
        $result = $api_instance->gifsSearchGet($api_key, $q, $limit, $offset, $rating, $lang, $fmt);
        //print_r($result);//
        echo '<iframe src="' .$result["data"][0]["embed_url"].'" wdith="480" height="300" frameBorder="0" class ="giphy-embed" loading = "lazy" allowFullScreen></iframe>';

    } catch (Exception $e) {
        echo 'Exception when calling DefaultApi->gifsSearchGet: ', $e->getMessage(), PHP_EOL;
    }
    ?>