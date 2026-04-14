$svc = Craft::$app->getEntries();

// Delete existing entry with this slug if present
$existing = \craft\elements\Entry::find()->section('places')->slug('lyons-station')->one();
if($existing) { Craft::$app->getElements()->deleteElement($existing); }

$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('places')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('place')->id;
$entry->title = 'Lyons Station Stagecoach Stop';
$entry->slug = 'lyons-station';
$eraIds = []; $periodIds = []; $hoodIds = [];
$cat = \craft\elements\Category::find()->group('historicalEra')->title('American Frontier (1848–1876)')->one(); if($cat) $eraIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1850-1899')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('neighborhood')->title('Newhall')->one(); if($cat) $hoodIds[] = $cat->id;

$entry->setFieldValues([
    'body' => 'Lyon\'s Station was a stage and wagon road stop established circa 1854 on the road connecting Los Angeles to Fort Tejon, situated on the west side of the road at what is now the present-day entry to Eternal Valley Memorial Park at the intersection of Sierra Highway and Newhall Avenue. It served as a waypoint for the heavy traffic moving between Southern California and the San Joaquin Valley during the cattle drive era and the subsequent stage and freight period. The station is depicted on an 1875 Los Angeles County Surveyor\'s map by L. Seebold showing the eastern boundary of Rancho San Francisco and the surrounding Oil Region of San Fernando. The map shows the main Lyon\'s Station building on the west side of the road and two additional structures on the east side, one of which is believed to have been the station master\'s residence. From Lyon\'s Station the wagon road turned north at the present-day intersection of Sierra Highway and Newhall Avenue, following approximately the course of today\'s Newhall Avenue through the mountains toward Fort Tejon. The station predates the establishment of the town of Newhall and represents one of the earliest commercial waypoints in the Santa Clarita Valley\'s recorded history.',
    'placeAddress' => '23287 Sierra Highway, Newhall, California 91321',
    'placeLat' => '34.362700',
    'placeLng' => '-118.507400',
    'dateEstablished' => 'c. 1854',
    'placeAliases' => 'Lyon\'s Station, Hart\'s Station, Wiley\'s Station',
    'placeChlNumber' => '688',
    'placeChlUrl' => 'https://www.californiahistoricallandmarks.com/landmarks/chl-688',
    'placeWikipediaUrl' => 'https://en.wikipedia.org/wiki/Lyons_Station_Stagecoach_Stop',
    'placeLegacyUrl' => '',
    'historicalEra' => $eraIds,
    'historicalPeriod' => $periodIds,
    'neighborhood' => $hoodIds,
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Lyons Station Stagecoach Stop\n";
} else {
    echo "FAILED: Lyons Station Stagecoach Stop - " . json_encode($entry->getErrors()) . "\n";
}

// Delete existing entry with this slug if present
$existing = \craft\elements\Entry::find()->section('places')->slug('beales-cut-stagecoach-pass')->one();
if($existing) { Craft::$app->getElements()->deleteElement($existing); }

$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('places')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('place')->id;
$entry->title = 'Beale\'s Cut Stagecoach Pass';
$entry->slug = 'beales-cut-stagecoach-pass';
$eraIds = []; $periodIds = []; $hoodIds = [];
$cat = \craft\elements\Category::find()->group('historicalEra')->title('American Frontier (1848–1876)')->one(); if($cat) $eraIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1850-1899')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1900-1919')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('neighborhood')->title('Newhall')->one(); if($cat) $hoodIds[] = $cat->id;

$entry->setFieldValues([
    'body' => 'Beale\'s Cut was originally created in 1859 by Charles H. Brindley, Andrés Pico, and James R. Vineyard, who were awarded a twenty-year state contract to maintain the turnpike and collect tolls. It pierced the "San Fernando Mountain" — the most formidable obstacle along the Fort Tejon Road, the main inland route from Los Angeles northward — creating a passable slot between the San Gabriel and Santa Susana mountain ranges. The Butterfield Overland Mail immediately began using it.\n\nIn 1861, Edward Beale was appointed federal Surveyor General of California and Nevada by President Abraham Lincoln. He challenged Andrés Pico\'s loyalty to the new administration and was awarded toll rights in 1863, with Chinese immigrant labor doing the bulk of the deepening work. The cut reached 90 feet and became permanently known as Beale\'s Cut.\n\nThe pass suffered major damage in the winter of 1861–62, when soldiers under Major Theodore Coult of the Fifth California Volunteer Infantry repaired it so ammunition wagons could reach Fort Yuma.\nBeale\'s Cut served as a primary transportation corridor through the Perkins articles\' period — 1870s freight traffic, Southern Pacific construction crews, and stagecoach lines all passed through here. Perkins references it directly in The Birth of Newhall as the route through which passengers and freight were shunted during tunnel construction.\n\nThe pass was a popular silent-film location used by John Ford (from at least 1917 through the late 1930s) and D.W. Griffith. Tom Mix\'s famous jump over the cut appears in Ford\'s 1923 film Three Jumps Ahead, though whether Mix performed the stunt himself remains disputed. Brief appearances also occur in The Devil Horse (1932) and Stagecoach (1939).\n\nIn 1910, the 435-foot Newhall Auto Tunnel was built a quarter-mile northwest of the cut, ending its transportation role. The tunnel was replaced in 1938 when the California Division of Highways removed the rock above it to create what became Sierra Highway (formerly US Highway 6, then State Route 14).\n\nThe cut remains visible from Sierra Highway, about one mile north of the Old Road intersection, between the highway and the freeway — but is fenced off and difficult to see clearly.',
    'placeAddress' => 'Sierra Highway and Clampitt Road, Santa Clarita, CA 91321',
    'placeLat' => '34.3448',
    'placeLng' => '-118.5084',
    'dateEstablished' => 'March 5, 1864',
    'placeAliases' => 'Fremont Pass, San Fernando Pass, Newhall Cut',
    'placeChlNumber' => '1006',
    'placeChlUrl' => 'https://www.californiahistoricallandmarks.com/landmarks/chl-1006',
    'placeWikipediaUrl' => 'https://en.wikipedia.org/wiki/Beales_Cut_Stagecoach_Pass',
    'placeLegacyUrl' => '/st_lat110440.htm',
    'historicalEra' => $eraIds,
    'historicalPeriod' => $periodIds,
    'neighborhood' => $hoodIds,
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Beale\'s Cut Stagecoach Pass\n";
} else {
    echo "FAILED: Beale\'s Cut Stagecoach Pass - " . json_encode($entry->getErrors()) . "\n";
}

// Delete existing entry with this slug if present
$existing = \craft\elements\Entry::find()->section('places')->slug('newhall-pass-interchange')->one();
if($existing) { Craft::$app->getElements()->deleteElement($existing); }

$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('places')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('place')->id;
$entry->title = 'Newhall Pass interchange';
$entry->slug = 'newhall-pass-interchange';
$eraIds = []; $periodIds = []; $hoodIds = [];
$cat = \craft\elements\Category::find()->group('historicalEra')->title('Postwar Boom (1945–1965)')->one(); if($cat) $eraIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1970-1979')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1980-1989')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('1990-1999')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('2000-2009')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('2010-2019')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('historicalPeriod')->title('2020-Present')->one(); if($cat) $periodIds[] = $cat->id;
$cat = \craft\elements\Category::find()->group('neighborhood')->title('Newhall')->one(); if($cat) $hoodIds[] = $cat->id;

$entry->setFieldValues([
    'body' => 'The Newhall Pass interchange — officially the Clarence Wayne Dean Memorial Interchange — is the major freeway junction where Interstate 5 (Golden State Freeway) meets State Route 14 (Antelope Valley Freeway) at the mouth of Newhall Pass, at the northern edge of the City of Los Angeles near its boundary with Santa Clarita. It is the primary gateway between the Santa Clarita Valley and the Los Angeles Basin and one of the most strategically critical transportation chokepoints in Southern California. The underlying roadway follows the historic corridor of U.S. Route 99, which carried commercial and passenger traffic through the pass for decades before the freeway era.\n\nConstruction of the modern interchange began in the late 1960s. The interchange was still under construction when the February 9, 1971 San Fernando earthquake struck. Wikipedia A total collapse of the southbound I-5 to northbound SR-14 overpass occurred, which triggered the additional collapse of the intersecting southbound SR-14 to southbound I-5 overpass, as that connector bridge was directly beneath. Wikipedia Both bridges fell directly onto the southbound I-5 truck bypass. Wikipedia The interchange was completely rebuilt and reopened in 1973. Metroprimaryresources\n\nThe January 17, 1994 Northridge earthquake caused the southbound SR-14 to northbound I-5 connector to collapse and a bridge crossing San Fernando Road farther north along I-5 to partially fail. It also caused the southbound SR-14 to southbound I-5 overpass to collapse directly onto the main I-5 freeway and the southbound I-5 truck bypass — nearly exactly as had happened in 1971. Wikipedia The interchange is officially named in memory of Los Angeles Police officer Clarence Wayne Dean, who was killed when the interchange collapsed during the 1994 Northridge earthquake. Detailed Pedia Reconstruction following the 1994 collapse was completed ahead of schedule. In 2013, Caltrans completed an elevated HOV direct connector ramp linking the I-5 HOV lanes to the existing SR-14 HOV lanes.',
    'placeAddress' => '',
    'placeLat' => '34.335',
    'placeLng' => '-118.508',
    'dateEstablished' => '1973',
    'placeAliases' => '',
    'placeChlNumber' => '',
    'placeChlUrl' => '',
    'placeWikipediaUrl' => 'https://en.wikipedia.org/wiki/Newhall_Pass',
    'placeLegacyUrl' => '',
    'historicalEra' => $eraIds,
    'historicalPeriod' => $periodIds,
    'neighborhood' => $hoodIds,
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Newhall Pass interchange\n";
} else {
    echo "FAILED: Newhall Pass interchange - " . json_encode($entry->getErrors()) . "\n";
}
echo "Done.\n";