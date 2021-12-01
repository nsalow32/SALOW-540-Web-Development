<!DOCTYPE html>
<html lang="en">
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

    <main>
      <form>
        <label for="search">Search</label>
        <input id="search" type="search" />
        <button id="buttonSearch">Go</button> <br /><br />
      </form>
      <div class="out"></div>
    </main>

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

            echo json_encode($embed_url_array);

        }
    ?>

    <script>
      let APIKEY = "EMnm5fpUKYhxn6dIpYuXzCW5s6YiEtyb";

      document.addEventListener("DOMContentLoaded", loadImages);

      function loadImages() {
        document.getElementById("buttonSearch").addEventListener("click", ev => {
          ev.preventDefault(); //no page total reloading
          let url = `https://api.giphy.com/v1/gifs/search?api_key=${APIKEY}&limit=50&rating=g&offset=0&q=`;
          
          let str = document.getElementById("search").value.trim();
          url = url.concat(str);
          console.log(url);
          fetch(url)
            .then(response => response.json())
            .then(content => {
              console.log(content.data);
              console.log("META", content.meta);
              let fig = document.createElement("figure");
              let img = document.createElement("img");
              let fc = document.createElement("figcaption");
              img.src = content.data[5].images.downsized.url;
              img.alt = content.data[5].title;
              fc.textContent = content.data[5].title;
              fig.appendChild(img);
              let out = document.querySelector(".out");
              out.insertAdjacentElement("afterbegin", fig);
              document.querySelector("#search").value = "";
            })

            .catch(err => {
              console.error(err);
    
            });
        });
      }

        var api = "http://api.giphy.com/v1/gifs/search?";
        var apiKey = "&api_key=EMnm5fpUKYhxn6dIpYuXzCW5s6YiEtyb";
        var query = "&q=highland+cow";

        function gotData(giphy) {
            for (var i = 0; i < giphy.data.length; i++) {
                createImg(giphy.data[i].images.original.url);
            }
        }
    </script>
  </body>
</html>