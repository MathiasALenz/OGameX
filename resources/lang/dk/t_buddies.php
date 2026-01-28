<?php

return [
  // Error messages
  'error' => [
    'cannot_send_to_self' => 'Du kan ikke sende en venneanmodning til dig selv.',
    'user_not_found' => 'Bruger ikke fundet.',
    'cannot_send_to_admin' => 'Du kan ikke sende venneanmodninger til administratorer.',
    'cannot_send_to_user' => 'Du kan ikke sende en venneanmodning til denne bruger.',
    'already_buddies' => 'I er allerede venner.',
    'request_exists' => 'Der findes allerede en venneanmodning mellem disse brugere.',
    'request_not_found' => 'Venneanmodning ikke fundet.',
    'not_authorized_accept' => 'Du har ikke tilladelse til at acceptere denne anmodning.',
    'not_authorized_reject' => 'Du har ikke tilladelse til at afvise denne anmodning.',
    'not_authorized_cancel' => 'Du har ikke tilladelse til at annullere denne anmodning.',
    'already_processed' => 'Denne anmodning er allerede blevet behandlet.',
    'relationship_not_found' => 'Venneforhold ikke fundet.',
    'cannot_ignore_self' => 'Du kan ikke ignorere dig selv.',
    'already_ignored' => 'Spilleren er allerede ignoreret.',
    'not_in_ignore_list' => 'Spilleren er ikke på din ignoreringsliste.',
    'send_request_failed' => 'Kunne ikke sende venneanmodning.',
    'ignore_player_failed' => 'Kunne ikke ignorere spiller.',
    'delete_buddy_failed' => 'Kunne ikke fjerne ven.',
    'search_too_short' => 'For få tegn! Indtast mindst 2 tegn.',
    'invalid_action' => 'Ugyldig handling.',
  ],

  // Success messages
  'success' => [
    'request_sent' => 'Venneanmodning sendt!',
    'request_cancelled' => 'Venneanmodning annulleret.',
    'request_accepted' => 'Venneanmodning accepteret!',
    'request_rejected' => 'Venneanmodning afvist.',
    'request_accepted_symbol' => '✓ Venneanmodning accepteret',
    'request_rejected_symbol' => '✗ Venneanmodning afvist',
    'buddy_deleted' => 'Ven fjernet!',
    'player_ignored' => 'Spiller ignoreret!',
    'player_unignored' => 'Spiller fjernet fra ignoreringslisten.',
  ],

  // UI labels and titles
  'ui' => [
    'page_title' => 'Venner',
    'my_buddies' => 'Mine venner',
    'ignored_players' => 'Ignorerede spillere',
    'buddy_request' => 'Venneanmodning',
    'buddy_request_title' => 'Venneanmodning',
    'buddy_request_to' => 'Venneanmodning til',
    'buddy_requests' => 'Venneanmodninger',
    'new_buddy_request' => 'Ny venneanmodning',
    'write_message' => 'Skriv besked',
    'send_message' => 'Send besked',
    'send' => 'Send',
    'search_placeholder' => 'Søg...',
    'no_buddies_found' => 'Der blev ikke fundet nogen venner.',
    'no_buddy_requests' => 'Du har ingen venneanmodninger i øjeblikket.',
    'no_requests_sent' => 'Du har ikke sendt nogen venneanmodninger.',
    'no_ignored_players' => 'Ingen ignorerede spillere.',
    'requests_received' => 'modtagne anmodninger',
    'requests_sent' => 'sendte anmodninger',
    'new' => 'ny',
    'new_label' => 'Ny',
    'from' => 'Fra:',
    'to' => 'Til:',
    'online' => 'online',
    'received_request_from' => 'Du har modtaget en ny venneanmodning fra',
  ],

  // Actions
  'action' => [
    'accept_request' => 'Accepter venneanmodning',
    'reject_request' => 'Afvis venneanmodning',
    'withdraw_request' => 'Tilbagetræk venneanmodning',
    'delete_buddy' => 'Fjern ven',
    'confirm_delete_buddy' => 'Er du sikker på, at du vil fjerne denne ven?',
    'add_as_buddy' => 'Tilføj som ven',
    'ignore_player' => 'Er du sikker på, at du vil ignorere',
    'remove_from_ignore' => 'Fjern fra ignoreringsliste',
    'report_message' => 'Rapportér denne besked til en spiloperatør?',
  ],

  // Table headers
  'table' => [
    'id' => 'ID',
    'name' => 'Navn',
    'points' => 'Point',
    'rank' => 'Rang',
    'alliance' => 'Alliance',
    'coords' => 'Koordinater',
    'actions' => 'Handlinger',
  ],
  // Common
  'common' => [
    'yes' => 'Ja',
    'no' => 'Nej',
    'caution' => 'Advarsel',
  ],
];
