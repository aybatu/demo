<?php
// composer autoload
require __DIR__ . '/vendor/autoload.php';
// if you are not using composer
// require_once 'path/to/algolia/folder/autoload.php';

$client = Algolia\AlgoliaSearch\SearchClient::create(
    'MU1P63L0NS',
    '51b40efbbb843300261581c5e1647928'
  );
  
  $index = $client->initIndex('products');
  $index->setSettings(array(
      "searchableAttributes" => [
          "name",
          "price",
          "description"
      ]
  ));

  $index->setSettings([
    'attributesForFaceting' => [
      $brand
    ]
  ]);

?>