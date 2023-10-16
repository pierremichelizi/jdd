<?php
return [
    "user" => [
        [
            "user_email" => "agblap1@gmail.com",
            "user_password" => "NONE",
            "user_fullname" => "Pierre Agbla",
            "user_2fa" => null,
            "user_roles" => '["ADMIN", "USER"]'
        ]
    ],
    "institut_type" => [
        [
            "institut_type_name" => "Universités",
            "institut_type_slug" => "university",
            "institut_type_description" => null
        ],
        [
            "institut_type_name" => "Institut de formation professionnelles",
            "institut_type_slug" => "professionnal-institute",
            "institut_type_description" => null
        ]
    ],
    "diploma" => [
        [
            "diploma_name" => "Diplome d'étude professionnel",
            "diploma_description" => "Diplome Expert Partout",
            "diploma_code" => "DEP"
        ],
        [
            "diploma_name" => "Baccalauréat",
            "diploma_description" => "Baccalauréat",
            "diploma_code" => "BAC"
        ],
        [
            "diploma_name" => "Ingénieur",
            "diploma_description" => "Diplome d'Ingénieur",
            "diploma_code" => "ING"
        ]
    ],
    "towns" => [
        [
            "town_name" => "Abitibi-T&#233;miscamingue",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Abitibi-T&#233;miscamingue",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Bas-Saint-Laurent ",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Capitale-Nationale - Chaudi&#232;re-Appalaches",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "C&#244;te-Nord",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Estrie",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Gasp&#233;sie - &#206;les-de-la-Madeleine",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Laval - Mont&#233;r&#233;gie - Montr&#233;al",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Lanaudi&#232;re",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [
            "town_name" => "Outaouais",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [

            "town_name" => "Saguenay - Lac-Saint-Jean",
            "town_country" => "ca",
            "town_description" => ""
        ],
        [

            "town_name" => "Paris",
            "town_country" => "fr",
            "town_description" => ""
        ],
        [

            "town_name" => "Montreux",
            "town_country" => "fr",
            "town_description" => ""
        ],
        [

            "town_name" => "Louisiane",
            "town_country" => "fr",
            "town_description" => ""
        ],
        [

            "town_name" => "Marseille",
            "town_country" => "fr",
            "town_description" => ""
        ]
    ],
    "sectors" => [
        [
            "sector_name" => "Administration",
            "sector_slug" => "administration",
            "sector_iconUrl" => "/assets/img/sections/desipline/business.png"
        ],
        [
            "sector_name" => "Informatique",
            "sector_slug" => "informatique",
            "sector_iconUrl" => "/assets/img/sections/desipline/pc.png"
        ],
        [
            "sector_name" => "Agriculture et p&#234;ches",
            "sector_slug" => "agriculture",
            "sector_iconUrl" => "assets/img/sections/desipline/foresty.png"
        ],
        [
            "sector_name" => "Arts",
            "sector_slug" => "arts",
            "sector_iconUrl" => "/assets/img/sections/desipline/art.png"
        ],

        [
            "sector_name" => "Alimentation",
            "sector_slug" => "Alimentation",
            "sector_iconUrl" => "assets/img/sections/desipline/french-fry.png"
        ],
        [
            "sector_name" => "Environnement et am&#233;nagement du territoire",
            "sector_slug" => "environment",
            "sector_iconUrl" => "assets/img/sections/desipline/recicle.png"
        ],
        [
            "sector_name" => "Chimie, biologie",
            "sector_slug" => "chimie",
            "sector_iconUrl" => "assets/img/sections/desipline/science.png"
        ],
        [
            "sector_name" => "Communications et documentation",
            "sector_slug" => "communication",
            "sector_iconUrl" => "/assets/img/sections/desipline/news-paper.png"
        ],
        [
            "sector_name" => "Sant&#233;",
            "sector_slug" => "sante",
            "sector_iconUrl" => "assets/img/sections/desipline/first-aid-kit.png"
        ],
        [
            "sector_name" => "Services Sociaux",
            "sector_slug" => "Alimentation",
            "sector_iconUrl" => "/assets/img/sections/desipline/humanity.png"
        ]
    ],
    /*"programs" => [
        ["name" => "Abattage et faÃ§onnage des bois", "key" => "5189"],
        ["name" => "Abattage manuel et dÃ©bardage forestier", "key" => "5290"],
        ["name" => "Accounting", "key" => "5731"],
        ["name" => "Aesthetics", "key" => "5839"],
        ["name" => "AffÃ»tage", "key" => "5073"],
        ["name" => "Aircraft Mechanical Assembly", "key" => "5807"],
        ["name" => "Aircraft Structural Assembly", "key" => "5697"],
        ["name" => "AmÃ©nagement de la forÃªt", "key" => "5306"],
        ["name" => "Aquiculture", "key" => "5094"],
        ["name" => "Arpentage et topographie", "key" => "5238"],
        [
            "name" =>
            "Assistance Ã  la clientÃ¨le des services sociaux et de santÃ© au Nunavik",
            "key" => "5237",
        ],
        [
            "name" => "Assistance Ã  la personne en Ã©tablissement et Ã  domicile",
            "key" => "5358",
        ],
        ["name" => "Assistance dentaire", "key" => "5144"],
        ["name" => "Assistance technique en pharmacie", "key" => "5341"],
        [
            "name" => "Assistance technique en pharmacie (Nouvelle version)",
            "key" => "5394",
        ],
        ["name" => "Auto Bodywork", "key" => "5872"],
        ["name" => "Automated Systems Electromechanics", "key" => "5781"],
        ["name" => "Automobile Mechanics", "key" => "5798"],
        ["name" => "Bijouterie-joaillerie", "key" => "5085"],
        ["name" => "Boucherie de dÃ©tail", "key" => "5268"],
        ["name" => "Boulangerie", "key" => "5370"],
        ["name" => "Briquetage-maÃ§onnerie", "key" => "5303"],
        ["name" => "Cabinetmaking", "key" => "5852"],
        ["name" => "Cable and Circuit Assembly", "key" => "5884"],
        ["name" => "Calorifugeage", "key" => "5378"],
        ["name" => "Carpentry", "key" => "5819"],
        ["name" => "Carrelage", "key" => "5300"],
        ["name" => "Carrosserie", "key" => "5372"],
        ["name" => "Charpenterie-menuiserie", "key" => "5319"],
        ["name" => "Chaudronnerie", "key" => "5356"],
        ["name" => "Classement des bois dÃ©bitÃ©s", "key" => "5208"],
        ["name" => "Coiffure", "key" => "5245"],
        ["name" => "Commercial and Residential Painting", "key" => "5836"],
        ["name" => "ComptabilitÃ©", "key" => "5231"],
        ["name" => "Computer Graphics", "key" => "5844"],
        ["name" => "Computing Support", "key" => "5729"],
        ["name" => "Conduite d\'engins de chantier", "key" => "5220"],
        ["name" => "Conduite d\'engins de chantier nordique", "key" => "5284"],
        ["name" => "Conduite de grues", "key" => "5248"],
        [
            "name" => "Conduite de machinerie lourde en voirie forestiÃ¨re",
            "key" => "5273",
        ],
        [
            "name" => "Conduite de machines de traitement du minerai",
            "key" => "5274",
        ],
        [
            "name" => "Conduite de procÃ©dÃ©s de traitement de l\'eau",
            "key" => "5328",
        ],
        ["name" => "Conduite et rÃ©glage de machines Ã  mouler", "key" => "5193"],
        [
            "name" => "Conseil et vente de piÃ¨ces d\'Ã©quipement motorisÃ©",
            "key" => "5347",
        ],
        ["name" => "Conseil et vente de voyages", "key" => "5355"],
        [
            "name" =>
            "Conseil technique en entretien et en rÃ©paration de vÃ©hicules",
            "key" => "5346",
        ],
        ["name" => "Construction Equipment Mechanics", "key" => "5831"],
        ["name" => "Construction Equipment Operation", "key" => "5720"],
        ["name" => "Cuisine", "key" => "5311"],
        [
            "name" => "DÃ©coration intÃ©rieure et prÃ©sentation visuelle",
            "key" => "5327",
        ],
        ["name" => "Dental Assistance", "key" => "5644"],
        ["name" => "Dessin de bÃ¢timent", "key" => "5250"],
        ["name" => "Dessin industriel", "key" => "5225"],
        ["name" => "Diamond Drilling", "key" => "5753"],
        ["name" => "ÃbÃ©nisterie", "key" => "5352"],
        ["name" => "Ãlagage", "key" => "5366"],
        ["name" => "ÃlectricitÃ©", "key" => "5295"],
        ["name" => "Electricity", "key" => "5795"],
        ["name" => "ÃlectromÃ©canique de systÃ¨mes automatisÃ©s", "key" => "5281"],
        ["name" => "Elevator Mechanics", "key" => "5837"],
        ["name" => "Entretien de bÃ¢timents nordiques", "key" => "5202"],
        ["name" => "Entretien gÃ©nÃ©ral d\'immeubles", "key" => "5211"],
        ["name" => "EsthÃ©tique", "key" => "5339"],
        ["name" => "Extraction de minerai", "key" => "5368"],
        [
            "name" =>
            "Fabrication de piÃ¨ces industrielles et aÃ©rospatiales en composites",
            "key" => "5363",
        ],
        [
            "name" =>
            "Fabrication de structures mÃ©talliques et de mÃ©taux ouvrÃ©s",
            "key" => "5308",
        ],
        ["name" => "Ferblanterie", "key" => "5360"],
        ["name" => "Finition de meubles", "key" => "5142"],
        ["name" => "Fire Safety Techniques", "key" => "5822"],
        ["name" => "Fleuristerie", "key" => "5376"],
        ["name" => "Fonderie", "key" => "5203"],
        ["name" => "Food and Beverage Services", "key" => "5793"],
        ["name" => "Forage au diamant", "key" => "5253"],
        ["name" => "Forage et dynamitage", "key" => "5369"],
        ["name" => "Furniture Finishing", "key" => "5642"],
        ["name" => "General Building Maintenance", "key" => "5711"],
        ["name" => "Grandes cultures", "key" => "5254"],
        ["name" => "Hairdressing", "key" => "5745"],
        [
            "name" => "Health and Social Services Assistance in Nunavik",
            "key" => "5737",
        ],
        ["name" => "Health, Assistance and Nursing", "key" => "5825"],
        ["name" => "Heavy Vehicles Mechanics", "key" => "5830"],
        ["name" => "Horlogerie-bijouterie", "key" => "5182"],
        ["name" => "Horticulture and Garden Centre Operations", "key" => "5788"],
        ["name" => "Horticulture et jardinerie", "key" => "5288"],
        [
            "name" => "Horticulture et jardinerie (Nouvelle version)",
            "key" => "5390",
        ],
        ["name" => "Hotel Reception", "key" => "5783"],
        ["name" => "Imprimerie", "key" => "5313"],
        [
            "name" => "Industrial Construction and Maintenance Mechanics",
            "key" => "5760",
        ],
        ["name" => "Industrial Drafting", "key" => "5725"],
        ["name" => "Infographie", "key" => "5344"],
        [
            "name" => "Installation and Repair of Telecommunications Equipment",
            "key" => "5766",
        ],
        ["name" => "Installation de revÃªtements souples", "key" => "5334"],
        [
            "name" => "Installation et entretien de systÃ¨mes de sÃ©curitÃ©",
            "key" => "5296",
        ],
        [
            "name" => "Installation et fabrication de produits verriers",
            "key" => "5282",
        ],
        [
            "name" =>
            "Installation et rÃ©paration d\'Ã©quipement de tÃ©lÃ©communication",
            "key" => "5266",
        ],
        ["name" => "Installation of Concrete Reinforcement", "key" => "5576"],
        ["name" => "Institutional and Home Care Assistance", "key" => "5858"],
        ["name" => "Interior Decorating and Visual Display", "key" => "5827"],
        ["name" => "Intervention en sÃ©curitÃ© incendie", "key" => "5322"],
        ["name" => "Inuttitut Translation and Interpretation", "key" => "5704"],
        ["name" => "Landscaping Operations", "key" => "5820"],
        [
            "name" => "Machine Operations, Mineral and Metal Processing",
            "key" => "5774",
        ],
        ["name" => "Machining", "key" => "5871"],
        ["name" => "Marine Mechanics 1750 Masonry: Bricklaying", "key" => "5803"],
        ["name" => "Matelotage", "key" => "5365"],
        ["name" => "MÃ©canique agricole", "key" => "5335"],
        ["name" => "MÃ©canique automobile", "key" => "5298"],
        ["name" => "MÃ©canique d\'ascenseur", "key" => "5337"],
        ["name" => "MÃ©canique d\'engins de chantier", "key" => "5331"],
        ["name" => "MÃ©canique de machines fixes", "key" => "5359"],
        [
            "name" => "MÃ©canique de protection contre les incendies",
            "key" => "5312",
        ],
        [
            "name" => "MÃ©canique de vÃ©hicules de loisir et d\'Ã©quipement lÃ©ger",
            "key" => "5367",
        ],
        ["name" => "MÃ©canique de vÃ©hicules lourds routiers", "key" => "5330"],
        [
            "name" => "MÃ©canique industrielle de construction et d\'entretien",
            "key" => "5260",
        ],
        [
            "name" =>
            "MÃ©canique marine 1250 Mode et confection de vÃªtements sur mesure",
            "key" => "5345",
        ],
        ["name" => "Montage de cÃ¢bles et de circuits", "key" => "5384"],
        [
            "name" => "Montage de lignes Ã©lectriques et de tÃ©lÃ©communications",
            "key" => "5375",
        ],
        ["name" => "Montage de structures en aÃ©rospatiale", "key" => "5197"],
        ["name" => "Montage mÃ©canique en aÃ©rospatiale", "key" => "5307"],
        ["name" => "Montage structural et architectural", "key" => "5364"],
        ["name" => "Moulding Machine Set-up and Operation", "key" => "5693"],
        ["name" => "Northern Building Maintenance", "key" => "5702"],
        ["name" => "Northern Heavy Equipment Operations", "key" => "5784"],
        ["name" => "OpÃ©ration d\'Ã©quipements de production", "key" => "5362"],
        ["name" => "Ore Extraction", "key" => "5868"],
        ["name" => "Organisation de loisirs au Nunavik", "key" => "5228"],
        ["name" => "Pastry Making", "key" => "5797"],
        ["name" => "PÃ¢tes et papiers - OpÃ©rations", "key" => "5262"],
        ["name" => "PÃ¢tisserie", "key" => "5297"],
        ["name" => "PÃªche professionnelle", "key" => "5257"],
        ["name" => "Peinture en bÃ¢timent", "key" => "5336"],
        ["name" => "Pharmacy Technical Assistance", "key" => "5841"],
        ["name" => "Photographie", "key" => "5326"],
        ["name" => "Plastering", "key" => "5786"],
        ["name" => "PlÃ¢trage", "key" => "5286"],
        ["name" => "Plomberie et chauffage", "key" => "5333"],
        ["name" => "Plumbing and Heating", "key" => "5833"],
        ["name" => "Pose d\'armature du bÃ©ton", "key" => "5076"],
        ["name" => "Pose de revÃªtements de toiture", "key" => "5351"],
        ["name" => "Pose de systÃ¨mes intÃ©rieurs", "key" => "5350"],
        [
            "name" => "Powersport Vehicle and Outdoor Power Equipment Mechanics",
            "key" => "5867",
        ],
        ["name" => "Precision Sheet Metal Work", "key" => "5744"],
        ["name" => "PrÃ©paration et finition de bÃ©ton", "key" => "5343"],
        ["name" => "Preparing and Finishing Concrete", "key" => "5843"],
        ["name" => "Printing", "key" => "5813"],
        ["name" => "Production acÃ©ricole", "key" => "5256"],
        ["name" => "Production animale", "key" => "5354"],
        ["name" => "Production Equipment Operation", "key" => "5862"],
        ["name" => "Production horticole", "key" => "5348"],
        ["name" => "Production textile (opÃ©rations)", "key" => "5243"],
        ["name" => "Professional Bread Making", "key" => "5870"],
        ["name" => "Professional Cooking", "key" => "5811"],
        ["name" => "Professional Sales", "key" => "5821"],
        [
            "name" => "Protection and Development of Wildlife Habitats",
            "key" => "5679",
        ],
        [
            "name" => "Protection et exploitation de territoires fauniques",
            "key" => "5179",
        ],
        ["name" => "Pulp and Paper - Operations", "key" => "5762"],
        ["name" => "RÃ©alisation d\'amÃ©nagements paysagers", "key" => "5320"],
        ["name" => "RÃ©ception en hÃ´tellerie", "key" => "5283"],
        ["name" => "Recreation Leadership in Nunavik", "key" => "5728"],
        ["name" => "Refrigeration", "key" => "5815"],
        ["name" => "RÃ©frigÃ©ration", "key" => "5315"],
        ["name" => "RÃ©frigÃ©ration (Nouvelle version)", "key" => "5386"],
        ["name" => "RÃ©gulation de vol", "key" => "5304"],
        ["name" => "Rembourrage artisanal", "key" => "5080"],
        ["name" => "Rembourrage industriel", "key" => "5031"],
        ["name" => "RÃ©paration d\'appareils Ã©lectromÃ©nagers", "key" => "5024"],
        ["name" => "RÃ©paration et service en Ã©lectronique", "key" => "5377"],
        ["name" => "Reprocessing of Medical Devices", "key" => "5880"],
        ["name" => "Reprographie et faÃ§onnage", "key" => "5240"],
        ["name" => "Residential and Commercial Drafting", "key" => "5750"],
        ["name" => "Retail Butchery", "key" => "5768"],
        ["name" => "Retraitement des dispositifs mÃ©dicaux", "key" => "5380"],
        ["name" => "SantÃ©, assistance et soins infirmiers", "key" => "5325"],
        ["name" => "Sciage", "key" => "5088"],
        ["name" => "Secretarial Studies", "key" => "5857"],
        ["name" => "Secretarial Studies (Inuktitut)", "key" => "5755"],
        ["name" => "SecrÃ©tariat", "key" => "5357"],
        ["name" => "SecrÃ©tariat (Inuktitut)", "key" => "5255"],
        ["name" => "Serrurerie", "key" => "5329"],
        ["name" => "Service de la restauration", "key" => "5293"],
        ["name" => "Soudage-assemblage (Nouvelle version)", "key" => "5382"],
        ["name" => "Soudage-montage", "key" => "5195"],
        ["name" => "Soutien informatique", "key" => "5229"],
        ["name" => "Soutien informatique (Nouvelle version)", "key" => "5385"],
        ["name" => "Stationary Engine Mechanics", "key" => "5859"],
        ["name" => "Structural and Architectural Assembly", "key" => "5864"],
        ["name" => "Taille de pierre", "key" => "5178"],
        ["name" => "Tiling", "key" => "5800"],
        ["name" => "Tinsmithing", "key" => "5860"],
        ["name" => "TÃ´lerie de prÃ©cision", "key" => "5244"],
        ["name" => "Traduction-interprÃ©tation (Inuttitut)", "key" => "5204"],
        ["name" => "Traitement de surface", "key" => "5222"],
        [
            "name" => "Transformation des mÃ©taux en fusion (Nouvelle version)",
            "key" => "5381",
        ],
        ["name" => "Transport par camion", "key" => "5291"],
        ["name" => "Travail sylvicole", "key" => "5289"],
        ["name" => "Travel Consulting and Sales", "key" => "5855"],
        ["name" => "Tree Pruning", "key" => "5866"],
        ["name" => "Trucking", "key" => "5791"],
        ["name" => "Usinage", "key" => "5371"],
        ["name" => "Vente-conseil", "key" => "5321"],
        ["name" => "Welding and Fitting", "key" => "5695"],
    ]*/
];
