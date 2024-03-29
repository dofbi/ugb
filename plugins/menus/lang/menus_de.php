<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'confirmer_supprimer_entree' => 'Wollen sie diesen Eintrag wirklich löschen?',

	// D
	'description_menu_accueil' => 'Link zur Startseite.',
	'description_menu_articles_rubrique' => 'Artikelliste einer Rubrik anzeigen',
	'description_menu_deconnecter' => 'Wenn eine Leser angemeldet ist, zeige ihm einen Abmelde-Link.',
	'description_menu_espace_prive' => 'Link zum Login und zum Redaktionssystem',
	'description_menu_groupes_mots' => 'Zeige automatisch ein Menü aus Schlagworten und zugehörigen Artikeln. In der Grundeinstellung werden die Schlagwortgruppen mit ihren Schlagworten angezeigt. Wenn ein Skelett mit der Bezeichnung groupes_mots.html existiert, wird der Link zur Schlagwortguppe verwendet.',
	'description_menu_lien' => 'Fügt eine beliebigen Link hinzu, der entweder intern (rekative URL)oder extern (http://...) sein kann.',
	'description_menu_mapage' => 'Wenn der Besucher angemeldet ist, füge einen Link zu seiner pers&ouml;nlichen Seite hinzu.',
	'description_menu_mots' => 'Zeigt automatisch ein Menü, das die Artikel zum Schlagwort anzeigt.',
	'description_menu_objet' => 'Link zu einem SPIP-Objekt anlegen: Artikel, Rubrik, usw. In der Grundeinstellung trägt der Eintrag den Namen des Objekts.',
	'description_menu_page_speciale' => 'Fügt einen URL zu einer Skelettseite im Format  <code>spip.php?page=nom&param1=xx&param2=yyy...</code> hinzu. Diese Skelette werden von Plugins bereitgestellt',
	'description_menu_page_speciale_zajax' => 'Fügt einen Link zu einem Block auf einer Seite hinzu, die über einen URL mit der Syntax <code>spip.php?page=nom¶m1=xx¶m2=yyy...</code> erreichbar ist. Dazu sind ein Skelett des Typs Z und das Plugin <a href="http://www.spip-contrib.net/MediaBox">médiabox</a> Voraussetzung.',
	'description_menu_rubriques' => 'Zeigt eine Liste der Rubriken und, wen gew&uuml;nscht, der Unterrubriken &uuml;ber mehreer Niveaus an. In der Grundeinstelung werden alle Rubriken ab der obersten Ebene nach Titel (numerisch und anschließend alphanumerisch) sortiert angezeigt.',
	'description_menu_rubriques_articles' => 'Zeigt einen Liste der Rubriken und auf Wunsch der Unterrubriken und Artikel als Hierarchie an. In der Grundeinstellung werden alle Rubriken von der obersten Ebene an dargestellt. Sie werden nach Titeln (zuerst numerisch und dann alphabetisch) sortiert. Artikel werden immer hinter den Rubriken angezeigt.',
	'description_menu_secteurlangue' => 'Dieser Eintrag bezieht sich aud die Sites, welche pro Sprache ein Hauptrubrik verwenden. Er zeigt ein Men&uuml; mit allen Rubriken des Sektors, die mit der Sprache &uuml;bereinstimmen, wenn erfordelich auf &uuml;ber mehrere Niveaus. In der Grundeinstelung werden alle Rubriken ab der obersten Ebene nach Titel (numerisch und anschließend alphanumerisch) sortiert angezeigt.',
	'description_menu_texte_libre' => 'Freitext',

	// E
	'editer_menus_editer' => 'Menü bearbeiten',
	'editer_menus_explication' => 'Gestalten und konfigurieren sie hier die Menüs ihrer Website.',
	'editer_menus_exporter' => 'Menü exportieren',
	'editer_menus_nouveau' => 'Neues Menü anlegen',
	'editer_menus_titre' => 'Menüs der Website',
	'entree_afficher_articles' => 'Artikel in das Menü einbeziehen? ("oui" eintragen wenn gewünscht)',
	'entree_afficher_item_suite' => 'Artikel in das Menü einbeziehen? ("oui" eintragen wenn gewünscht)',
	'entree_articles_max' => 'Wenn ja, Artikel nur anzeigen, wenn die Rubrik maximal xx Artikel enthält. (Obergrenze eintragen, leer lassen um alle anzuzeigen)',
	'entree_articles_max_affiches' => 'Wenn ja, Anzahl der angezeigten Artikel auf xx begrenzen; weitere werden durch den Eintrag "... alle Artikel" ersetzt. (Obergrenze eintragen, leer lassen um alle anzuzeigen)',
	'entree_aucun' => 'Keiner',
	'entree_bloc' => 'ZPIP Block',
	'entree_choisir' => 'Wählen sie die Art EIntrag, die sie hinzufügen wollen:',
	'entree_classe_parent' => 'Classe des liens des éléments parents. Cette classe sera rajoutée aux li>a ayant une suite ul/li. Par exemple, si vous saisissez "daddy", cela vous permet d\'utiliser le plugin menu deroulant 2 pour la mise en forme du menu.', # NEW
	'entree_connexion_objet' => 'Objekt wird nur angezeigt, wenn man entweder eingelogt ("session" eintragen) oder nicht eingelogt ist ("nosession" eintragen)',
	'entree_contenu' => 'Inhalt',
	'entree_css' => 'CSS-Klassen des Eintrags (des Containers)',
	'entree_css_lien' => 'CSS-Klassen des Links',
	'entree_id_groupe' => 'Nummer der Schlagwortgruppe',
	'entree_id_mot' => 'Nummer des Schlagworts',
	'entree_id_objet' => 'Nummer',
	'entree_id_rubrique' => 'Nummer der übergeordeneten Rubrik',
	'entree_id_rubriques_exclues' => 'Nummern der auszuschließenden Rubriken, getrennt durch Semikolons.',
	'entree_id_secteur_exclus' => 'Nummern der auszuschließenden Sektoren, getrennt mit Kommata',
	'entree_infini' => 'Unendlich',
	'entree_mapage' => 'Meine eigene Seite',
	'entree_masquer_articles_uniques' => 'Wenn ja und falls die Rubrik nur einen Artikel enthält wird dieser maskiert ("oui" eintragen wenn gewünscht).',
	'entree_niveau' => 'Tiefe der Unterrubriken',
	'entree_nombre_articles' => 'Maximale Anzahl Artikel (Standardwert 0)',
	'entree_page' => 'Name der Seite',
	'entree_parametres' => 'Parameterliste',
	'entree_rubriques_max_affichees' => 'Si oui, limiter le nombre de rubriques list&eacute;s &agrave; xx maximum (suivis d\'un item "... Toutes les rubriques" comportant un lien vers la rubrique parente) ? (indiquer le nombre maximum de rubriques, laissez vide pour afficher toutes les rubriques)', # NEW
	'entree_sousrub_cond' => 'Nur Unterrubriken der aktuellen Rubrik anzeigen ("oui" eintragen, falls nicht gewünscht leer lassen)',
	'entree_sur_n_articles' => '@n@ Artikel angezeigt',
	'entree_sur_n_mots' => '@n@ Worte angezeigt',
	'entree_sur_n_niveaux' => 'Auf @n@ Niveau(s)',
	'entree_titre' => 'Titel',
	'entree_titre_connecter' => 'Titel für den Zugang zum Anmeldeformular',
	'entree_titre_prive' => 'Titel für den Redaktionszugang',
	'entree_traduction_articles_rubriques' => 'Wenn möglich Artikel der Rubrik in der Sprache des Kontext anzeigen ("oui" eintragen wenn gewünscht)',
	'entree_traduction_objet' => 'Übersetzung von Artikeln in Abhängigkeit vom Sprachkontext auswählen (für diese EInstellung "trad" eintragen)',
	'entree_tri_alpha' => 'Sortierkriterium (alphanumerisch)', # MODIF
	'entree_tri_alpha_articles' => 'Critère de tri des articles (alphabétique). Si vous saisissez "date", le critère ajouté sera {par date} et les articles seront triés par date', # NEW
	'entree_tri_alpha_articles_inverse' => 'Inverser le critère de tri alphabétique ? (mettre "oui" pour cela)', # NEW
	'entree_tri_alpha_inverse' => 'Inverser le critère de tri alphabétique ? (mettre "oui" pour cela)', # NEW
	'entree_tri_num' => 'Sortierkriterium (numerisch)', # MODIF
	'entree_tri_num_articles' => 'Critère de tri des articles (numérique). Si vous saisissez "titre", le critère ajouté sera {par num titre} et les articles seront triés par numéro de titre', # NEW
	'entree_tri_num_articles_inverse' => 'Inverser le critère de tri numérique ? (mettre "oui" pour cela)', # NEW
	'entree_tri_num_inverse' => 'Inverser le critère de tri numérique ? (mettre "oui" pour cela)', # NEW
	'entree_type_objet' => 'Objekttyp',
	'entree_url' => 'Adresse',
	'entree_url_public' => 'Zieladresse nach der Anmeldung',
	'erreur_aucun_type' => 'Kein Eintragstyp gefunden.',
	'erreur_autorisation' => 'Sie dürfen Menüs nicht ändern.',
	'erreur_identifiant_deja' => 'Deise Bezeichnung wird bereits von einem Menü verwendet.',
	'erreur_identifiant_forme' => 'Die Bezeichnung darf nur Buchstaben, Ziffern und den Unterstrich enthalten.',
	'erreur_menu_inexistant' => 'Das angeforderte Menü existiert nicht.',
	'erreur_mise_a_jour' => 'Beim Aktualisieren der Datenbank ist ein Fehler aufgetreten.',
	'erreur_parametres' => 'Fehler in den Seitenparametern',
	'erreur_type_menu' => 'Sie müssen einen Menütyp wählen',

	// F
	'formulaire_ajouter_entree' => 'Eintrag hinzufügen',
	'formulaire_ajouter_sous_menu' => 'Untermenü hinzufügen',
	'formulaire_css' => 'CSS-Klassen',
	'formulaire_css_explication' => 'Sie können dem Menü eventuell vorhandene zusätzliche CSS-Klassen zuordnen.',
	'formulaire_deplacer_bas' => 'Nach unten verschieben',
	'formulaire_deplacer_haut' => 'Nach oben verschieben',
	'formulaire_facultatif' => 'Fakultatif',
	'formulaire_identifiant' => 'Bezeichnung',
	'formulaire_identifiant_explication' => 'Vergeben sie ein Schlagwort, mit dem sie das Menü leicht aufrufen können..',
	'formulaire_ieconfig_choisir_menus_a_importer' => 'Wählen Sie die die zu importierenden Menüs',
	'formulaire_ieconfig_importer' => 'Importieren',
	'formulaire_ieconfig_menu_meme_identifiant' => 'ACHTUNG: Ihre Website enthält bereits ein Menü mit der selben ID!',
	'formulaire_ieconfig_menus_a_exporter' => 'Zu exportierende Menüs:',
	'formulaire_ieconfig_ne_pas_importer' => 'Nicht importieren',
	'formulaire_ieconfig_remplacer' => 'Aktuelles Menü durch das zu importierende ersetzen',
	'formulaire_ieconfig_renommer' => 'Menü vor Import umbenennen',
	'formulaire_importer' => 'Menü importieren',
	'formulaire_importer_explication' => 'Wenn sie ein Men&uuml; in eine Datei exportiert haben, können sie es jetzt importieren.',
	'formulaire_modifier_entree' => 'Eintrag bearbeiten',
	'formulaire_modifier_menu' => 'Menü bearbeiten:',
	'formulaire_nouveau' => 'Neues Menü',
	'formulaire_partie_construction' => 'Aufbau des Menüs',
	'formulaire_partie_identification' => 'Bezeichnung des Menüs',
	'formulaire_supprimer_entree' => 'Eintrag löschen',
	'formulaire_supprimer_menu' => 'Menü löschen',
	'formulaire_supprimer_sous_menu' => 'Untermenü löschen',
	'formulaire_titre' => 'Titel',

	// I
	'info_afficher_articles' => 'Artikel werden im Menü angezeigt',
	'info_articles_max' => 'Nur wenn die Rubrik maximal @max@ Artikel enthält.',
	'info_articles_max_affiches' => 'Anzeige ist begrenst auf maximal @max@  Artikel.',
	'info_classe_parent' => 'Classe des éléments parents : ', # NEW
	'info_connexion_obligatoire' => 'Login obligatorisch',
	'info_deconnexion_obligatoire' => 'Nur wenn nicht eingelogt',
	'info_masquer_articles_uniques' => 'Einzelne Artikel maskieren.',
	'info_numero_menu' => 'MENÜ NUMMER:',
	'info_page_speciale' => 'Link zu Seite « @page@ »',
	'info_page_speciale_zajax' => 'Modale Box der Seite « @page@ » für den Block « @bloc@ »',
	'info_rubriques_exclues' => ' / außer Rubrik(en) @id_rubriques@',
	'info_rubriques_max_affichees' => 'Affichage limit&eacute; &agrave; @max@ rubriques', # NEW
	'info_secteur_exclus' => ' / außer Sektor(en) @id_secteur@',
	'info_sousrub_cond' => 'Nur die Unterrubriken der aktuellen Rubrik werden angezeigt',
	'info_tous_groupes_mots' => 'Alle Schlagwortgruppen',
	'info_traduction_recuperee' => 'Die angezeigte Übersetzung wird je nach Sprachkontext gewählt.',
	'info_tri' => 'Sortierung:', # MODIF
	'info_tri_alpha' => '(alphabetisch)',
	'info_tri_articles' => 'Tri des articles :', # NEW
	'info_tri_num' => '(numerische)',

	// N
	'noisette_description' => 'Fügt ein mit dem Plugin "Menus" generiertes Menü ein',
	'noisette_label_afficher_titre_menu' => 'Titel des Menüs anzeigen?',
	'noisette_label_identifiant' => 'Dieses Menü anzeigen:',
	'noisette_nom_noisette' => 'Menü',
	'nom_menu_accueil' => 'Startseite',
	'nom_menu_articles_rubrique' => 'Artikel einer Rubrik',
	'nom_menu_deconnecter' => 'Abmelden',
	'nom_menu_espace_prive' => 'Einloggen / zum Redaktionssystem',
	'nom_menu_groupes_mots' => 'Schlagworte und Artikel einer Schlagwortgruppe',
	'nom_menu_lien' => 'Beliebiger Link',
	'nom_menu_mapage' => 'Meine Seite',
	'nom_menu_mots' => 'Artikel eines Schlagworts',
	'nom_menu_objet' => 'Artikel, Rubrik oder anderes SPIP-Objekt',
	'nom_menu_page_speciale' => 'Link zu einer HTML-Vorlage',
	'nom_menu_page_speciale_zajax' => 'Block einer ZPIP-Seite',
	'nom_menu_rubriques' => 'Liste oder Baumansicht der Rubriken und Artikel',
	'nom_menu_rubriques_evenements' => 'Ereignisse der Rubriken',
	'nom_menu_secteurlangue' => 'Hauptrubriken nach Sprache',
	'nom_menu_texte_libre' => 'Freitext',

	// T
	'tous_les_articles' => '... alle Artikel',
	'toutes_les_rubriques' => '... Toutes les rubriques' # NEW
);

?>
