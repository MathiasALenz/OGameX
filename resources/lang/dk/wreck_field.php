<?php

return [
  // Wreck Field Information and Status
  'wreck_field' => 'Vragfelt',
  'wreck_field_formed' => 'Et vragfelt er opstået ved koordinater {coordinates}',
  'wreck_field_expired' => 'Vragfeltet er udløbet',
  'wreck_field_burned' => 'Vragfeltet er blevet brændt',

  // Wreck Field Conditions
  'formation_conditions' => 'Et vragfelt dannes, når mindst {min_resources} ressourcer går tabt, og mindst {min_percentage}% af den forsvarende flåde bliver ødelagt.',
  'resources_lost' => 'Tabte ressourcer: {amount}',
  'fleet_percentage' => 'Flåde ødelagt: {percentage}%',

  // Repair Information
  'repair_time' => 'Reparationstid',
  'repair_progress' => 'Reparationsfremskridt',
  'repair_completed' => 'Reparation fuldført',
  'repairs_underway' => 'Reparation i gang',
  'repair_duration_min' => 'Minimum reparationstid: {minutes} minutter',
  'repair_duration_max' => 'Maksimal reparationstid: {hours} timer',
  'repair_speed_bonus' => 'Rumdok niveau {level} giver {bonus}% reparationshastighed',

  // Ships in Wreck Field
  'ships_in_wreck_field' => 'Skibe i vragfeltet',
  'ship_type' => 'Skibstype',
  'quantity' => 'Antal',
  'repairable' => 'Reparerbare',
  'total_ships' => 'Samlet antal skibe: {count}',

  // Actions
  'start_repairs' => 'Start reparation',
  'complete_repairs' => 'Fuldfør reparation',
  'burn_wreck_field' => 'Brænd vragfelt',
  'cancel_repairs' => 'Annuller reparation',

  // Action Messages
  'repair_started' => 'Reparation er startet. Forventet færdig: {time}',
  'repairs_completed' => 'Alle reparationer er fuldført. Skibene er klar til udsendelse.',
  'wreck_field_burned_success' => 'Vragfeltet er blevet brændt.',
  'cannot_repair' => 'Dette vragfelt kan ikke repareres.',
  'cannot_burn' => 'Dette vragfelt kan ikke brændes, mens reparationer er i gang.',

  // Galaxy View
  'wreck_field_icon' => 'VF',
  'wreck_field_tooltip' => 'Vragfelt ({time_remaining} tilbage)',
  'click_to_repair' => 'Klik for at gå til Rumdok for reparation',
  'no_wreck_field' => 'Intet vragfelt',

  // Space Dock Integration
  'space_dock_required' => 'Rumdok niveau 1 kræves for at reparere vragfelter.',
  'space_dock_level' => 'Rumdok niveau: {level}',
  'upgrade_space_dock' => 'Opgrader Rumdok for at reparere flere skibe',
  'repair_capacity_reached' => 'Maksimal reparationskapacitet nået. Opgrader Rumdok for at øge kapaciteten.',

  // Battle Reports
  'wreck_field_section' => 'Vragfeltinformation',
  'ships_available_for_repair' => 'Skibe tilgængelige for reparation: {count}',
  'wreck_field_resources' => 'Vragfeltet indeholder cirka {value} ressourcer i skibsværdi.',

  // Admin Settings
  'settings_title' => 'Indstillinger for vragfelter',
  'enabled_description' => 'Vragfelter gør det muligt at genoprette ødelagte skibe via Rumdok. Skibe kan repareres, hvis ødelæggelsen opfylder visse kriterier.',
  'percentage_setting' => 'Ødelagte skibe i vragfelt:',
  'min_resources_setting' => 'Minimum ødelæggelse for vragfelt:',
  'min_fleet_percentage_setting' => 'Minimum flådeødelæggelsesprocent:',
  'lifetime_setting' => 'Vragfeltets levetid (timer):',
  'repair_max_time_setting' => 'Maksimal reparationstid (timer):',
  'repair_min_time_setting' => 'Minimum reparationstid (minutter):',

  // Errors and Warnings
  'error_no_wreck_field' => 'Intet vragfelt fundet på denne position.',
  'error_not_owner' => 'Du ejer ikke dette vragfelt.',
  'error_already_repairing' => 'Reparationer er allerede i gang.',
  'error_no_ships' => 'Ingen skibe tilgængelige for reparation.',
  'error_space_dock_required' => 'Rumdok niveau 1 kræves for at reparere vragfelter.',
  'error_cannot_collect_late_added' => 'Skibe tilføjet under igangværende reparationer kan ikke indsamles manuelt. Du skal vente, til alle reparationer er fuldført automatisk.',
  'warning_auto_return' => 'Reparerede skibe bliver automatisk sat i tjeneste igen {hours} timer efter reparationens afslutning.',

  // Time Remaining
  'time_remaining' => '{hours}t {minutes}m tilbage',
  'expires_soon' => 'Udløber snart',
  'repair_time_remaining' => 'Reparation færdig: {time}',

  // Status Messages
  'status_active' => 'Aktiv',
  'status_repairing' => 'Reparerer',
  'status_completed' => 'Fuldført',
  'status_burned' => 'Brændt',
  'status_expired' => 'Udløbet',

  // Action Results
  'repairs_started' => 'Reparationer startet',
  'all_ships_deployed' => 'Alle skibe er sat i tjeneste igen',
  'no_ships_ready' => 'Ingen skibe klar til indsamling',
  'repairs_not_started' => 'Reparationer er ikke startet endnu',
];
