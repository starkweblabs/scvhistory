<?php
// Run with: php craft exec "$(cat reconnect_person_images.php)"
// Reconnects person featuredImage fields using WordPress export mappings

$mappings = [
    'leon-worden' => 'leon-worden-cowboy-hat.webp',
    'jerry-reynolds' => 'jerry-reynolds.jpg',
    'henry-mayo-newhall' => 'henry-mayo-newhall-2.jpg',
    'tiburcio-vasquez' => 'tiburcio-vasquez.jpg',
    'pedro-fages' => 'capt-pedro-fages.jpg',
    'father-francisco-garces' => 'father-francisco-garces-statute.jpg',
    'ygnacio-del-valle' => 'ygnacio-del-valle-portrait-c1850s.jpg',
    'gaspar-de-portola' => 'gaspar-de-portola-portrait.jpg',
    'juan-crespi' => 'juan-crespi-portrait.jpg',
    'junipero-serra' => 'junipero_serra.jpg',
    'juan-bautista-de-anza' => 'juan-bautista-de-anza-portrait-1774.jpg',
    'juventino-del-valle' => 'juventino-del-valle-black-walnut-tree-camulos-1910s.jpg',
    'john-c-fremont' => 'john-c-fremont-portrait-california-state-library-scaled.png',
    'abel-stearns' => 'abel-stearns-portrait-california-state-library-1840-1860-scaled.jpg',
    'thomas-o-larkin' => 'thomas-o-larkin-portrait-california-state-library.jpg',
    'edwin-bryant' => 'edwin-bryant.jpg',
    'kit-carson' => 'kit_carson_photograph_restored.jpg',
    'andres-pico' => 'andres_pico_circa_1850.jpg',
    'james-w-marshall' => 'james-w-marshall-portrait-1870s.jpg',
    'william-lewis-manly' => 'william-lewis-manly-portrait-1890s.jpg',
    'cave-johnson-couts' => 'cave-johnson-couts-portrait-us-army.jpg',
    'juan-bandini' => 'juan-bandini-portrait-c1850s.jpg',
    'edward-fitzgerald-beale' => 'edward-fitzgerald-beale-portrait.jpg',
    'jose-antonio-aguirre' => 'jose-antonio-aguirre-portrait-san-diego-history.jpg',
    'henry-clay-wiley' => 'henry-clay-wiley-portrait.png',
    'arthur-b-perkins' => 'arthur-b-perkins-outstanding-citizen-newhall-1964.jpg',
    'scott-wilk' => 'about-scott-wilk-california-assembly.png',
    'john-gifford' => 'gifford-john-timothy-portrait-1870s-scvhs-scaled.jpg',
    'remi-nadeau-i' => 'nadeau-remi-i-portrait-citymakers-1977-p65-scaled.jpg',
    'dante-acosta' => 'dante-acosta.jpg',
    'rodolfo-acosta' => 'rodolfo_acosta_in_one-eyed_jacks.jpg',
];

foreach ($mappings as $slug => $filename) {
    $person = \craft\elements\Entry::find()->section('persons')->slug($slug)->one();
    if (!$person) {
        echo "Person not found: $slug\n";
        continue;
    }
    $asset = \craft\elements\Asset::find()->volume('archiveMedia')->filename($filename)->one();
    if (!$asset) {
        echo "Asset not found: $filename\n";
        continue;
    }
    $person->setFieldValue('featuredImage', [$asset->id]);
    Craft::$app->elements->saveElement($person, false);
    echo "Connected: $slug → $filename\n";
}
