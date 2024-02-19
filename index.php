<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $url=$_GET['url']; //request a url
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $text = $url;
    }
    else{
        echo "Invalid URL provided check url";
        exit();
    }

    function mathpix($mathspix){
        $api_id = 'For api_id contact @spacenx1 telegram id premium api_id';
        $api_key = 'For api_key contact @spacenx1 telegram id premium api_key';
        if (!isset($api_id) || !isset($api_key)) {
            die('API credentials not set.');
        }
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mathpix.com/v3/text',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{"src": "'.$mathspix.'", "math_inline_delimiters": ["&", "&"], "rm_spaces": true}',
            CURLOPT_HTTPHEADER => array(
                'app_id: '. $api_id,
                'app_key: '.$api_key,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        //echo $response;
        $data=json_decode($response,true);
        $mathpixtext= $data['text'];
        $mathpix_html = '<!DOCTYPE html><html><head> <meta charset="utf-8"/> <meta name="viewport" content="width=device-width, initial-scale=1"/> <title>NX pro</title> <meta name="description" content=""/> <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css"/> <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.0/es5/tex-mml-chtml.min.js"></script></head><body> <div class="container" id="app"> <div class="box"> <div class="content"><div class="answer"><h4>Mathpix IMAGE TO TEXT</h4><br><br><!-- Your answer content goes here --><h4>Answer</h4><p>'.$mathpixtext.'</p></div> </div> </div> </div> </div> <script type="text/x-mathjax-config"> MathJax.Hub.Config({ config: ["MMLorHTML.js"], jax: ["input/TeX", "input/MathML", "output/HTML-CSS", "output/NativeMML"], extensions: ["tex2jax.js", "mml2jax.js", "MathMenu.js", "MathZoom.js"], TeX: { extensions: ["AMSmath.js", "AMSsymbols.js", "noErrors.js", "noUndefined.js"] } }); </script> <script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script> <script id="MathJax-script" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.0/es5/tex-mml-chtml.js"></script></body></html>';
        return $mathpix_html;
    }

    if(!empty($text) && isset($text)){
        $mathpix = mathpix($text);
        echo $mathpix;
    }else{
        echo "NO TEXT ARE THERE";
        exit();
    }
}
?>
