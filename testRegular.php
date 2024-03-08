<?php

//function chooseTheNumbers(string $number)
//{
//    return preg_replace('/\D+/', '', $number);
//}
//echo chooseTheNumbers('+380-98-92-190-32');


function translateWords()

{
    $results = file_get_contents('https://www.oed.com/search/dictionary/?scope=Entries&q=start');

    preg_match_all("/<div class=\"snippet\">'(.*?)'<\/div>/ius", $results, $results_list);


    foreach ($results_list as $results){
        print_r($results);
    }
}

translateWords();

//
//$htmlContent = '<div id="dataDiv">
//                    <span class="data">Data 1</span>
//                    <span class="data">Data 2</span>
//                    <span class="other">Other content</span>
//                    <span class="data">Data 3</span>
//                </div>';
//
//// Define a regular expression pattern to match the data you want to extract
//$regexPattern = '/<span class="data">(.*?)<\/span>/';
//
//// Use the preg_match_all function to extract the data using the regular expression pattern
//if (preg_match_all($regexPattern, $htmlContent, $matches)) {
//    // Display the extracted data
//    foreach ($matches[1] as $match) {
//        echo $match . "\n";
//    }
//} else {
//    echo "No matches found.\n";
//}


//function parsHTML()
//{
//    $key_words = file_get_contents('https://www.mykeyworder.com/keywords?language=en&tags=summer');
//
//    preg_match_all("/name='keywordselect\[]' value='(.*?)'/", $key_words, $key_words_list);
//
//    foreach ($key_words_list as $key_words){
//        print_r($key_words);
//    }
//}
//
//parsHTML();




