<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'This field was not expected.' => 'Dieses Feld wurde nicht erwartet.',
    'This field is missing.' => 'Dieses Feld fehlt.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert oder der temporäre Ordner existiert nicht.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige internationale Bankkontonummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'An empty file is not allowed.' => 'Eine leere Datei ist nicht erlaubt.',
    'The host could not be resolved.' => 'Der Hostname konnte nicht aufgelöst werden.',
    'This value does not match the expected {{ charset }} charset.' => 'Dieser Wert entspricht nicht dem erwarteten Zeichensatz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dieser Wert ist kein gültiger BIC.',
    'Error' => 'Fehler',
    'This is not a valid UUID.' => 'Dies ist keine gültige UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dieser Wert sollte ein Vielfaches von {{ compared_value }} sein.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Diese internationale Bankleitzahl (BIC) ist nicht mit der IBAN {{ iban }} assoziiert.',
    'This value should be valid JSON.' => 'Dieser Wert sollte gültiges JSON sein.',
    'This collection should contain only unique elements.' => 'Diese Sammlung darf keine doppelten Elemente enthalten.',
    'This value should be positive.' => 'Diese Zahl sollte positiv sein.',
    'This value should be either positive or zero.' => 'Diese Zahl sollte entweder positiv oder 0 sein.',
    'This value should be negative.' => 'Diese Zahl sollte negativ sein.',
    'This value should be either negative or zero.' => 'Diese Zahl sollte entweder negativ oder 0 sein.',
    'This value is not a valid timezone.' => 'Dieser Wert ist keine gültige Zeitzone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Dieses Passwort ist Teil eines Datenlecks, es darf nicht verwendet werden.',
    'This value should be between {{ min }} and {{ max }}.' => 'Dieser Wert sollte zwischen {{ min }} und {{ max }} sein.',
    'This value is not a valid hostname.' => 'Dieser Wert ist kein gültiger Hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Die Anzahl an Elementen in dieser Sammlung sollte ein Vielfaches von {{ compared_value }} sein.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'herunterladen',
    'form.label.delete' => 'Löschen?',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Vorherige',
    'label_next' => 'Nächste',
    'filter_searchword' => 'Suchbegriff...',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Télécharger',
    'form.label.delete' => 'Supprimer ?',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
    'filter_searchword' => 'Recherche...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
