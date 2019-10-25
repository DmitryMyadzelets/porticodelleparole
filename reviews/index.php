<?php
// Debugging in Browser
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html lang="it">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="private">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>
        Google Reviews - Associazione Portico delle Parole
    </title>

</head>

<body style="padding: 0" class="reviews">

<?php

// Returns Google reviews json object
function request($config) {
  $url = 'https://maps.googleapis.com/maps/api/place/details/json';

  $url .= '?';
  $url .= http_build_query([
    'place_id' => $config['placeId'],
    'key' => $config['key'],
    'fields' => implode(',', [
      'rating',
      'user_ratings_total',
      'reviews'
    ])
  ]);

  $json = file_get_contents($url);
  $res = json_decode($json, true);
  return $res['result'];
}


function renderReview($review) {
  echo '<div class=\'google\' itemprop="review" itemscope itemtype="http://schema.org/Review">';
    echo sprintf('<h3 itemprop=\'author\'>%s</h3>', $review['author_name']);
    echo '<div class="review_photo">';
      echo '<div class="stretchy-wrapper">';
        echo '<div>';
            echo sprintf('<img src="%s" alt="Foto di %s"/>', $review['profile_photo_url'], $review['author_name']);
        echo '</div>';
      echo '</div>';
    echo '</div>';
    echo '<div itemprop="reviewbody">';
      echo sprintf('<p>%s</p>', $review['text']);
    echo '</div>';
  echo '</div>';
}


function getReviews() {
  $config = json_decode(file_get_contents('.config.json'), true);

  $fnTimer = 'timer.json';
  $fnReviews = 'google-reviews.json';

  $today = date('d');
  // Which day we got reviews from Google?
  $day = json_decode(file_get_contents($fnTimer), true)['day'];

  function saved($fname) {
    $json = file_get_contents($fname);
    return json_decode($json, true);
  }

  if ($today !== $day) {
    // Get reviews from Google again
    $reviews = request($config)['reviews'];
    if (is_array($reviews)) {
      // Save the data
      file_put_contents($fnReviews, json_encode($reviews));
      // Save the day
      file_put_contents($fnTimer, json_encode(array('day'=>$today)));
      return $reviews;
    } else {
      return saved($fnReviews);
    }
  } else {
    // Get saved reviews
    return saved($fnReviews);
  }
}


$reviews = getReviews();

if (is_array($reviews)) {
  foreach ($reviews as $key => $review) {
    renderReview($review);
  }
}
?>

</body>
</html>
