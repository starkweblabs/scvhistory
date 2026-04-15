$svc=Craft::$app->getEntries();

$existing=\craft\elements\Entry::find()->section('organizations')->slug('the-santa-clarita-valley-signal')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='The Santa Clarita Valley Signal';
$entry->slug='the-santa-clarita-valley-signal';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('railroad-oil-era-1876-1910')->one(); if($cat) $eraIds[]=$cat->id;
$entry->setFieldValues(['body'=>'','dateFounded'=>'2019','orgAliases'=>'The Newhall Signal, The Mighty Signal, TMS, Newhall Signal and Saugus Enterprise','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: The Santa Clarita Valley Signal\n";}else{echo "FAILED: The Santa Clarita Valley Signal - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('scvhistory-com-santa-clarita-valley-history')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='SCVHistory.com — Santa Clarita Valley History';
$entry->slug='scvhistory-com-santa-clarita-valley-history';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('contemporary-2010-present')->one(); if($cat) $eraIds[]=$cat->id;
$entry->setFieldValues(['body'=>'SCVHistory.com is the Santa Clarita Valley\'s primary digital history archive, founded by Leon Worden. The site preserves thousands of historical photographs, documents, articles, and oral histories related to the people, places, and events of the Santa Clarita Valley and surrounding region.','dateFounded'=>'1997–present','orgAliases'=>'','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: SCVHistory.com — Santa Clarita Valley History\n";}else{echo "FAILED: SCVHistory.com — Santa Clarita Valley History - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('henry-mayo-newhall-memorial-hospital')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Henry Mayo Newhall Memorial Hospital';
$entry->slug='henry-mayo-newhall-memorial-hospital';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('postwar-boom-1945-1965')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1970-1979')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1980-1989')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1990-1999')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2000-2009')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2010-2019')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2020-present')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('valencia')->one(); if($cat) $hoodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Henry Mayo Newhall Memorial Hospital — known locally as Henry Mayo — is the Santa Clarita Valley\'s only hospital, a 357-bed not-for-profit community hospital and trauma center located at 23845 McBean Parkway in Valencia. The hospital\'s origins trace to 1965, when Los Angeles County approved the master-planned community of Valencia. The Newhall Land and Farming Company, which was developing Valencia on land once owned by its namesake Henry Mayo Newhall, recognized that the growing community would need modern medical facilities. Newhall Land donated 25 acres of land in the center of town for the purpose and partnered with the Lutheran Hospital Society, an organization with half a century of experience managing not-for-profit community hospitals. Thomas Lowe, then chief executive officer of Newhall Land, led the effort alongside a citizens\' committee that would eventually become the hospital\'s Board of Trustees under Judge Adrian Adams. In February 1971, the trustees hired their first employee — Bobbie Trueblood, director of community relations — to build community support. A public fund drive launched in December 1970 raised the construction funds needed to break ground in September 1972. While the new hospital was under construction, the Lutheran Hospital Society purchased Inter-Valley Community Hospital, renaming it Hillside Community Hospital, to serve as an interim facility and allow early recruitment of medical staff. Henry Mayo Newhall Memorial Hospital opened in August 1975 with 100 beds, including intensive care and coronary units. The Henry Mayo Newhall Hospital Foundation was established in 1984 to support the hospital\'s capital needs. Today the hospital is an Advanced Primary Stroke Center and STEMI Receiving Center, offering emergency, trauma, maternity, neonatal intensive care, surgical, cardiovascular, cancer, behavioral health, and rehabilitation services, among many others. It is part of the Los Angeles County Disaster Resource Center network.','dateFounded'=>'1975','orgAliases'=>'Henry Mayo, HMNMH, Hillside Community Hospital','orgAddress'=>'23845 McBean Parkway Santa Clarita, California 91355','orgWebsite'=>'https://HenryMayo.com','orgWikipediaUrl'=>'https://en.wikipedia.org/wiki/Henry_Mayo_Newhall_Memorial_Hospital','orgLegacyUrl'=>'','orgLat'=>'34.397778','orgLng'=>'-118.553333','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Henry Mayo Newhall Memorial Hospital\n";}else{echo "FAILED: Henry Mayo Newhall Memorial Hospital - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('rancho-san-francisco')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Rancho San Francisco';
$entry->slug='rancho-san-francisco';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('mexican-rancho-era-1821-1848')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('camulos')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('castaic')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('newhall')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('piru')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('soledad-canyon')->one(); if($cat) $hoodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Rancho San Francisco was the largest private landholding in the Santa Clarita Valley, comprising 48,829 acres — eleven Spanish leagues — covering most of what is now the Santa Clarita Valley and extending into present-day Ventura County. The land had been used by Mission San Fernando Rey de España since 1804 under the name Rancho de San Francisco Xavier, when Father Pedro Muñoz and Father José de Miguél established the Asistencia de San Francisco on a mesa overlooking Castaic Junction. The mission used the rancho to graze cattle and grow crops, with the Tataviam providing labor. Following the secularization of the California missions in 1833, Lieutenant Antonio del Valle was appointed administrator of Mission San Fernando. On January 22, 1839, Governor Juan Bautista Alvarado formally granted the rancho to Antonio del Valle, making him virtual lord and master of the upper Santa Clara River Valley. A diseño map drawn by Pablo de la Guerra of Santa Barbara circa 1843 documented the rancho\'s boundaries and named features. Antonio del Valle died intestate in 1841, leaving the rancho to his widow Jacoba Felix and their children. His estranged son Ygnacio del Valle eventually consolidated control of the rancho, building it into one of the great landholdings of Southern California. Following the American acquisition of California, the rancho\'s title was confirmed by the United States Land Commission. In January 1875, Henry Mayo Newhall purchased 46,460 acres of Rancho San Francisco for just under two dollars per acre, incorporating it into what would become the Newhall Land and Farming Company. The western portion along the Santa Clara River near Piru became Rancho Camulos, retained by the del Valle heirs. The name Rancho San Francisco lives on in San Francisquito Canyon and in the name of the Santa Clarita Valley\'s primary waterway, the Santa Clara River, which Father Crespí named for the same saint in 1769.','dateFounded'=>'January 22, 1839','orgAliases'=>'Rancho de San Francisco Rancho San Francisco Xavier','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Rancho San Francisco\n";}else{echo "FAILED: Rancho San Francisco - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('rancho-camulos')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Rancho Camulos';
$entry->slug='rancho-camulos';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('mexican-rancho-era-1821-1848')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('camulos')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('piru')->one(); if($cat) $hoodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Rancho Camulos is a historic rancho located along the Santa Clara River near Piru in western Ventura County, comprising the western portion of the original Rancho San Francisco land grant. The name Camulos — from the Chumash word for juniper — appears on the 1843 diseño map of Rancho San Francisco as Cañada de Camulis. The rancho was developed by Ygnacio del Valle following his father Antonio\'s death in 1841, becoming the primary residence of the del Valle family. Under Ygnacio and later his son Reginaldo, Rancho Camulos became a prosperous agricultural operation producing wine, citrus, and cattle. In 1882 novelist Helen Hunt Jackson visited Rancho Camulos while researching her novel Ramona, published in 1884. The novel drew national attention to the mistreatment of Native Americans in California and romanticized the Spanish rancho era. Rancho Camulos became widely identified as the home of Ramona, drawing tourists from across the country and cementing the rancho\'s place in California cultural history. The rancho remained in the del Valle family until the early 20th century. It was declared a National Historic Landmark in 1964 and is now operated as the Rancho Camulos Museum, preserving the adobe buildings, chapel, winery, and citrus groves of the del Valle era. Juan José Fustero, the last full-blooded Tataviam, died at Rancho Camulos in 1921, bringing to a close the direct line of the valley\'s original inhabitants.','dateFounded'=>'c. 1839','orgAliases'=>'Camulos Ranch, Camp Camulos','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Rancho Camulos\n";}else{echo "FAILED: Rancho Camulos - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('mission-san-gabriel-arcangel')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Mission San Gabriel Arcángel';
$entry->slug='mission-san-gabriel-arcangel';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('spanish-colonial-1769-1821')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Mission San Gabriel Arcángel was the fourth of the California missions, founded in 1771 in present-day San Gabriel. It became one of the wealthiest and most productive missions in the chain, controlling vast agricultural lands and cattle herds across Southern California. Its influence extended into the Santa Clarita Valley through the rancho system — many SCV land grants were carved from territory once administered by San Gabriel. In 1834, Ygnacio del Valle served as commissioner overseeing its secularization under Mexican government policy, transferring control of mission lands from Franciscan padres to civil administrators.','dateFounded'=>'September 8, 1771','orgAliases'=>'San Gabriel Mission','orgAddress'=>'428 S Mission Dr, San Gabriel, CA 91776','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'sangabrielmission.org','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Mission San Gabriel Arcángel\n";}else{echo "FAILED: Mission San Gabriel Arcángel - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('mission-san-francisco-de-asis')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Mission San Francisco de Asís';
$entry->slug='mission-san-francisco-de-asis';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('spanish-colonial-1769-1821')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Mission San Francisco de Asís, popularly known as Mission Dolores, was the sixth of the California missions, established in 1776 near a small lake called Laguna de los Dolores — hence the popular name. It served as a spiritual and administrative hub for Northern California during the Spanish and Mexican periods. In 1834, Ygnacio del Valle was appointed commissioner to oversee its secularization alongside Mission San Gabriel and Mission Santa Cruz, part of the broader Mexican government effort to dissolve Franciscan control of mission lands throughout California.','dateFounded'=>'June 29, 1776','orgAliases'=>'','orgAddress'=>'3321 16th St, San Francisco, CA 94114','orgWebsite'=>'missiondolores.org','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Mission San Francisco de Asís\n";}else{echo "FAILED: Mission San Francisco de Asís - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('mission-santa-cruz')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Mission Santa Cruz';
$entry->slug='mission-santa-cruz';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('spanish-colonial-1769-1821')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Mission Santa Cruz was the twelfth of the California missions, founded in 1791 on a bluff above the San Lorenzo River. It had a turbulent history — plagued by flooding, a settler colony established nearby that created constant friction with the padres, and one of the most dramatic incidents of the mission era, the 1812 murder of Father Andrés Quintana by neophytes. The original structure was largely destroyed by an 1857 earthquake. In 1834, Ygnacio del Valle served as secularization commissioner for the mission, part of the sweeping Mexican policy to dissolve Franciscan administration of California\'s mission lands.','dateFounded'=>'September 25, 1791','orgAliases'=>'','orgAddress'=>'126 High St, Santa Cruz, CA 95060','orgWebsite'=>'holycrosssantacruz.com','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Mission Santa Cruz\n";}else{echo "FAILED: Mission Santa Cruz - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('rancho-el-tejon')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Rancho El Tejon';
$entry->slug='rancho-el-tejon';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('mexican-rancho-era-1821-1848')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1850-1899')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('tejon')->one(); if($cat) $hoodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Rancho El Tejon was a Mexican land grant issued in 1843 in the Tehachapi Mountains at the southern end of the San Joaquin Valley, straddling what is now the boundary of Los Angeles, Kern, and Ventura counties. Its location on the main overland route between Southern California and the San Joaquin Valley made it a critical waypoint for cattle drives, military expeditions, and overland travel throughout the rancho era and into the American period. Ygnacio del Valle held grazing rights at El Tejon and charged fees to cattlemen driving herds north through the pass during the Gold Rush cattle boom of the early 1850s — a revenue stream that supplemented his already substantial income from Rancho San Francisco and Rancho Camulos. In 1855 the U.S. Army established Fort Tejon on adjacent land to protect the emigrant road and police the region. That same year Edward Fitzgerald Beale, the colorful former Navy officer and surveyor, acquired the rancho and consolidated it with surrounding land grants into one of the largest private landholdings in California history. Under Beale the ranch became famous as the site of the U.S. Army\'s experimental Camel Corps, and it remained in the Beale family for generations. The modern Tejon Ranch Company, one of California\'s largest private landowners, is the direct descendant of Beale\'s consolidation.','dateFounded'=>'1843','orgAliases'=>'','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Rancho El Tejon\n";}else{echo "FAILED: Rancho El Tejon - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('los-angeles-herald')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Los Angeles Herald';
$entry->slug='los-angeles-herald';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('railroad-oil-era-1876-1910')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1850-1899')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1900-1919')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'The Los Angeles Herald was a daily newspaper published in Los Angeles from 1873 until 1911, when it merged with the Los Angeles Examiner. One of the major dailies of the late 19th and early 20th centuries, the Herald covered Southern California extensively during the region\'s explosive growth period following the arrival of the railroads in the 1870s and 1880s. Its coverage of the Santa Clarita Valley included reporting on the early oil industry at Pico Canyon, the development of Newhall, cattle drives through the pass, and the lives of the pioneer families who settled the region. The Herald\'s archives are a primary source for SCVHistory.com research into the late 19th century Santa Clarita Valley.','dateFounded'=>'1873','orgAliases'=>'L.A. Herald, Herald, Los Angeles Daily Herald','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Los Angeles Herald\n";}else{echo "FAILED: Los Angeles Herald - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('historical-society-of-southern-california')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Historical Society of Southern California';
$entry->slug='historical-society-of-southern-california';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('contemporary-2010-present')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('railroad-oil-era-1876-1910')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1850-1899')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1900-1919')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1920-1929')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1930-1939')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1940-1949')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1950-1959')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1960-1969')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1970-1979')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1980-1989')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1990-1999')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2000-2009')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2010-2019')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2020-present')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'The Historical Society of Southern California, founded in 1883, is one of the oldest historical organizations in California. It publishes the Southern California Quarterly, one of the longest-running regional history journals in the American West, and maintains archives and collections documenting the history of Los Angeles and the surrounding region. Its annual publications from the late 19th and early 20th centuries are primary source documents for Santa Clarita Valley research, including memorial tributes to SCV pioneers such as Henry Clay Wiley, whose 1898 in memoriam appeared in the society\'s annual publication. The society continues to operate as an active historical organization and publisher.','dateFounded'=>'1883','orgAliases'=>'','orgAddress'=>'','orgWebsite'=>'http://socalhistory.org','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Historical Society of Southern California\n";}else{echo "FAILED: Historical Society of Southern California - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('santa-clarita-valley-water')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Santa Clarita Valley Water';
$entry->slug='santa-clarita-valley-water';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('contemporary-2010-present')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1900-1919')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1920-1929')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1930-1939')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1940-1949')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1950-1959')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1960-1969')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1970-1979')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1980-1989')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1990-1999')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2000-2009')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2010-2019')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2020-present')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('canyon-country')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('castaic')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('newhall')->one(); if($cat) $hoodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('neighborhood')->slug('valencia')->one(); if($cat) $hoodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'The history of water in the Santa Clarita Valley is the history of the valley\'s growth — and it begins with a small agricultural utility and one dedicated manager. The Newhall Water System was established in 1913 Yourscvwater by H. Clay Needham and M.W. Atwood as a modest agricultural water operation. In 1919, with the valley\'s population at roughly 600, Arthur B. "Perk" Perkins became general manager. A year later, he bought the company, which served about 125 customers. Yourscvwater Needham continued to provide financial backing until his death in 1936. On June 1, 1930, the small water company became a corporation when Perk, his wife Marguerite, and his in-laws, the O\'Briens, sold their entire interest to the newly created Newhall Water Company. Yourscvwater In 1953, A.B. Perkins signed the documents finalizing the sale of the Newhall Water Company to the newly formed Newhall County Water District for $130,000. Yourscvwater The transition from private company to public district gave valley residents direct governance over their water supply for the first time. In 1966, Castaic and Pinetree (Canyon Country) were incorporated into the district. Yourscvwater Meanwhile, a parallel water infrastructure was taking shape. On April 20, 1962, the Upper Santa Clara Valley Water Agency was formed to contract with the State of California to deliver water from the State Water Project. In 1970, it was renamed the Castaic Lake Water Agency, and in 1980 began delivering State Water Project water to the Santa Clarita Valley. Yourscvwater In 1973, the Bouquet Water Company and the Solemint Water Company merged to form the Santa Clarita Water Company. In 1999, the Castaic Lake Water Agency acquired the company\'s stock and created the Santa Clarita Water Division. Yourscvwater In 2012, the Castaic Lake Water Agency also acquired the Valencia Water Company. By the 2010s, the Santa Clarita Valley was being served by four separate water entities — an arrangement that created redundancy, inefficiency, and higher costs for ratepayers. The solution came through Sacramento. Following a multi-year public engagement process, Senate Bill 634 — authored by Senator Scott Wilk and signed by Governor Jerry Brown on October 15, 2017 — created the Santa Clarita Valley Water Agency. LinkedIn On January 1, 2018, SCV Water formally consolidated the Castaic Lake Water Agency, Newhall County Water District, Santa Clarita Water Division, and Valencia Water Company into a single regional agency. LinkedIn Senator Scott Wilk deserves particular recognition for shepherding this consolidation. Unifying four separate agencies under a single governance structure was a significant political and logistical achievement — one that has already produced cost savings and improved regional water management for the approximately 300,000 residents SCV Water now serves. From a 125-customer agricultural utility in 1920 to a full-service regional agency covering nearly 200 square miles, the story of water in the Santa Clarita Valley is a story of the valley itself.','dateFounded'=>'1913','orgAliases'=>'Newhall Water Company, Newhall County Water District, Newhall Water System, Valencia Water Company, Santa Clarita Water Division, Newhall County Water District, Castaic Lake Water Agency, SCV Water','orgAddress'=>'23780 North Pine Street, Santa Clarita, CA 91322','orgWebsite'=>'23780 North Pine Street, Santa Clarita, CA 91322','orgWikipediaUrl'=>'','orgLegacyUrl'=>'','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Santa Clarita Valley Water\n";}else{echo "FAILED: Santa Clarita Valley Water - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('city-of-santa-clarita')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='The City of Santa Clarita';
$entry->slug='city-of-santa-clarita';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('cityhood-era-1987-1994')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('contemporary-2010-present')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('incorporation-struggle-1965-1987')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1980-1989')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('1990-1999')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2000-2009')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2010-2019')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('2020-present')->one(); if($cat) $periodIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalPeriod')->slug('pre-1850')->one(); if($cat) $periodIds[]=$cat->id;
$entry->setFieldValues(['body'=>'Santa Clarita is a suburban city in northwestern Los Angeles County, California. With a 2020 census population of 228,673, it is the third-most populous city in Los Angeles County and the 17th-most populous in California. Located about 30 miles northwest of downtown Los Angeles, the city occupies 70.75 square miles in the Santa Clarita Valley along the Santa Clara River. The city was incorporated on December 15, 1987, encompassing the communities of Canyon Country, Newhall, Saugus, and Valencia. The Newhall Land and Farming Company played a major role in the city\'s development. Henry Mayo Newhall had purchased the Rancho San Francisco in 1875 and established the towns of Saugus and Newhall.','dateFounded'=>'December 15, 1987','orgAliases'=>'SCV','orgAddress'=>'23920 Valencia Blvd, Santa Clarita, CA 91355','orgWebsite'=>'https://www.santa-clarita.com','orgWikipediaUrl'=>'https://en.wikipedia.org/wiki/Santa_Clarita,_California','orgLegacyUrl'=>'','orgLat'=>'34.3917','orgLng'=>'-118.5426','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: The City of Santa Clarita\n";}else{echo "FAILED: The City of Santa Clarita - ".json_encode($entry->getErrors())."\n";}

$existing=\craft\elements\Entry::find()->section('organizations')->slug('santa-clarita-valley-chamber-of-commerce')->one();
if($existing){Craft::$app->getElements()->deleteElement($existing);}
$entry=new \craft\elements\Entry();
$entry->sectionId=$svc->getSectionByHandle('organizations')->id;
$entry->typeId=Craft::$app->getEntries()->getEntryTypeByHandle('organization')->id;
$entry->title='Santa Clarita Valley Chamber of Commerce';
$entry->slug='santa-clarita-valley-chamber-of-commerce';
$eraIds=[]; $periodIds=[]; $hoodIds=[];
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('cityhood-era-1987-1994')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('contemporary-2010-present')->one(); if($cat) $eraIds[]=$cat->id;
$cat=\craft\elements\Category::find()->group('historicalEra')->slug('incorporation-struggle-1965-1987')->one(); if($cat) $eraIds[]=$cat->id;
$entry->setFieldValues(['body'=>'The Santa Clarita Valley Chamber of Commerce has served the business community of the Santa Clarita Valley since before cityhood. Under the leadership of Jo Anne Darcy, who became manager in 1974, the Chamber organized the Western Celebrities Luncheon series (1975-1979) and Dinner (1980) which evolved into the Western Walk of Fame in 1981 — later renamed the Walk of Western Stars after a trademark dispute with the Hollywood Chamber of Commerce. The Chamber claimed ownership of the Walk of Western Stars event prior to its incorporation into the city\'s Cowboy Festival in 2000.','dateFounded'=>'','orgAliases'=>'Newhall-Saugus-Valencia Chamber of Commerce; SCV Chamber','orgAddress'=>'','orgWebsite'=>'','orgWikipediaUrl'=>'','orgLegacyUrl'=>'/scvhistory/lw2102.htm','orgLat'=>'','orgLng'=>'','historicalEra'=>$eraIds,'historicalPeriod'=>$periodIds,'neighborhood'=>$hoodIds]);
if(Craft::$app->getElements()->saveElement($entry)){echo "Saved: Santa Clarita Valley Chamber of Commerce\n";}else{echo "FAILED: Santa Clarita Valley Chamber of Commerce - ".json_encode($entry->getErrors())."\n";}
echo "Done.\n";