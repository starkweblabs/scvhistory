$svc = Craft::$app->getEntries();

// The Santa Clarita Valley Signal
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'The Santa Clarita Valley Signal';
$entry->slug = 'the-santa-clarita-valley-signal';
$entry->setFieldValues([
    'dateFounded' => '2019',
    'orgAliases' => 'The Newhall Signal, The Mighty Signal, TMS, Newhall Signal and Saugus Enterprise',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: The Santa Clarita Valley Signal\n";
} else {
    echo "FAILED: The Santa Clarita Valley Signal - " . json_encode($entry->getErrors()) . "\n";
}

// SCVHistory.com — Santa Clarita Valley History
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'SCVHistory.com — Santa Clarita Valley History';
$entry->slug = 'scvhistory-com-santa-clarita-valley-history';
$entry->setFieldValues([
    'dateFounded' => '1997–present',
    'orgAliases' => '',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: SCVHistory.com — Santa Clarita Valley History\n";
} else {
    echo "FAILED: SCVHistory.com — Santa Clarita Valley History - " . json_encode($entry->getErrors()) . "\n";
}

// Henry Mayo Newhall Memorial Hospital
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Henry Mayo Newhall Memorial Hospital';
$entry->slug = 'henry-mayo-newhall-memorial-hospital';
$entry->setFieldValues([
    'dateFounded' => '1975',
    'orgAliases' => 'Henry Mayo, HMNMH, Hillside Community Hospital',
    'orgAddress' => '23845 McBean Parkway Santa Clarita, California 91355',
    'orgWebsite' => 'https://HenryMayo.com',
    'orgWikipediaUrl' => 'https://en.wikipedia.org/wiki/Henry_Mayo_Newhall_Memorial_Hospital',
    'orgLegacyUrl' => '',
    'orgLat' => '34.397778',
    'orgLng' => '-118.553333',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Henry Mayo Newhall Memorial Hospital\n";
} else {
    echo "FAILED: Henry Mayo Newhall Memorial Hospital - " . json_encode($entry->getErrors()) . "\n";
}

// Rancho San Francisco
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Rancho San Francisco';
$entry->slug = 'rancho-san-francisco';
$entry->setFieldValues([
    'dateFounded' => 'January 22, 1839',
    'orgAliases' => 'Rancho de San Francisco Rancho San Francisco Xavier',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Rancho San Francisco\n";
} else {
    echo "FAILED: Rancho San Francisco - " . json_encode($entry->getErrors()) . "\n";
}

// Rancho Camulos
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Rancho Camulos';
$entry->slug = 'rancho-camulos';
$entry->setFieldValues([
    'dateFounded' => 'c. 1839',
    'orgAliases' => 'Camulos Ranch, Camp Camulos',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Rancho Camulos\n";
} else {
    echo "FAILED: Rancho Camulos - " . json_encode($entry->getErrors()) . "\n";
}

// Mission San Gabriel Arcángel
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Mission San Gabriel Arcángel';
$entry->slug = 'mission-san-gabriel-arcangel';
$entry->setFieldValues([
    'dateFounded' => 'September 8, 1771',
    'orgAliases' => 'San Gabriel Mission',
    'orgAddress' => '428 S Mission Dr, San Gabriel, CA 91776',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => 'sangabrielmission.org',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Mission San Gabriel Arcángel\n";
} else {
    echo "FAILED: Mission San Gabriel Arcángel - " . json_encode($entry->getErrors()) . "\n";
}

// Mission San Francisco de Asís
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Mission San Francisco de Asís';
$entry->slug = 'mission-san-francisco-de-asis';
$entry->setFieldValues([
    'dateFounded' => 'June 29, 1776',
    'orgAliases' => '',
    'orgAddress' => '3321 16th St, San Francisco, CA 94114',
    'orgWebsite' => 'missiondolores.org',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Mission San Francisco de Asís\n";
} else {
    echo "FAILED: Mission San Francisco de Asís - " . json_encode($entry->getErrors()) . "\n";
}

// Mission Santa Cruz
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Mission Santa Cruz';
$entry->slug = 'mission-santa-cruz';
$entry->setFieldValues([
    'dateFounded' => 'September 25, 1791',
    'orgAliases' => '',
    'orgAddress' => '126 High St, Santa Cruz, CA 95060',
    'orgWebsite' => 'holycrosssantacruz.com',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Mission Santa Cruz\n";
} else {
    echo "FAILED: Mission Santa Cruz - " . json_encode($entry->getErrors()) . "\n";
}

// Rancho El Tejon
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Rancho El Tejon';
$entry->slug = 'rancho-el-tejon';
$entry->setFieldValues([
    'dateFounded' => '1843',
    'orgAliases' => '',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Rancho El Tejon\n";
} else {
    echo "FAILED: Rancho El Tejon - " . json_encode($entry->getErrors()) . "\n";
}

// Los Angeles Herald
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Los Angeles Herald';
$entry->slug = 'los-angeles-herald';
$entry->setFieldValues([
    'dateFounded' => '1873',
    'orgAliases' => 'L.A. Herald, Herald, Los Angeles Daily Herald',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Los Angeles Herald\n";
} else {
    echo "FAILED: Los Angeles Herald - " . json_encode($entry->getErrors()) . "\n";
}

// Historical Society of Southern California
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Historical Society of Southern California';
$entry->slug = 'historical-society-of-southern-california';
$entry->setFieldValues([
    'dateFounded' => '1883',
    'orgAliases' => '',
    'orgAddress' => '',
    'orgWebsite' => 'http://socalhistory.org',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Historical Society of Southern California\n";
} else {
    echo "FAILED: Historical Society of Southern California - " . json_encode($entry->getErrors()) . "\n";
}

// Santa Clarita Valley Water
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Santa Clarita Valley Water';
$entry->slug = 'santa-clarita-valley-water';
$entry->setFieldValues([
    'dateFounded' => '1913',
    'orgAliases' => 'Newhall Water Company, Newhall County Water District, Newhall Water System, Valencia Water Company, Santa Clarita Water Division, Newhall County Water District, Castaic Lake Water Agency, SCV Water',
    'orgAddress' => '23780 North Pine Street, Santa Clarita, CA 91322',
    'orgWebsite' => '23780 North Pine Street, Santa Clarita, CA 91322',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Santa Clarita Valley Water\n";
} else {
    echo "FAILED: Santa Clarita Valley Water - " . json_encode($entry->getErrors()) . "\n";
}

// The City of Santa Clarita
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'The City of Santa Clarita';
$entry->slug = 'city-of-santa-clarita';
$entry->setFieldValues([
    'dateFounded' => 'December 15, 1987',
    'orgAliases' => 'SCV',
    'orgAddress' => '23920 Valencia Blvd, Santa Clarita, CA 91355',
    'orgWebsite' => 'https://www.santa-clarita.com',
    'orgWikipediaUrl' => 'https://en.wikipedia.org/wiki/Santa_Clarita,_California',
    'orgLegacyUrl' => '',
    'orgLat' => '34.3917',
    'orgLng' => '-118.5426',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: The City of Santa Clarita\n";
} else {
    echo "FAILED: The City of Santa Clarita - " . json_encode($entry->getErrors()) . "\n";
}

// Santa Clarita Valley Chamber of Commerce
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('organizations')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title = 'Santa Clarita Valley Chamber of Commerce';
$entry->slug = 'santa-clarita-valley-chamber-of-commerce';
$entry->setFieldValues([
    'dateFounded' => '',
    'orgAliases' => 'Newhall-Saugus-Valencia Chamber of Commerce; SCV Chamber',
    'orgAddress' => '',
    'orgWebsite' => '',
    'orgWikipediaUrl' => '',
    'orgLegacyUrl' => '/scvhistory/lw2102.htm',
    'orgLat' => '',
    'orgLng' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Santa Clarita Valley Chamber of Commerce\n";
} else {
    echo "FAILED: Santa Clarita Valley Chamber of Commerce - " . json_encode($entry->getErrors()) . "\n";
}
echo "Done.\n";