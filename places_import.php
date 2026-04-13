$svc = Craft::$app->getEntries();
$db = Craft::$app->getDb();

$places = [
    ['title' => 'Lyons Station Stagecoach Stop', 'slug' => 'lyons-station-stagecoach-stop', 'address' => '23287 Sierra Highway, Newhall, California 91321', 'lat' => '34.362700', 'lng' => '-118.507400', 'established' => 'c. 1854', 'aliases' => "Lyon\'s Station, Hart\'s Station, Wiley\'s Station", 'wikipedia' => '', 'legacy' => ''],
    ['title' => "Beale\'s Cut Stagecoach Pass", 'slug' => 'beales-cut-stagecoach-pass', 'address' => 'Sierra Highway and Clampitt Road, Santa Clarita, CA 91321', 'lat' => '34.3448', 'lng' => '-118.5084', 'established' => 'March 5, 1864', 'aliases' => '', 'wikipedia' => '', 'legacy' => '/st_lat110440.htm'],
    ['title' => 'Newhall Pass Interchange', 'slug' => 'newhall-pass-interchange', 'address' => '', 'lat' => '34.335', 'lng' => '-118.508', 'established' => '1973', 'aliases' => '', 'wikipedia' => 'https://en.wikipedia.org/wiki/Newhall_Pass', 'legacy' => ''],
];

foreach ($places as $p) {
    $entry = new \craft\elements\Entry();
    $entry->sectionId = $svc->getSectionByHandle('places')->id;
    $entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('place')->id;
    $entry->title = $p['title'];
    $entry->slug = $p['slug'];
    $entry->setFieldValues([
        'placeAddress' => $p['address'],
        'placeLat' => $p['lat'],
        'placeLng' => $p['lng'],
        'dateEstablished' => $p['established'],
        'placeAliases' => $p['aliases'],
        'placeWikipediaUrl' => $p['wikipedia'],
        'placeLegacyUrl' => $p['legacy'],
    ]);
    if (Craft::$app->getElements()->saveElement($entry)) {
        // Force title into elements table
        $db->createCommand("UPDATE elements_sites SET title='" . addslashes($p['title']) . "' WHERE elementId=" . $entry->id)->execute();
        echo "Saved: " . $p['title'] . "\n";
    } else {
        echo "FAILED: " . $p['title'] . " - " . json_encode($entry->getErrors()) . "\n";
    }
}
echo "Done.\n";
