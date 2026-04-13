$svc = Craft::$app->getEntries();

// Leon Worden
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Leon Worden';
$entry->slug = 'leon-worden';
$entry->setFieldValues([
    'fullName' => 'Leon Worden',
    'birthDate' => 'December 1962',
    'birthplace' => 'New Jersey, USA',
    'deathDate' => '',
    'burialPlace' => '',
    'occupation' => 'President & CEO, SCVTV; Journalist; Historian; Civic Leader; Television Producer',
    'authorBio' => 'Leon Worden is a Santa Clarita Valley journalist, historian, and civic leader who has dedicated his career to documenting and preserving the history of the community he has called home since 1970. A UCLA graduate and award-winning journalist, he served as editor of The Signal newspaper, founded SCVHistory.com, and today serves as President and CEO of SCVTV, the nonprofit public television service for the Santa Clarita Valley. Named the 2015 SCV Man of the Year, Worden remains one of the valley\'s most tireless advocates for local history, civic engagement, and community media.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Leon Worden\n";
} else {
    echo "FAILED: Leon Worden - " . json_encode($entry->getErrors()) . "\n";
}

// Jerry Reynolds
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Jerry Reynolds';
$entry->slug = 'jerry-reynolds';
$entry->setFieldValues([
    'fullName' => 'Jerry Reynolds',
    'birthDate' => 'July 16, 1937',
    'birthplace' => 'Torrance, California',
    'deathDate' => 'February 26, 1996',
    'burialPlace' => 'Eternal Valley Memorial Park, Newhall, California',
    'occupation' => 'Historian, Author, Museum Curator, Private Investigator',
    'authorBio' => 'Gerald G. "Jerry" Reynolds (1937–1996) was the Santa Clarita Valley\'s preeminent local historian, whose decades of research and writing established the documentary foundation for all subsequent study of the valley\'s history. A longtime Newhall resident, he helped organize the Santa Clarita Valley Historical Society, served as its founding museum curator, and contributed historical columns to The Signal newspaper for over two decades. His landmark 1992 volume, *Santa Clarita: Valley of the Golden Dream*, remains the most comprehensive history of the Santa Clarita Valley ever written.',
    'personLegacyUrl' => '/scvhistory/lw2184.htm',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/14716645/jerry-hugh-reynolds',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Jerry Reynolds\n";
} else {
    echo "FAILED: Jerry Reynolds - " . json_encode($entry->getErrors()) . "\n";
}

// Henry Mayo Newhall
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Henry Mayo Newhall';
$entry->slug = 'henry-mayo-newhall';
$entry->setFieldValues([
    'fullName' => 'Henry Mayo Newhall',
    'birthDate' => 'May 13, 1825',
    'birthplace' => 'Saugus, Massachusetts',
    'deathDate' => 'March 13, 1882',
    'burialPlace' => 'Cypress Lawn Memorial Park Colma, San Mateo County, California',
    'occupation' => 'Auctioneer; Land Developer; Railroad Investor',
    'authorBio' => 'Henry Mayo Newhall (1825–1882) was a Massachusetts-born entrepreneur who became one of the most consequential figures in early California history. After failing as a Gold Rush miner, he built a fortune as a San Francisco auctioneer before investing heavily in railroads, becoming a founder of the Southern Pacific Railroad. Between 1872 and 1875 he purchased five Mexican land grant ranchos throughout California, including 46,460 acres of Rancho San Francisco — the western half of what is now the Santa Clarita Valley. The town of Newhall bears his name; the town of Saugus bears the name of his Massachusetts birthplace.',
    'personLegacyUrl' => '/scvhistory/ap1335a.htm',
    'personWikipediaUrl' => 'https://en.wikipedia.org/wiki/Henry_Newhall',
    'personGraveUrl' => 'http://findagrave.com/memorial/5308/henry_mayo-newhall',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Henry Mayo Newhall\n";
} else {
    echo "FAILED: Henry Mayo Newhall - " . json_encode($entry->getErrors()) . "\n";
}

// Tiburcio Vasquez
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Tiburcio Vasquez';
$entry->slug = 'tiburcio-vasquez';
$entry->setFieldValues([
    'fullName' => 'Tiburcio Vasquez',
    'birthDate' => 'April 7, 1835',
    'birthplace' => 'Monterey County, California',
    'deathDate' => 'March 19, 1875',
    'burialPlace' => 'Santa Clara, California',
    'occupation' => 'Outlaw; Bandit; Cattle Rustler',
    'authorBio' => 'Tiburcio Vasquez (1835–1875) was a California-born outlaw and bandit whose raids through the Santa Clarita Valley made him one of the most notorious figures in Southern California history. His name lives on in Vasquez Rocks County Park near Agua Dulce, a favored hideout. He was hanged in San Jose on March 19, 1875.',
    'personLegacyUrl' => '/scvhistory/je4001.htm',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/5334/tiburcio-vasquez',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Tiburcio Vasquez\n";
} else {
    echo "FAILED: Tiburcio Vasquez - " . json_encode($entry->getErrors()) . "\n";
}

// Pedro Fages
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Pedro Fages';
$entry->slug = 'pedro-fages';
$entry->setFieldValues([
    'fullName' => 'Pedro Fages',
    'birthDate' => 'c. 1734',
    'birthplace' => 'Guissona, Catalonia, Spain',
    'deathDate' => '1796',
    'burialPlace' => '',
    'occupation' => 'Military Officer; Colonial Governor',
    'authorBio' => 'Pedro Fages (c. 1734–1796) was a Catalonian soldier who served as military commander and governor of Alta California. He participated in the Portolá expedition of 1769 and in 1772 led an expedition through the Santa Clarita Valley in pursuit of deserters, naming several landmarks still in use today including Agua Dulce and Soledad.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Pedro Fages\n";
} else {
    echo "FAILED: Pedro Fages - " . json_encode($entry->getErrors()) . "\n";
}

// Father Francisco Garcés
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Father Francisco Garcés';
$entry->slug = 'father-francisco-garces';
$entry->setFieldValues([
    'fullName' => 'Father Francisco Garcés',
    'birthDate' => 'April 12, 1738',
    'birthplace' => 'Morata de Jalón, Aragon, Spain',
    'deathDate' => 'July 18, 1781',
    'burialPlace' => 'Yuma, Arizona',
    'occupation' => '',
    'authorBio' => 'Father Francisco Garcés (1738–1781) was a Spanish Franciscan missionary and explorer who walked alone across the American Southwest, visiting the Santa Clarita Valley in 1776 where he settled a war between the Tataviam and Chumash. He was martyred at the Yuma Crossing on July 18, 1781.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Father Francisco Garcés\n";
} else {
    echo "FAILED: Father Francisco Garcés - " . json_encode($entry->getErrors()) . "\n";
}

// Antonio del Valle
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Antonio del Valle';
$entry->slug = 'antonio-del-valle';
$entry->setFieldValues([
    'fullName' => 'Antonio del Valle',
    'birthDate' => '1788',
    'birthplace' => 'Composilla, Mexico',
    'deathDate' => '1841',
    'burialPlace' => 'Unknown',
    'occupation' => 'Military Officer; Rancho Administrator; Land Grantee',
    'authorBio' => 'Antonio del Valle (1788–1841) was a Mexican military officer who arrived at Mission San Fernando in 1834 as the government-appointed administrator of secularization. He later acquired Rancho San Francisco, establishing the del Valle family dynasty that would dominate the Santa Clarita Valley for decades.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Antonio del Valle\n";
} else {
    echo "FAILED: Antonio del Valle - " . json_encode($entry->getErrors()) . "\n";
}

// Ygnacio del Valle
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Ygnacio del Valle';
$entry->slug = 'ygnacio-del-valle';
$entry->setFieldValues([
    'fullName' => 'Ygnacio del Valle',
    'birthDate' => 'July 1, 1808',
    'birthplace' => 'Jalisco, Mexico',
    'deathDate' => '1880',
    'burialPlace' => 'Camulos Ranch, Ventura County, California',
    'occupation' => 'Military Officer; Rancher; Land Owner',
    'authorBio' => 'Ygnacio del Valle (1808–1880) was the son of Antonio del Valle and the builder of the del Valle rancho empire in the Santa Clarita Valley. He inherited Rancho San Francisco and Rancho Camulos after his father\'s death in 1841, becoming one of the most powerful landowners in Southern California.',
    'personLegacyUrl' => '/scvhistory/lw2052.htm',
    'personWikipediaUrl' => 'https://en.wikipedia.org/wiki/Ygnacio_del_Valle',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/136176316/ignacio_ramn_de_jess-del_valle',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Ygnacio del Valle\n";
} else {
    echo "FAILED: Ygnacio del Valle - " . json_encode($entry->getErrors()) . "\n";
}

// Gaspar de Portolá
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Gaspar de Portolá';
$entry->slug = 'gaspar-de-portola';
$entry->setFieldValues([
    'fullName' => 'Gaspar de Portolá',
    'birthDate' => 'c. 1727',
    'birthplace' => 'Balaguer, Catalonia, Spain',
    'deathDate' => 'c. 1786',
    'burialPlace' => '',
    'occupation' => 'Military Officer; Colonial Governor',
    'authorBio' => 'Gaspar de Portolá (c. 1727–1786) was a Spanish military officer appointed first governor of the Californias in 1767. He led the landmark 1769 expedition that made the first European overland journey through Alta California, entering the Santa Clarita Valley on August 8, 1769.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Gaspar de Portolá\n";
} else {
    echo "FAILED: Gaspar de Portolá - " . json_encode($entry->getErrors()) . "\n";
}

// Juan Crespí
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Juan Crespí';
$entry->slug = 'juan-crespi';
$entry->setFieldValues([
    'fullName' => 'Juan Crespí',
    'birthDate' => 'March 1, 1721',
    'birthplace' => 'Palma, Mallorca, Spain',
    'deathDate' => 'January 1, 1782',
    'burialPlace' => 'Mission San Carlos Borromeo, Carmel, California',
    'occupation' => 'Franciscan Missionary; Diarist; Explorer',
    'authorBio' => 'Father Juan Crespí (1721–1782) was a Franciscan friar and the chief diarist of the Portolá Expedition of 1769. His journal contains the first European written description of the Santa Clarita Valley and the Tataviam people. His unexpurgated original manuscript was later discovered in archives in Madrid.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Juan Crespí\n";
} else {
    echo "FAILED: Juan Crespí - " . json_encode($entry->getErrors()) . "\n";
}

// Junípero Serra
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Junípero Serra';
$entry->slug = 'junipero-serra';
$entry->setFieldValues([
    'fullName' => 'Junípero Serra',
    'birthDate' => 'November 24, 1713',
    'birthplace' => 'Petra, Mallorca, Spain',
    'deathDate' => 'August 28, 1784',
    'burialPlace' => 'Mission San Carlos Borromeo, Carmel, California',
    'occupation' => 'ranciscan Missionary; Father-Presidente',
    'authorBio' => 'Father Junípero Serra (1713–1784) was the Franciscan friar appointed Father-Presidente of the California mission system in 1769. While Serra remained at San Diego during the Portolá Expedition, the mission system he established transformed the Santa Clarita Valley over the following decades. He was canonized by Pope Francis in 2015.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Junípero Serra\n";
} else {
    echo "FAILED: Junípero Serra - " . json_encode($entry->getErrors()) . "\n";
}

// Juan Bautista de Anza
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Juan Bautista de Anza';
$entry->slug = 'juan-bautista-de-anza';
$entry->setFieldValues([
    'fullName' => 'Juan Bautista de Anza',
    'birthDate' => 'July 7, 1736 Death Date: December 19, 1',
    'birthplace' => 'ronteras, Sonora, New Spain',
    'deathDate' => 'December 19, 1788',
    'burialPlace' => 'Cathedral of Nuestra Señora de la Asunción, Arizpe, Sonora, Mexico',
    'occupation' => 'Military Officer; Explorer; Colonial Governor',
    'authorBio' => 'Juan Bautista de Anza (1736–1788) was a Spanish colonial officer who led two expeditions establishing the overland route from Sonora to Alta California in 1774 and 1775–76. His second expedition founded San Francisco. Father Francisco Garcés served as his pathfinder and visited the Santa Clarita Valley during the 1776 expedition.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Juan Bautista de Anza\n";
} else {
    echo "FAILED: Juan Bautista de Anza - " . json_encode($entry->getErrors()) . "\n";
}

// Juventino del Valle
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Juventino del Valle';
$entry->slug = 'juventino-del-valle';
$entry->setFieldValues([
    'fullName' => 'Juventino del Valle',
    'birthDate' => '1841 (born approximately six months before his parents\' January 1, 1842 marriage)',
    'birthplace' => 'Santa Barbara, California (probable)',
    'deathDate' => '',
    'burialPlace' => '',
    'occupation' => 'Rancher',
    'authorBio' => 'Juventino del Valle was the son of Ygnacio del Valle and María Los Angeles Carrillo, born out of wedlock approximately six months before his parents exchanged wedding vows before Bishop Narciso Durán on January 1, 1842. As a son of Ygnacio, he was an heir to Rancho Camulos and the del Valle land holdings in the Santa Clarita Valley.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Juventino del Valle\n";
} else {
    echo "FAILED: Juventino del Valle - " . json_encode($entry->getErrors()) . "\n";
}

// Francisco Lopez
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Francisco Lopez';
$entry->slug = 'francisco-lopez';
$entry->setFieldValues([
    'fullName' => 'Juan José Francisco de Gracia ("Chico") Lopez',
    'birthDate' => 'c. 1800s (exact date unknown)',
    'birthplace' => 'Sonora, Mexico (probable)',
    'deathDate' => '',
    'burialPlace' => '',
    'occupation' => 'Rancher; Miner',
    'authorBio' => 'Francisco Lopez discovered gold in Placerita Canyon on March 9, 1842, launching California\'s first gold rush six years before the famous strike at Sutter\'s Mill. Educated in mineralogy at the university in Sonora, Mexico, Lopez was the uncle of Doña Jacoba Felix del Valle and a frequent visitor to Rancho San Francisco.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Francisco Lopez\n";
} else {
    echo "FAILED: Francisco Lopez - " . json_encode($entry->getErrors()) . "\n";
}

// John C. Frémont
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'John C. Frémont';
$entry->slug = 'john-c-fremont';
$entry->setFieldValues([
    'fullName' => 'John C. Frémont',
    'birthDate' => 'John C. Frémont',
    'birthplace' => 'Savannah, Georgia',
    'deathDate' => 'July 13, 1890',
    'burialPlace' => 'Trinity Church Cemetery, New York City, New York',
    'occupation' => 'Military Officer; Explorer; Politician',
    'authorBio' => 'ohn C. Frémont was a U.S. Army captain and explorer whose aggressive intervention in California during the Mexican-American War accelerated — and complicated — American acquisition of the state. Known as "The Pathfinder," he later served as U.S. Senator from California and was the Republican Party\'s first presidential candidate in 1856.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/834/john-charles-fremont',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: John C. Frémont\n";
} else {
    echo "FAILED: John C. Frémont - " . json_encode($entry->getErrors()) . "\n";
}

// Abel Stearns
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Abel Stearns';
$entry->slug = 'abel-stearns';
$entry->setFieldValues([
    'fullName' => 'Abel Stearns',
    'birthDate' => 'February 9, 1798',
    'birthplace' => 'Lunenburg, Massachusetts',
    'deathDate' => 'August 23, 1871',
    'burialPlace' => 'Calvary Cemetery, Los Angeles, California',
    'occupation' => 'Merchant; Rancher; Politician',
    'authorBio' => 'Abel Stearns was a Massachusetts-born merchant who became one of the wealthiest landowners in Southern California. Based in Los Angeles, he played a key role in confirming Francisco Lopez\'s 1842 gold discovery at Placerita Canyon — California\'s first gold rush — by testing the ore sample and forwarding it to the U.S. Mint in Philadelphia.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/9033/abel-stearns',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Abel Stearns\n";
} else {
    echo "FAILED: Abel Stearns - " . json_encode($entry->getErrors()) . "\n";
}

// Thomas O. Larkin
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Thomas O. Larkin';
$entry->slug = 'thomas-o-larkin';
$entry->setFieldValues([
    'fullName' => 'Thomas O. Larkin',
    'birthDate' => 'September 16, 1802',
    'birthplace' => 'Charlestown, Massachusetts',
    'deathDate' => 'October 27, 1858',
    'burialPlace' => 'Mountain View Cemetery, Oakland, California',
    'occupation' => 'Merchant; Diplomat; Political Agent',
    'authorBio' => 'Thomas O. Larkin was the only U.S. Consul to Mexican California and President Polk\'s secret agent in Monterey, tasked with encouraging California\'s leading citizens — including Ygnacio del Valle — to support peaceful annexation by the United States. His confidential diplomacy helped lay the groundwork for the American acquisition of California.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Thomas O. Larkin\n";
} else {
    echo "FAILED: Thomas O. Larkin - " . json_encode($entry->getErrors()) . "\n";
}

// Edwin Bryant
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Edwin Bryant';
$entry->slug = 'edwin-bryant';
$entry->setFieldValues([
    'fullName' => 'Edwin Bryant',
    'birthDate' => '1805',
    'birthplace' => 'Pelham, Massachusetts',
    'deathDate' => 'December 16, 1869',
    'burialPlace' => 'Cave Hill Cemetery, Louisville, Kentucky',
    'occupation' => 'Journalist; Author; Alcalde',
    'authorBio' => 'Edwin Bryant was a Massachusetts-born journalist and author who traveled overland to California in 1846 and served in Frémont\'s California Battalion. His firsthand account of the battalion\'s January 1847 march through Castaic Junction is one of the few primary sources documenting Frémont\'s route through the Santa Clarita Valley.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/8906/edwin-bryant',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Edwin Bryant\n";
} else {
    echo "FAILED: Edwin Bryant - " . json_encode($entry->getErrors()) . "\n";
}

// Kit Carson
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Kit Carson';
$entry->slug = 'kit-carson';
$entry->setFieldValues([
    'fullName' => 'Christopher Houston Carson',
    'birthDate' => 'December 24, 1809',
    'birthplace' => 'Madison County, Kentucky',
    'deathDate' => 'May 23, 1868',
    'burialPlace' => 'Kit Carson Cemetery, Taos, New Mexico',
    'occupation' => 'Scout; Trapper; Military Officer',
    'authorBio' => 'Kit Carson was a Kentucky-born frontiersman, trapper, and scout whose intimate knowledge of the western wilderness made him the indispensable guide on John C. Frémont\'s mapping expeditions into Oregon, the Sierra Nevada, and California. Though Frémont received the fame, it was Carson who found most of the paths.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/1819/christopher-houston-carson',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Kit Carson\n";
} else {
    echo "FAILED: Kit Carson - " . json_encode($entry->getErrors()) . "\n";
}

// Andrés Pico
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Andrés Pico';
$entry->slug = 'andres-pico';
$entry->setFieldValues([
    'fullName' => 'Andrés Pico',
    'birthDate' => 'November 18, 1810',
    'birthplace' => 'San Diego, Alta California',
    'deathDate' => 'February 14, 1876',
    'burialPlace' => 'Mission San Fernando Rey de España, Mission Hills, California',
    'occupation' => 'Military Officer; Rancher; Politician',
    'authorBio' => 'Andrés Pico was a Mexican-Californio military commander who defeated U.S. General Stephen Kearny at the Battle of San Pasqual in December 1846 — the bloodiest battle of the California campaign — before signing the Capitulation of Cahuenga with John C. Frémont on January 13, 1847, ending the Mexican-American War in California. He later became one of the most significant landowners in the San Fernando Valley.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/5913/andres-pico',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Andrés Pico\n";
} else {
    echo "FAILED: Andrés Pico - " . json_encode($entry->getErrors()) . "\n";
}

// James W. Marshall
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'James W. Marshall';
$entry->slug = 'james-w-marshall';
$entry->setFieldValues([
    'fullName' => 'James Wilson Marshall',
    'birthDate' => 'October 8, 1810',
    'birthplace' => 'Hope Township, New Jersey',
    'deathDate' => 'August 10, 1885',
    'burialPlace' => 'Marshall Gold Discovery State Historic Park, Coloma, California',
    'occupation' => 'Carpenter; Millwright; Miner',
    'authorBio' => 'James Wilson Marshall was a New Jersey-born carpenter who on January 24, 1848, discovered gold at John Sutter\'s sawmill on the American River — triggering the California Gold Rush. His find came just nine days before the Treaty of Guadalupe Hidalgo formally transferred California to the United States.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/1144/james-wilson-marshall',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: James W. Marshall\n";
} else {
    echo "FAILED: James W. Marshall - " . json_encode($entry->getErrors()) . "\n";
}

// William Lewis Manly
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'William Lewis Manly';
$entry->slug = 'william-lewis-manly';
$entry->setFieldValues([
    'fullName' => 'William Lewis Manly',
    'birthDate' => 'April 6, 1820',
    'birthplace' => 'St. Albans, Vermont',
    'deathDate' => 'February 5, 1903',
    'burialPlace' => 'Oak Hill Cemetery, San Jose, California',
    'occupation' => 'Pioneer; Author',
    'authorBio' => 'William Lewis Manly was a Vermont-born pioneer who in late 1849 walked approximately 250 miles across the Mojave Desert to find help for the stranded Bennett-Arcan Party. Rescued by vaqueros of Rancho San Francisco on January 1, 1850, he left one of the most vivid firsthand descriptions of the Santa Clara River Valley in the rancho era. His memoir Death Valley in \'49 gave Death Valley its enduring name.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/1979/william-lewis-manly',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: William Lewis Manly\n";
} else {
    echo "FAILED: William Lewis Manly - " . json_encode($entry->getErrors()) . "\n";
}

// Cave Johnson Couts
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Cave Johnson Couts';
$entry->slug = 'cave-johnson-couts';
$entry->setFieldValues([
    'fullName' => 'Cave Johnson Couts',
    'birthDate' => 'November 6, 1821',
    'birthplace' => 'Smith County, Tennessee',
    'deathDate' => 'June 10, 1874',
    'burialPlace' => 'El Campo Santo Cemetery, San Diego, California',
    'occupation' => 'Military Officer; Rancher',
    'authorBio' => 'Cave Johnson Couts was a Tennessee-born U.S. Army lieutenant who married into the Bandini family of Southern California and became one of the most significant figures in the early American cattle trade. In 1849 he and his brother William drove 700 head of cattle north through Newhall Pass to Gold Rush miners, selling at prices ten times the old hide-and-tallow rate.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/9372/cave-johnson-couts',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Cave Johnson Couts\n";
} else {
    echo "FAILED: Cave Johnson Couts - " . json_encode($entry->getErrors()) . "\n";
}

// Juan Bandini
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Juan Bandini';
$entry->slug = 'juan-bandini';
$entry->setFieldValues([
    'fullName' => 'Juan Bandini',
    'birthDate' => '1800',
    'birthplace' => 'Lima, Peru',
    'deathDate' => 'November 4, 1859',
    'burialPlace' => 'l Campo Santo Cemetery, San Diego, California',
    'occupation' => 'Rancher; Politician; Merchant',
    'authorBio' => 'Juan Bandini was a Peru-born Californio ranchero and one of the most influential figures in Southern California during the Mexican and early American periods. His daughter Ysidora married U.S. Army Lieutenant Cave Johnson Couts, and Bandini provided the cattle that launched the Couts brothers\' pioneering 1849 drive to the Gold Rush mining camps.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/9366/juan-bandini',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Juan Bandini\n";
} else {
    echo "FAILED: Juan Bandini - " . json_encode($entry->getErrors()) . "\n";
}

// Edward Fitzgerald Beale
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Edward Fitzgerald Beale';
$entry->slug = 'edward-fitzgerald-beale';
$entry->setFieldValues([
    'fullName' => 'Edward Fitzgerald Beale',
    'birthDate' => 'February 4, 1822',
    'birthplace' => 'Washington, D.C.',
    'deathDate' => 'April 22, 1893',
    'burialPlace' => 'Rock Creek Cemetery, Washington, D.C.',
    'occupation' => 'Naval Officer; Explorer; Surveyor; Rancher; Diplomat',
    'authorBio' => 'Edward Fitzgerald Beale was a Washington-born naval officer, explorer, and surveyor who acquired Rancho El Tejon in 1855 and consolidated it into one of the largest private landholdings in California history. He is remembered for his daring dispatch rides during the Mexican-American War, his role surveying the 35th Parallel route through the Southwest, and his management of the U.S. Army\'s celebrated Camel Corps experiment at Fort Tejon.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/5144/edward-fitzgerald-beale',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Edward Fitzgerald Beale\n";
} else {
    echo "FAILED: Edward Fitzgerald Beale - " . json_encode($entry->getErrors()) . "\n";
}

// José Antonio Aguirre
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'José Antonio Aguirre';
$entry->slug = 'jose-antonio-aguirre';
$entry->setFieldValues([
    'fullName' => 'José Antonio Aguirre',
    'birthDate' => '1793',
    'birthplace' => 'Bilbao, Basque Country, Spain',
    'deathDate' => 'June 4, 1860',
    'burialPlace' => '',
    'occupation' => 'Merchant; Rancher; Ship Owner',
    'authorBio' => 'José Antonio Aguirre was a Basque-born merchant and ship owner who became one of the wealthiest traders in Mexican California. He was co-grantee of Rancho El Tejon in 1843 alongside Ygnacio del Valle.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: José Antonio Aguirre\n";
} else {
    echo "FAILED: José Antonio Aguirre - " . json_encode($entry->getErrors()) . "\n";
}

// Henry Clay Wiley
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Henry Clay Wiley';
$entry->slug = 'henry-clay-wiley';
$entry->setFieldValues([
    'fullName' => 'Henry Clay Wiley',
    'birthDate' => '1829',
    'birthplace' => 'Lancaster, Pennsylvania',
    'deathDate' => 'October 25, 1898',
    'burialPlace' => 'Rosedale Cemetery, Los Angeles, California',
    'occupation' => 'Entrepreneur; Lawman; Real Estate Agent',
    'authorBio' => 'Henry Clay Wiley was a Pennsylvania-born pioneer who arrived in California in 1852 and established Wiley Station at Newhall Pass in partnership with Ygnacio del Valle — a hotel, restaurant, saloon, and windlass operation that became a key waypoint on the cattle drive route between Southern California and the San Joaquin Valley. He later served as Under-Sheriff of Los Angeles County and helped found the Indiana Colony, now Pasadena.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Henry Clay Wiley\n";
} else {
    echo "FAILED: Henry Clay Wiley - " . json_encode($entry->getErrors()) . "\n";
}

// Arthur B. Perkins
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Arthur B. Perkins';
$entry->slug = 'arthur-b-perkins';
$entry->setFieldValues([
    'fullName' => 'Arthur Burnett Perkins',
    'birthDate' => '1891',
    'birthplace' => '(unknown)',
    'deathDate' => '1977',
    'burialPlace' => '(unknown)',
    'occupation' => 'Historian · Water Company Manager · Justice of the Peace · Real Estate Agent · Civic Leader',
    'authorBio' => 'Arthur B. "Perk" Perkins (1891–1977) managed the Newhall Water Company beginning in 1919 and spent his retirement preserving the history of the Santa Clarita Valley. His collected documents and photographs form the backbone of SCVHistory.com.',
    'personLegacyUrl' => '/scvhistory/lw2232.htm',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Arthur B. Perkins\n";
} else {
    echo "FAILED: Arthur B. Perkins - " . json_encode($entry->getErrors()) . "\n";
}

// Scott Wilk
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Scott Wilk';
$entry->slug = 'scott-wilk';
$entry->setFieldValues([
    'fullName' => 'Scott Thomas Wilk Sr.',
    'birthDate' => 'March 16, 1959',
    'birthplace' => 'Lancaster, California',
    'deathDate' => '',
    'burialPlace' => '',
    'occupation' => 'State Senator · State Assemblymember · College Trustee · Small Business Owner · Political Staffer',
    'authorBio' => 'Scott Wilk represented California\'s 21st Senate District from 2016 to 2024, serving as Senate Republican Leader and authoring the legislation that created the Santa Clarita Valley Water Agency. A co-founder of the California Armenian Legislative Caucus, he was a consistent voice for Armenian Genocide recognition throughout his tenure.',
    'personLegacyUrl' => '',
    'personWikipediaUrl' => 'https://en.wikipedia.org/wiki/Scott_Wilk',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Scott Wilk\n";
} else {
    echo "FAILED: Scott Wilk - " . json_encode($entry->getErrors()) . "\n";
}

// John Gifford
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'John Gifford';
$entry->slug = 'john-gifford';
$entry->setFieldValues([
    'fullName' => 'John Timothy Gifford',
    'birthDate' => 'February 14, 1847',
    'birthplace' => 'Cincinnati, Ohio (1880 and 1920 Census; 1910 Census says New York — Ohio preferred as it appears most consistently)',
    'deathDate' => 'October 15, 1922',
    'burialPlace' => 'Garden of Pioneers, Eternal Valley Cemetery, Newhall',
    'occupation' => '',
    'authorBio' => 'Newhall\'s first Southern Pacific railroad agent and telegraph operator, who supervised the north-side crew during construction of the San Fernando tunnel and served the Newhall depot from its opening in 1876 until his retirement in 1912.',
    'personLegacyUrl' => '/scvhistory/hs2001.htm',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: John Gifford\n";
} else {
    echo "FAILED: John Gifford - " . json_encode($entry->getErrors()) . "\n";
}

// Rémi Nadeau (I)
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Rémi Nadeau (I)';
$entry->slug = 'remi-nadeau-i';
$entry->setFieldValues([
    'fullName' => 'Remi Allen Nadeau',
    'birthDate' => 'September 21, 1821',
    'birthplace' => 'Kamouraska, Quebec, Canada',
    'deathDate' => 'January 15, 1887',
    'burialPlace' => 'Los Angeles, California',
    'occupation' => 'Freighter, Hotelier',
    'authorBio' => 'French-Canadian freighter who operated Southern California\'s largest mule-team freight operation between Los Angeles and the Cerro Gordo silver mines from 1869 to 1882. Later built the Nadeau Hotel in downtown Los Angeles.',
    'personLegacyUrl' => '/scvhistory/henriettenadeau20171119_en.htm',
    'personWikipediaUrl' => '',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Rémi Nadeau (I)\n";
} else {
    echo "FAILED: Rémi Nadeau (I) - " . json_encode($entry->getErrors()) . "\n";
}

// Dante Acosta
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Dante Acosta';
$entry->slug = 'dante-acosta';
$entry->setFieldValues([
    'fullName' => 'Dante Acosta',
    'birthDate' => 'January 1, 1963',
    'birthplace' => 'Sacramento, California',
    'deathDate' => '',
    'burialPlace' => '',
    'occupation' => 'Politician; Financial Advisor; City Council Member; State Assemblymember',
    'authorBio' => 'Dante Acosta is a former Santa Clarita City Council member (2014–2016) and California State Assemblyman representing the 38th District (2016–2018). A Canyon Country resident and Gold Star father, he is the founder of the Rudy A. Acosta Memorial Foundation.',
    'personLegacyUrl' => '/scvhistory/sc1401.htm',
    'personWikipediaUrl' => 'https://en.wikipedia.org/wiki/Dante_Acosta',
    'personGraveUrl' => '',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Dante Acosta\n";
} else {
    echo "FAILED: Dante Acosta - " . json_encode($entry->getErrors()) . "\n";
}

// Rodolfo Acosta
$entry = new \craft\elements\Entry();
$entry->sectionId = $svc->getSectionByHandle('persons')->id;
$entry->typeId = Craft::$app->getEntries()->getEntryTypeByHandle('person')->id;
$entry->title = 'Rodolfo Acosta';
$entry->slug = 'rodolfo-acosta';
$entry->setFieldValues([
    'fullName' => 'Rodolfo Acosta',
    'birthDate' => 'July 29, 1920',
    'birthplace' => 'El Paso, Texas',
    'deathDate' => 'November 7, 1974',
    'burialPlace' => 'Forest Lawn Memorial Park, Hollywood Hills, California',
    'occupation' => 'Actor',
    'authorBio' => 'Rodolfo Acosta was a Mexican-American actor best known for playing villains and Native American warriors in Hollywood westerns. Despite being a romantic lead in Mexican cinema, his powerful physique typecast him in antagonist roles for American audiences. He appeared in over 50 films and dozens of television westerns including The High Chaparral, Bonanza, and Rawhide. He was inducted into Newhall\'s Walk of Western Stars in 2013.',
    'personLegacyUrl' => '/scvhistory/lw3399.htm',
    'personWikipediaUrl' => 'https://en.wikipedia.org/wiki/Rodolfo_Acosta',
    'personGraveUrl' => 'https://www.findagrave.com/memorial/19542/rodolfo-acosta',
]);
if (Craft::$app->getElements()->saveElement($entry)) {
    echo "Saved: Rodolfo Acosta\n";
} else {
    echo "FAILED: Rodolfo Acosta - " . json_encode($entry->getErrors()) . "\n";
}
echo "Done.\n";