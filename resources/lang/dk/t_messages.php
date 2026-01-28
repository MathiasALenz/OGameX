<?php

return [
  // ------------------------
  'welcome_message' => [
    'from' => 'OGameX',
    'subject' => 'Velkommen til OGameX!',
    'body' => 'Hilsner, Kejser :player!

Tillykke med starten på din glorværdige karriere. Jeg vil være her for at guide dig gennem dine første skridt.

Til venstre kan du se menuen, som giver dig mulighed for at overvåge og styre dit galaktiske imperium.

Du har allerede set Oversigten. Ressourcer og Faciliteter giver dig mulighed for at bygge strukturer, der hjælper dig med at udvide dit imperium. Start med at bygge et Solkraftværk for at skaffe energi til dine miner.

Udvid derefter din Metalmine og Krystal­mine for at producere vitale ressourcer. Ellers er du velkommen til blot at kigge dig omkring. Du vil hurtigt føle dig hjemme, det er jeg sikker på.

Du kan finde mere hjælp, tips og taktikker her:

Discord Chat: Discord‑server
Forum: OGameX‑forum
Support: Spilsupport

Du finder kun aktuelle annonceringer og ændringer til spillet i forummet.

Nu er du klar til fremtiden. Held og lykke!

Denne besked bliver slettet om 7 dage.',
  ],

  // ------------------------
  'return_of_fleet_with_resources' => [
    'from' => 'Flådekommando',
    'subject' => 'Flåde vender tilbage',
    'body' => 'Din flåde er på vej tilbage fra :from til :to og har leveret sine varer:

Metal: :metal
Krystal: :crystal
Deuterium: :deuterium',
  ],

  // ------------------------
  'return_of_fleet' => [
    'from' => 'Flådekommando',
    'subject' => 'Flåde vender tilbage',
    'body' => 'Din flåde er på vej tilbage fra :from til :to.

Flåden leverer ingen varer.',
  ],

  // ------------------------
  'fleet_deployment_with_resources' => [
    'from' => 'Flådekommando',
    'subject' => 'Flåde vender tilbage',
    'body' => 'En af dine flåder fra :from er nået frem til :to og har leveret sine varer:

Metal: :metal
Krystal: :crystal
Deuterium: :deuterium',
  ],

  // ------------------------
  'fleet_deployment' => [
    'from' => 'Flådekommando',
    'subject' => 'Flåde vender tilbage',
    'body' => 'En af dine flåder fra :from er nået frem til :to. Flåden leverer ingen varer.',
  ],

  // ------------------------
  'transport_arrived' => [
    'from' => 'Flådekommando',
    'subject' => 'Ankomst til planet',
    'body' => 'Din flåde fra :from når frem til :to og leverer sine varer:
Metal: :metal Krystal: :crystal Deuterium: :deuterium',
  ],

  // ------------------------
  'transport_received' => [
    'from' => 'Flådekommando',
    'subject' => 'Indkommende flåde',
    'body' => 'En indkommende flåde fra :from er nået frem til din planet :to og har leveret sine varer:
Metal: :metal Krystal: :crystal Deuterium: :deuterium',
  ],

  // ------------------------
  'acs_defend_arrival_host' => [
    'from' => 'Rumovervågning',
    'subject' => 'Flåde stopper',
    'body' => 'En flåde er ankommet til :to.',
  ],

  // ------------------------
  'acs_defend_arrival_sender' => [
    'from' => 'Flådekommando',
    'subject' => 'Flåde stopper',
    'body' => 'En flåde er ankommet til :to.',
  ],

  // ------------------------
  'colony_established' => [
    'from' => 'Flådekommando',
    'subject' => 'Koloniseringsrapport',
    'body' => 'Flåden er ankommet til de tildelte koordinater :coordinates, har fundet en ny planet og begynder straks at udvikle den.',
  ],

  // ------------------------
  'colony_establish_fail_astrophysics' => [
    'from' => 'Bosættere',
    'subject' => 'Bosættelsesrapport',
    'body' => 'Flåden er ankommet til de tildelte koordinater :coordinates og konstaterer, at planeten er egnet til kolonisering. Kort efter at have påbegyndt udviklingen af planeten, indser kolonisterne dog, at deres viden om astrofysik ikke er tilstrækkelig til at fuldføre kolonisationen af en ny planet.',
  ],

  // ------------------------
  'espionage_report' => [
    'from' => 'Flådekommando',
    'subject' => 'Spionagerapport fra :planet',
  ],

  // ------------------------
  'espionage_detected' => [
    'from' => 'Flådekommando',
    'subject' => 'Spionagerapport fra planet :planet',
    'body' => "En fremmed flåde fra planet :planet (:attacker_name) blev observeret nær din planet\n:defender\nChance for modspionage: :chance%",
  ],

  // ------------------------
  'battle_report' => [
    'from' => 'Flådekommando',
    'subject' => 'Kampsrapport :planet',
  ],

  // ------------------------
  'fleet_lost_contact' => [
    'from' => 'Flådekommando',
    'subject' => 'Kontakten til den angribende flåde er tabt. :coordinates',
    'body' => '(Det betyder, at den blev ødelagt i første runde.)',
  ],

  // ------------------------
  'debris_field_harvest' => [
    'from' => 'Flåden',
    'subject' => 'Høstningsrapport fra DF ved :coordinates',
    'body' => 'Dine :ship_name (:ship_amount skibe) har en samlet lastevne på :storage_capacity. Ved målet :to flyder der :metal metal, :crystal krystal og :deuterium deuterium i rummet. Du har høstet :harvested_metal Metal, :harvested_crystal Krystal og :harvested_deuterium Deuterium.',
  ],

  // ------------------------
  // Expedition generic message parts
  'expedition_resources_captured' => ':resource_type :resource_amount er blevet indsamlet.',
  'expedition_dark_matter_captured' => '(:dark_matter_amount mørkt materiale)',
  'expedition_units_captured' => 'Følgende skibe er nu en del af flåden:',

  'expedition_unexplored_statement' => 'Uddrag fra kommunikationsofficerens logbog: Det ser ud til, at denne del af universet endnu ikke er blevet udforsket.',
  // Expedition Failed
  'expedition_failed' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'På grund af en fejl i flagskibets centrale computere måtte ekspeditionen afbrydes. Som følge af computerfejlen vender flåden desværre tomhændet hjem.',
      '2' => 'Din ekspedition var tæt på at blive fanget i tyngdefeltet fra en neutronstjerne og brugte lang tid på at komme fri. Det kostede store mængder Deuterium, og flåden måtte vende tilbage uden resultater.',
      '3' => 'Af ukendte årsager gik ekspeditionens spring helt galt. Den var tæt på at lande i hjertet af en sol. Heldigvis endte den i et kendt system, men springet tilbage vil tage længere tid end forventet.',
      '4' => 'En fejl i flagskibets reaktorkerne var tæt på at ødelægge hele ekspeditionsflåden. Heldigvis var teknikerne kompetente nok til at forhindre katastrofen. Reparationerne tog lang tid og tvang flåden til at vende hjem uden at have opnået noget.',
      '5' => 'Et levende væsen af ren energi gik ombord og satte hele besætningen i en trance, hvor de stirrede på hypnotiske mønstre på skærmene. Da de endelig kom til sig selv, var der for lidt Deuterium tilbage til at fortsætte missionen.',
      '6' => 'Det nye navigationsmodul er stadig fejlbehæftet. Ekspeditionens spring førte dem ikke kun i den forkerte retning, men brugte også alt Deuterium. Heldigvis bragte springet dem tæt på afgangsplanetens måne. Skuffede vender de nu tilbage uden impulskraft.',
      '7' => 'Din ekspedition har lært om rummets enorme tomhed. Der var ikke engang en lille asteroide eller stråling, der kunne gøre turen interessant.',
      '8' => 'Nu ved vi, at røde klasse-5-anomalier ikke kun påvirker navigationssystemerne kaotisk, men også fremkalder massive hallucinationer hos besætningen. Ekspeditionen bragte intet tilbage.',
      '9' => 'Din ekspedition tog fantastiske billeder af en supernova. Intet nyt blev opnået, men der er gode chancer for at vinde konkurrencen "Universets bedste billede" i næste måneds OGame‑magasin.',
      '10' => 'Din ekspeditionsflåde fulgte mærkelige signaler i noget tid. Til sidst opdagede de, at signalerne kom fra en gammel sonde, sendt ud for generationer siden for at hilse på fremmede arter. Sonden blev reddet, og museer på din hjemplanet har allerede vist interesse.',
      '11' => 'På trods af lovende scanninger af dette område vender vi desværre tomhændet tilbage.',
      '12' => 'Udover nogle sære små kæledyr fra en ukendt sumpplanet bringer ekspeditionen intet spændende med hjem.',
      '13' => 'Ekspeditionens flagskib kolliderede med et fremmed skib, der sprang ind i flåden uden varsel. Det fremmede skib eksploderede, og flagskibet blev alvorligt beskadiget. Ekspeditionen kan ikke fortsætte og vender hjem efter nødvendige reparationer.',
      '14' => 'Vores ekspeditionsteam fandt en mærkelig koloni, der havde været forladt i årtusinder. Efter landing blev besætningen ramt af høj feber forårsaget af en fremmed virus, som udslettede hele civilisationen. Ekspeditionen må afbrydes, og vi vender tomhændet hjem.',
      '15' => 'En mærkelig computervirus angreb navigationssystemet kort efter afgang. Det fik flåden til at flyve i cirkler. Det siger sig selv, at ekspeditionen ikke var særlig succesfuld.',
    ],
  ],

  // Gain Resources
  'expedition_gain_resources' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'På en isoleret planetoide fandt vi let tilgængelige ressourcefelter og høstede dem med succes.',
      '2' => 'Din ekspedition opdagede en lille asteroide, hvorfra der kunne udvindes ressourcer.',
      '3' => 'Din ekspedition fandt en gammel, fuldt lastet men forladt fragtkonvoj. Nogle af ressourcerne kunne reddes.',
      '4' => 'Din ekspeditionsflåde rapporterer fundet af et kæmpe fremmed skibsvrag. Teknologien kunne ikke udnyttes, men skibet blev skilt ad, og nyttige ressourcer blev udvundet.',
      '5' => 'På en lille måne med egen atmosfære fandt ekspeditionen enorme lagre af rå ressourcer. Besætningen arbejder på at løfte og laste denne naturlige skat.',
      '6' => 'Mineralbælter omkring en ukendt planet indeholdt utallige ressourcer. Ekspeditionsskibene vender tilbage med fulde lastrum!',
    ],
  ],

  // Gain Dark Matter
  'expedition_gain_dark_matter' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Ekspeditionen fulgte mærkelige signaler til en asteroide. I asteroidens kerne blev en lille mængde mørkt materiale fundet. Asteroiden blev taget, og besætningen forsøger nu at udvinde stoffet.',
      '2' => 'Ekspeditionen var i stand til at indsamle og opbevare noget mørkt materiale.',
      '3' => 'Vi mødte en sær alien på et lille skib, som gav os en kasse med mørkt materiale i bytte for nogle simple matematiske beregninger.',
      '4' => 'Vi fandt resterne af et fremmed skib. I lastrummet fandt vi en lille beholder med mørkt materiale!',
      '5' => 'Vores ekspedition fik førstegangskontakt med en særlig race. Et væsen af ren energi, der kaldte sig Legorian, fløj gennem skibene og besluttede at hjælpe vores underudviklede art. En kasse med mørkt materiale materialiserede på broen!',
      '6' => 'Vores ekspedition overtog et spøgelsesskib, som transporterede en lille mængde mørkt materiale. Vi fandt ingen spor af den oprindelige besætning, men vores teknikere reddede stoffet.',
      '7' => 'Vores ekspedition gennemførte et unikt eksperiment og formåede at udvinde mørkt materiale fra en døende stjerne.',
      '8' => 'Vores ekspedition fandt en rusten rumstation, som havde drevet ukontrolleret gennem rummet i lang tid. Stationen var ubrugelig, men der blev fundet mørkt materiale i reaktoren. Teknikerne forsøger at redde så meget som muligt.',
    ],
  ],
  // Gain Ships
  'expedition_gain_ships' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Vores ekspedition fandt en planet, som næsten var blevet ødelagt under en række krige. Forskellige skibe flyder rundt i kredsløb. Teknikerne forsøger at reparere nogle af dem. Måske får vi også information om, hvad der er sket her.',
      '2' => 'Vi fandt en forladt piratstation. Der ligger nogle gamle skibe i hangaren. Vores teknikere undersøger, om nogle af dem stadig kan bruges.',
      '3' => 'Din ekspedition stødte på skibsværfterne fra en koloni, der blev forladt for årtusinder siden. I hangaren fandt de nogle skibe, der kunne bjærges. Teknikerne forsøger at få nogle af dem i luften igen.',
      '4' => 'Vi stødte på resterne af en tidligere ekspedition! Vores teknikere vil forsøge at få nogle af skibene til at fungere igen.',
      '5' => 'Vores ekspedition fandt et gammelt automatisk skibsværft. Nogle af skibene er stadig i produktionsfasen, og vores teknikere forsøger at genaktivere værftets energigeneratorer.',
      '6' => 'Vi fandt resterne af en armada. Teknikerne gik straks i gang med de næsten intakte skibe for at forsøge at få dem til at virke igen.',
      '7' => 'Vi fandt planeten tilhørende en uddød civilisation. En enorm, intakt rumstation kredser stadig i banen. Nogle af dine teknikere og piloter tog til overfladen for at lede efter skibe, der måske stadig kan bruges.',
    ],
  ],

  // Gain Item
  'expedition_gain_item' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'En flygtende flåde efterlod et objekt for at aflede os og lette deres flugt.',
    ],
  ],

  // Failed and Speedup
  'expedition_failed_and_speedup' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Dine ekspeditioner rapporterer ingen anomalier i det udforskede område. Men flåden blev ramt af solvind på vej hjem, hvilket fremskyndede hjemrejsen. Ekspeditionen vender hjem lidt tidligere.',
      '2' => 'Den nye og dristige kommandør rejste med succes gennem et ustabilt ormehul for at forkorte hjemturen! Selve ekspeditionen bragte dog intet nyt.',
      '3' => 'En uventet tilbagestrømning i motorernes energispoler fremskyndede ekspeditionens hjemrejse, og flåden vender hjem tidligere end forventet. De første rapporter fortæller, at der ikke er noget særligt at berette.',
    ],
  ],

  // Failure and Delay
  'expedition_failed_and_delay' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Din ekspedition fløj ind i et område fyldt med partikelstorme. Det overbelastede energilagrene, og de fleste af skibenes hovedsystemer brød sammen. Mekanikerne undgik det værste, men ekspeditionen vender tilbage med stor forsinkelse.',
      '2' => 'Din navigatør lavede en alvorlig beregningsfejl, som fik ekspeditionens spring til at gå helt galt. Flåden missede ikke kun målet, men hjemturen vil tage meget længere tid end planlagt.',
      '3' => 'Solvinden fra en rød kæmpe ødelagde ekspeditionens spring, og det vil tage lang tid at beregne et nyt. Der var intet andet end rummets tomhed i dette område. Flåden vender tilbage senere end forventet.',
    ],
  ],

  // Battle
  'expedition_battle' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Nogle primitive barbarer angriber os med rumskibe, der knap nok kan kaldes skibe. Hvis beskydningen bliver alvorlig, bliver vi nødt til at besvare ilden.',
      '2' => 'Vi måtte kæmpe mod nogle pirater, som heldigvis kun var få.',
      '3' => 'Vi opsnappede radiotransmissioner fra nogle berusede pirater. Det lader til, at vi snart bliver angrebet.',
      '4' => 'Vores ekspedition blev angrebet af en lille gruppe ukendte skibe!',
      '5' => 'Nogle desperate rumpirater forsøgte at kapre vores ekspeditionsflåde.',
      '6' => 'Nogle eksotisk udseende skibe angreb ekspeditionen uden varsel!',
      '7' => 'Din ekspeditionsflåde havde et fjendtligt første møde med en ukendt art.',
    ],
  ],

  // Battle - Pirates
  'expedition_battle_pirates' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Nogle primitive barbarer angriber os med rumskibe, der knap nok kan kaldes skibe. Hvis beskydningen bliver alvorlig, bliver vi nødt til at besvare ilden.',
      '2' => 'Vi måtte kæmpe mod nogle pirater, som heldigvis kun var få.',
      '3' => 'Vi opsnappede radiotransmissioner fra nogle berusede pirater. Det lader til, at vi snart bliver angrebet.',
      '4' => 'Vores ekspedition blev angrebet af en lille gruppe rumpirater!',
      '5' => 'Nogle desperate rumpirater forsøgte at kapre vores ekspeditionsflåde.',
      '6' => 'Pirater lagde sig i baghold og angreb ekspeditionen uden varsel!',
      '7' => 'En broget flok rumpirater opsnappede os og krævede tribut.',
    ],
  ],

  // Battle - Aliens
  'expedition_battle_aliens' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Vi opfangede mærkelige signaler fra ukendte skibe. De viste sig at være fjendtlige!',
      '2' => 'En fremmed patrulje opdagede vores ekspeditionsflåde og angreb øjeblikkeligt!',
      '3' => 'Din ekspeditionsflåde havde et fjendtligt første møde med en ukendt art.',
      '4' => 'Nogle eksotisk udseende skibe angreb ekspeditionen uden varsel!',
      '5' => 'En flåde af fremmede krigsskibe dukkede op fra hyperspace og gik til angreb!',
      '6' => 'Vi stødte på en teknologisk avanceret fremmed race, som ikke var fredelig.',
      '7' => 'Vores sensorer registrerede ukendte energisignaturer, før fremmede skibe angreb!',
    ],
  ],


  // Loss of Fleet
  'expedition_loss_of_fleet' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'En kerneeksplosion i flagskibet udløste en kædereaktion, som destruerede hele ekspeditionsflåden i en spektakulær eksplosion.',
    ],
  ],

  // Merchant Found
  'expedition_merchant_found' => [
    'from' => 'Flådekommando',
    'subject' => 'Ekspeditionsresultat',
    'body' => [
      '1' => 'Din ekspeditionsflåde fik kontakt med en venlig fremmed race. De meddelte, at de vil sende en repræsentant med varer til handel på dine verdener.',
      '2' => 'Et mystisk handelsskib nærmede sig din ekspedition. Handelsmanden tilbød at besøge dine planeter og levere særlige handelsservices.',
      '3' => 'Ekspeditionen stødte på en intergalaktisk handelskonvoj. En af handelsmændene har accepteret at besøge din hjemplanet for at tilbyde handelsmuligheder.',
    ],
  ],

  // Buddy Request Received
  'buddy_request_received' => [
    'from' => 'Venner',
    'subject' => 'Venneanmodning',
    'body' => 'Du har modtaget en ny venneanmodning fra :sender_name.<span style="display:none;">:buddy_request_id</span>',
  ],

  // Buddy Request Accepted
  'buddy_request_accepted' => [
    'from' => 'Venner',
    'subject' => 'Venneanmodning accepteret',
    'body' => 'Spiller :accepter_name har tilføjet dig til sin venneliste.',
  ],

  // Buddy Removed
  'buddy_removed' => [
    'from' => 'Venner',
    'subject' => 'Du er blevet fjernet fra en venneliste',
    'body' => 'Spiller :remover_name har fjernet dig fra deres venneliste.',
  ],

  // Missile Attack Report (Attacker)
  'missile_attack_report' => [
    'from' => 'Flådekommando',
    'subject' => 'Missilangreb på :target_coords',
    'body' => 'Dine interplanetariske missiler fra :origin_planet_name :origin_planet_coords (ID: :origin_planet_id) har nået deres mål ved :target_planet_name :target_coords (ID: :target_planet_id, Type: :target_type).

Affyrede missiler: :missiles_sent
Opsnappede missiler: :missiles_intercepted
Missiler der ramte: :missiles_hit

Ødelagt forsvar: :defenses_destroyed',
  ],

  // Missile Defense Report (Defender)
  'missile_defense_report' => [
    'from' => 'Forsvarskommando',
    'subject' => 'Missilangreb på :planet_coords',
    'body' => 'Din planet :planet_name ved :planet_coords (ID: :planet_id) er blevet angrebet af interplanetariske missiler fra :attacker_name!

Indkommende missiler: :missiles_incoming
Opsnappede missiler: :missiles_intercepted
Missiler der ramte: :missiles_hit

Ødelagt forsvar: :defenses_destroyed',
  ],

  // Alliance Broadcast
  'alliance_broadcast' => [
    'from' => ':sender_name',
    'subject' => '[:alliance_tag] Alliancemeddelelse fra :sender_name',
    'body' => ':message',
  ],

  // Alliance Application Received
  'alliance_application_received' => [
    'from' => 'Alliancestyring',
    'subject' => 'Ny allianceansøgning',
    'body' => 'Spiller :applicant_name har ansøgt om at blive medlem af din alliance.

Ansøgningsbesked:
:application_message',
  ],

  // Building upgrade messages
  'Shipyard is being upgraded.' => 'Skibsværft opgraderes.',
  'Nanite Factory is being upgraded.' => 'Nanitefabrik opgraderes.',
];
