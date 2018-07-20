<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'RSS Fetcher',
        'description' => 'Haalt RSS items op van diverse bronnen om op jouw website te plaatsen',
    ],
    'permissions' => [
        'access_sources' => 'Beheer bronnen',
        'access_items' => 'Beheer items',
        'access_import_export' => 'Toestaan importeren en exporteren',
    ],
    'navigation' => [
        'menu_label' => 'RSS Fetcher',
        'side_menu_label_sources' => 'Bronnen',
        'side_menu_label_items' => 'Items',
        'side_menu_label_feeds' => 'Feeds',
    ],
    'source' => [
        'source' => 'Bron',
        'sources' => 'Bronnen',
        'name' => 'Naam',
        'source_url' => 'Bron URL',
        'source_id' => 'Bron ID',
        'description' => 'Omschrijving',
        'enabled' => 'Ingeschakeld',
        'enabled_comment' => 'Schuif om de bron in te schakelen',
        'items_count' => 'Aantal items',
        'last_fetched' => 'Laatst opgehaald',
        'max_items' => 'Maximum items',
        'max_items_description' => 'Maximaal aantal items om op te halen van bron',
        'publish_new_items' => 'Publiceer nieuw binnengehaalde items meteen',
        'source_not_enabled' => 'Bron is niet inschakeld',
        'items_fetch_success' => 'RSS items succesvol opgehaald van deze bron',
        'items_fetch_fail' => 'Er is een fout opgetreden tijdens het ophalen van de items: :error',
        'new_source' => 'Nieuwe bron',
        'create_source' => 'Bron aanmaken',
        'edit_source' => 'Wijzig bron',
        'manage_sources' => 'Beheer bronnen',
        'return_to_sources' => 'Terug naar bronlijst',
        'fetch_items' => 'Items ophalen',
        'fetching_items' => 'Items ophalen...',
        'delete_confirm' => 'Weet je het zeker?',
        'import_sources' => 'Importeer bronnen',
        'export_sources' => 'Exporteer bronnen',
        'update_existing_sources' => 'Bijwerken van bestaande bronnen',
        'update_existing_sources_comment' => 'Selecteer deze optie om bronnen bij te werken met exact dezelfde ID.',
    ],
    'item' => [
        'item' => 'Item',
        'items' => 'Items',
        'items_per_page' => 'Aantal items per pagina',
        'items_per_page_validation' => 'Ongeldig formaat voor items per pagina',
        'new_item' => 'Nieuw item',
        'create_item' => 'Item aanmaken',
        'edit_item' => 'Wijzig item',
        'manage_items' => 'Beheer items',
        'return_to_items' => 'Terug naar itemlijst',
        'delete_confirm' => 'Weet je het zeker?',
        'hide_published' => 'Verberg gepubliceerd',
        'import_sources' => 'Importeer bronnen',
        'export_sources' => 'Exporteer bronnen',
        'publish' => 'Publiceren',
        'unpublish' => 'Niet publiceren',
        'enclosure_url' => 'Enclosure URL',
        'enclosure_length' => 'Enclosure grootte',
        'enclosure_type' => 'Enclosure type',
        'title' => 'Titel',
        'link' => 'Link',
        'description' => 'Omschrijving',
        'author' => 'Auteur',
        'category' => 'Categorie',
        'comments' => 'Reacties',
        'published_at' => 'Gepubliceerd op',
        'is_published' => 'Gepubliceerd',
        'is_published_comment' => 'Schuif om dit item te publiceren',
    ],
    'feed' => [
        'feed' => 'Feed',
        'feeds' => 'Feeds',
        'title' => 'Titel',
        'type' => 'Type',
        'description' => 'Omschrijving',
        'path' => 'Pad',
        'path_placeholder' => 'pad/naar/feed',
        'path_comment' => 'Geef het relatieve pad op voor deze feed. Bijvoorbeeld nieuws/financieel/recent',
        'sources' => 'Bronnen',
        'sources_comment' => 'Selecteer de bronnen die opgenomen moeten worden in deze feed',
        'enabled' => 'Ingeschakeld',
        'enabled_comment' => 'Schuif om de feed in te schakelen',
        'max_items' => 'Maximaal aantal items in feed',
        'new_feed' => 'Nieuwe Feed',
        'return_to_feeds' => 'Terug naar feed lijst',
        'delete_confirm' => 'Weet je het zeker?',
        'manage_feeds' => 'Beheer feeds',
        'create_feed' => 'Feed aanmaken',
        'edit_feed' => 'Wijzig feed',
    ],
    'component' => [
        'item_list' => [
            'name' => 'Itemlijst',
            'description' => 'Toont een lijst van meest recente items.',
        ],
        'paginatable_item_list' => [
            'name' => 'Pagineerbare itemlijst',
            'description' => 'Toont een pagineerbare lijst van items.',
        ],
        'source_list' => [
            'name' => 'Bronlijst',
            'description' => 'Toont een lijst van bronnen.',
        ],
    ],
    'report_widget' => [
        'headlines' => [
            'name' => 'RSS Item Widget',
            'description' => 'Toont de meest recente RSS items',
            'title_title' => 'Widget titel',
            'title_default' => 'Laatste headlines',
            'title_required' => 'Widget titel is vereist',
            'max_items_title' => 'Aantal items om te tonen',
            'date_format_title' => 'Datum formaat',
            'date_format_description' => 'Raadpleeg de officiële `date` PHP documentatie op php.net.',
        ],
    ],
];
