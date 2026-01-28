<?php

return [
  // Space Dock Building
  'space_dock' => [
    'name' => 'Rumdok',
    'description' => 'Vrag kan repareres i Rumdokken.',
    'description_long' => 'Rumdokken giver mulighed for at reparere skibe, der er blevet ødelagt i kamp og efterladt som vrag. Reparationstiden er maksimalt 12 timer, men der går mindst 30 minutter, før skibene kan tages i brug igen.

Da Rumdokken svæver i kredsløb, kræver den ikke et planetfelt.',
    'requirements' => 'Kræver Skibsværft niveau 2',
    'field_consumption' => 'Forbruger ikke planetfelter (svæver i kredsløb)',

    // Space Dock Interface
    'wreck_field_section' => 'Vragfelt',
    'no_wreck_field' => 'Intet vragfelt tilgængeligt på denne position.',
    'wreck_field_info' => 'Et vragfelt er tilgængeligt og indeholder skibe, der kan repareres.',
    'ships_available' => 'Skibe tilgængelige til reparation: {count}',
    'repair_capacity' => 'Reparationskapacitet baseret på Rumdok-niveau {level}',

    // Repair Actions
    'start_repair' => 'Start reparation af vragfelt',
    'repair_in_progress' => 'Reparation i gang',
    'repair_completed' => 'Reparation fuldført',
    'deploy_ships' => 'Udsend reparerede skibe',
    'burn_wreck_field' => 'Fjern vragfelt',

    // Repair Information
    'repair_time' => 'Estimeret reparationstid: {time}',
    'repair_progress' => 'Reparationsfremskridt: {progress}%',
    'completion_time' => 'Fuldføres: {time}',
    'auto_deploy_warning' => 'Skibe udsendes automatisk {hours} timer efter reparationen er fuldført, hvis de ikke udsendes manuelt.',

    // Level Effects
    'level_effects' => [
      'repair_speed' => 'Reparationshastighed øget med {bonus}%',
      'capacity_increase' => 'Maksimalt antal reparerbare skibe øget',
    ],

    // Status Messages
    'status' => [
      'no_dock' => 'Rumdok kræves for at reparere vragfelter',
      'level_too_low' => 'Rumdok niveau 1 kræves for at reparere vragfelter',
      'no_wreck_field' => 'Intet vragfelt tilgængeligt',
      'repairing' => 'Reparerer vragfelt',
      'ready_to_deploy' => 'Reparation fuldført, skibe klar til udsendelse',
    ],
  ],

  // General Facilities Messages
  'actions' => [
    'build' => 'Byg',
    'upgrade' => 'Opgrader til niveau {level}',
    'downgrade' => 'Nedgrader til niveau {level}',
    'demolish' => 'Nedriv',
    'cancel' => 'Annuller',
  ],

  // Requirements
  'requirements' => [
    'met' => 'Krav opfyldt',
    'not_met' => 'Krav ikke opfyldt',
    'research' => 'Forskning: {requirement}',
    'building' => 'Bygning: {requirement} niveau {level}',
  ],

  // Resources
  'cost' => [
    'metal' => 'Metal: {amount}',
    'crystal' => 'Krystal: {amount}',
    'deuterium' => 'Deuterium: {amount}',
    'energy' => 'Energi: {amount}',
    'dark_matter' => 'Mørkt materiale: {amount}',
    'total' => 'Samlet pris: {amount}',
  ],

  // Time
  'construction_time' => 'Byggetid: {time}',
  'upgrade_time' => 'Opgraderingstid: {time}',
];
