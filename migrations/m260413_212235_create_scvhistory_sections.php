<?php

namespace craft\contentmigrations;

use Craft;
use craft\db\Migration;
use craft\models\Section;
use craft\models\Section_SiteSettings;
use craft\fields\PlainText;
use craft\fields\Url;
use craft\fields\Number;
use craft\fields\Lightswitch;

class m260413_212235_create_scvhistory_sections extends Migration
{
    public function safeUp(): bool
    {
        $fieldsService = Craft::$app->getFields();
        $entriesService = Craft::$app->getEntries();
        $primarySiteId = Craft::$app->getSites()->getPrimarySite()->id;

        // SECTIONS
        $sections = [
            ['name' => 'Articles',          'handle' => 'articles',         'type' => Section::TYPE_CHANNEL],
            ['name' => 'Persons',           'handle' => 'persons',          'type' => Section::TYPE_CHANNEL],
            ['name' => 'Organizations',     'handle' => 'organizations',    'type' => Section::TYPE_CHANNEL],
            ['name' => 'Places',            'handle' => 'places',           'type' => Section::TYPE_CHANNEL],
            ['name' => 'Groups',            'handle' => 'groups',           'type' => Section::TYPE_CHANNEL],
            ['name' => 'Collections',       'handle' => 'collections',      'type' => Section::TYPE_STRUCTURE],
            ['name' => 'Obituaries',        'handle' => 'obituaries',       'type' => Section::TYPE_CHANNEL],
            ['name' => 'Military Profiles', 'handle' => 'militaryProfiles', 'type' => Section::TYPE_CHANNEL],
            ['name' => 'Events',            'handle' => 'events',           'type' => Section::TYPE_CHANNEL],
        ];

        foreach ($sections as $s) {
            $section = new Section();
            $section->name = $s['name'];
            $section->handle = $s['handle'];
            $section->type = $s['type'];
            $section->siteSettings = [
                new Section_SiteSettings([
                    'siteId' => $primarySiteId,
                    'enabledByDefault' => true,
                    'hasUrls' => true,
                    'uriFormat' => strtolower($s['handle']) . '/{slug}',
                    'template' => '_entries/' . strtolower($s['handle']),
                ])
            ];
            $entriesService->saveSection($section);
            echo "Created section: {$s['name']}\n";
        }

        // FIELDS
        $allFields = [
            // Article fields
            ['type' => PlainText::class,   'name' => 'Originally Published Title', 'handle' => 'originallyPublishedTitle'],
            ['type' => PlainText::class,   'name' => 'Original Publish Date',      'handle' => 'originalPublishDate'],
            ['type' => PlainText::class,   'name' => 'Subheadline',                'handle' => 'subheadline'],
            ['type' => PlainText::class,   'name' => 'Source Line',                'handle' => 'sourceLine'],
            ['type' => PlainText::class,   'name' => 'Webmaster Note Top',         'handle' => 'webmasterNoteTop',         'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Webmaster Note Bottom',      'handle' => 'webmasterNoteBottom',      'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Photo Sources',              'handle' => 'photoSources',             'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Fine Print',                 'handle' => 'finePrint',                'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Legacy Key',                 'handle' => 'legacyKey'],
            ['type' => PlainText::class,   'name' => 'Legacy URL',                 'handle' => 'legacyUrl'],
            ['type' => PlainText::class,   'name' => 'Archive URL',                'handle' => 'archiveUrl'],
            ['type' => PlainText::class,   'name' => 'Accession Batch',            'handle' => 'accessionBatch'],
            ['type' => PlainText::class,   'name' => 'Batch Sequence',             'handle' => 'batchSequence'],
            ['type' => Number::class,      'name' => 'Article Latitude',           'handle' => 'articleLat'],
            ['type' => Number::class,      'name' => 'Article Longitude',          'handle' => 'articleLng'],
            // Person fields
            ['type' => PlainText::class,   'name' => 'Full Name',                  'handle' => 'fullName'],
            ['type' => PlainText::class,   'name' => 'Birth Date',                 'handle' => 'birthDate'],
            ['type' => PlainText::class,   'name' => 'Birthplace',                 'handle' => 'birthplace'],
            ['type' => PlainText::class,   'name' => 'Death Date',                 'handle' => 'deathDate'],
            ['type' => PlainText::class,   'name' => 'Burial Place',               'handle' => 'burialPlace'],
            ['type' => PlainText::class,   'name' => 'Occupation',                 'handle' => 'occupation'],
            ['type' => PlainText::class,   'name' => 'Author Bio',                 'handle' => 'authorBio',                'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Person Webmaster Note Top',  'handle' => 'personWebmasterNoteTop',   'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Person Webmaster Note Bottom','handle' => 'personWebmasterNoteBottom','multiline' => true],
            ['type' => PlainText::class,   'name' => 'Person Fine Print',          'handle' => 'personFinePrint',          'multiline' => true],
            ['type' => Url::class,         'name' => 'Person Wikipedia URL',       'handle' => 'personWikipediaUrl'],
            ['type' => Url::class,         'name' => 'Person Find A Grave URL',    'handle' => 'personGraveUrl'],
            ['type' => PlainText::class,   'name' => 'Person Legacy URL',          'handle' => 'personLegacyUrl'],
            // Place fields
            ['type' => PlainText::class,   'name' => 'Place Address',              'handle' => 'placeAddress'],
            ['type' => Number::class,      'name' => 'Place Latitude',             'handle' => 'placeLat'],
            ['type' => Number::class,      'name' => 'Place Longitude',            'handle' => 'placeLng'],
            ['type' => PlainText::class,   'name' => 'Date Established',           'handle' => 'dateEstablished'],
            ['type' => PlainText::class,   'name' => 'Place Aliases',              'handle' => 'placeAliases'],
            ['type' => PlainText::class,   'name' => 'Place CHL Number',           'handle' => 'placeChlNumber'],
            ['type' => Url::class,         'name' => 'Place Wikipedia URL',        'handle' => 'placeWikipediaUrl'],
            ['type' => Url::class,         'name' => 'Place CHL URL',              'handle' => 'placeChlUrl'],
            ['type' => Url::class,         'name' => 'Place SCV Landmark URL',     'handle' => 'placeScvhlUrl'],
            ['type' => Lightswitch::class, 'name' => 'Place Featured',             'handle' => 'placeFeatured'],
            ['type' => Lightswitch::class, 'name' => 'Place SCV Landmark',         'handle' => 'placeScvhlCheckbox'],
            ['type' => PlainText::class,   'name' => 'Place Legacy URL',           'handle' => 'placeLegacyUrl'],
            // Organization fields
            ['type' => PlainText::class,   'name' => 'Date Founded',               'handle' => 'dateFounded'],
            ['type' => PlainText::class,   'name' => 'Org Aliases',                'handle' => 'orgAliases'],
            ['type' => PlainText::class,   'name' => 'Org Address',                'handle' => 'orgAddress'],
            ['type' => Number::class,      'name' => 'Org Latitude',               'handle' => 'orgLat'],
            ['type' => Number::class,      'name' => 'Org Longitude',              'handle' => 'orgLng'],
            ['type' => Url::class,         'name' => 'Org Website',                'handle' => 'orgWebsite'],
            ['type' => Url::class,         'name' => 'Org Wikipedia URL',          'handle' => 'orgWikipediaUrl'],
            ['type' => PlainText::class,   'name' => 'Org Legacy URL',             'handle' => 'orgLegacyUrl'],
            ['type' => PlainText::class,   'name' => 'Term Notes',                 'handle' => 'termNotes',                'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Org Fine Print',             'handle' => 'orgFinePrint',             'multiline' => true],
            ['type' => Lightswitch::class, 'name' => 'Has Parent Org',             'handle' => 'hasParentOrg'],
            ['type' => Lightswitch::class, 'name' => 'Has Sub-Boards',             'handle' => 'hasSubBoards'],
            // Event fields
            ['type' => PlainText::class,   'name' => 'Event Date',                 'handle' => 'eventDate'],
            ['type' => PlainText::class,   'name' => 'Event Date Start',           'handle' => 'eventDateStart'],
            ['type' => PlainText::class,   'name' => 'Event Date End',             'handle' => 'eventDateEnd'],
            ['type' => Lightswitch::class, 'name' => 'Event Recurring',            'handle' => 'eventRecurring'],
            ['type' => PlainText::class,   'name' => 'Event Frequency',            'handle' => 'eventFrequency'],
            ['type' => PlainText::class,   'name' => 'Event Next Occurrence',      'handle' => 'eventNextOccurrence'],
            ['type' => PlainText::class,   'name' => 'Event Significance',         'handle' => 'eventSignificance',        'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Event Legacy URL',           'handle' => 'eventLegacyUrl'],
            ['type' => Url::class,         'name' => 'Event Wikipedia URL',        'handle' => 'eventWikipediaUrl'],
            ['type' => PlainText::class,   'name' => 'Event CHL Number',           'handle' => 'eventChlNumber'],
            // Obituary fields
            ['type' => PlainText::class,   'name' => 'Publication Details',        'handle' => 'publicationDetails'],
            ['type' => PlainText::class,   'name' => 'Obit Date of Death',         'handle' => 'obitDateOfDeath'],
            ['type' => PlainText::class,   'name' => 'Obit Date Published',        'handle' => 'obitDatePublished'],
            ['type' => PlainText::class,   'name' => 'Obit Legacy URL',            'handle' => 'obitLegacyUrl'],
            ['type' => Url::class,         'name' => 'Obit Find A Grave URL',      'handle' => 'obitGraveUrl'],
            ['type' => PlainText::class,   'name' => 'Obit Webmaster Note Top',    'handle' => 'obitWebmasterNoteTop',     'multiline' => true],
            ['type' => PlainText::class,   'name' => 'Obit Webmaster Note Bottom', 'handle' => 'obitWebmasterNoteBottom',  'multiline' => true],
            // Military Profile fields
            ['type' => PlainText::class,   'name' => 'MP Rank',                    'handle' => 'mpRank'],
            ['type' => PlainText::class,   'name' => 'MP Specialty MOS',           'handle' => 'mpSpecialty'],
            ['type' => PlainText::class,   'name' => 'MP Unit',                    'handle' => 'mpUnit'],
            ['type' => PlainText::class,   'name' => 'MP Base Station',            'handle' => 'mpBase'],
            ['type' => PlainText::class,   'name' => 'MP Service Start',           'handle' => 'mpServiceStart'],
            ['type' => PlainText::class,   'name' => 'MP Service End',             'handle' => 'mpServiceEnd'],
            ['type' => PlainText::class,   'name' => 'MP Combat Operations',       'handle' => 'mpCombatOperations'],
            ['type' => PlainText::class,   'name' => 'MP Home of Record',          'handle' => 'mpHomeOfRecord'],
            ['type' => PlainText::class,   'name' => 'MP High School',             'handle' => 'mpHighSchool'],
            ['type' => PlainText::class,   'name' => 'MP Date of Birth',           'handle' => 'mpDateOfBirth'],
            ['type' => PlainText::class,   'name' => 'MP Date of Death',           'handle' => 'mpDateOfDeath'],
            ['type' => Number::class,      'name' => 'MP Age at Loss',             'handle' => 'mpAgeAtLoss'],
            ['type' => PlainText::class,   'name' => 'MP Burial Place',            'handle' => 'mpBurialPlace'],
            ['type' => PlainText::class,   'name' => 'MP Awards Citations',        'handle' => 'mpAwards',                 'multiline' => true],
            ['type' => PlainText::class,   'name' => 'MP Narrative',               'handle' => 'mpNarrative',              'multiline' => true],
            ['type' => PlainText::class,   'name' => 'MP Legacy URL',              'handle' => 'mpLegacyUrl'],
            ['type' => Url::class,         'name' => 'MP Wikipedia URL',           'handle' => 'mpWikipediaUrl'],
            ['type' => Url::class,         'name' => 'MP Find A Grave URL',        'handle' => 'mpFindAGraveUrl'],
            ['type' => PlainText::class,   'name' => 'MP Webmaster Note Top',      'handle' => 'mpWebmasterNoteTop',       'multiline' => true],
            ['type' => PlainText::class,   'name' => 'MP Webmaster Note Bottom',   'handle' => 'mpWebmasterNoteBottom',    'multiline' => true],
            ['type' => PlainText::class,   'name' => 'MP Fine Print',              'handle' => 'mpFinePrint',              'multiline' => true],
            ['type' => Lightswitch::class, 'name' => 'MP Has Spouse',              'handle' => 'mpHasSpouse'],
            ['type' => Lightswitch::class, 'name' => 'MP Has Children',            'handle' => 'mpHasChildren'],
            ['type' => Lightswitch::class, 'name' => 'MP Has Parents',             'handle' => 'mpHasParents'],
            ['type' => Lightswitch::class, 'name' => 'MP Has Siblings',            'handle' => 'mpHasSiblings'],
            // Group fields
            ['type' => PlainText::class,   'name' => 'Group Aliases',              'handle' => 'groupAliases'],
            ['type' => PlainText::class,   'name' => 'Group Date Start',           'handle' => 'groupDateStart'],
            ['type' => PlainText::class,   'name' => 'Group Date End',             'handle' => 'groupDateEnd'],
            ['type' => PlainText::class,   'name' => 'Group Legacy URL',           'handle' => 'groupLegacyUrl'],
            ['type' => Url::class,         'name' => 'Group Website',              'handle' => 'groupWebsite'],
            // Media/Asset fields
            ['type' => PlainText::class,   'name' => 'Photo Date',                 'handle' => 'photoDate'],
            ['type' => PlainText::class,   'name' => 'Photo Credit',               'handle' => 'photoCredit'],
            ['type' => PlainText::class,   'name' => 'Photo Source Code',          'handle' => 'photoSourceCode'],
            ['type' => PlainText::class,   'name' => 'Photo Sequence',             'handle' => 'photoSequence'],
            ['type' => PlainText::class,   'name' => 'Extended Caption',           'handle' => 'photoCaptionExt',          'multiline' => true],
        ];

        foreach ($allFields as $f) {
            $field = new $f['type']();
            $field->name = $f['name'];
            $field->handle = $f['handle'];
            if (!empty($f['multiline'])) {
                $field->multiline = true;
            }
            $fieldsService->saveField($field);
            echo "Created field: {$f['name']}\n";
        }

        echo "\nDone. All sections and fields created.\n";
        return true;
    }

    public function safeDown(): bool
    {
        echo "m260413_212235_create_scvhistory_sections cannot be reverted.\n";
        return false;
    }
}