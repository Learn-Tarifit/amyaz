<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Amyaz</title>
  <link rel="stylesheet" href="new_style.css">
</head>
  
<body>
  <section class="page">
    <!-- Barre de navigation -->

        <?php include 'header.php';?>
      <!-- Fin de la barre de navigation -->
   
    <!-- Header -->

    <header>
        <div>
            <img src="intro3.jpg" class="img-fluid" alt="Responsive image">
            </div>
        <div class="container mt-3">
          <p class="text-center font-weight-bold"></p>
            <p></p>  
            <input class="form-control" id="myInput" onkeyup='tableSearch()' type="text" placeholder="Tape ici le mot recherché">
            <br>
            <table class="table table-bordered">
              <thead>
                <tr>
                    <th>Français</th>
                    <th>Tamaziɣt s latin</th>
                    <th>ⵜⴰⵎⴰⵣⵉⵖⵜ  ⵙ  ⵜⴼⵉⵏⴰⵖ</th>
                  </tr>
                </thead>
                    <tbody id="myTable">
                      <tr>
                        <td>refuser, ne pas vouloir </td>
                        <td>agi</td>
                        <td>ⴰⴳⵉ</td>
                    </tr>
                    <tr>
                        <td>entrer </td>
                        <td>adef </td>
                        <td>ⴰⴷⴼ</td>
                    </tr>
                    <tr>
                        <td>permettre, autoriser</td>
                        <td>aden</td>
                        <td>ⴰⴷⵏ</td>
                    </tr>
                    <tr>
                        <td>être malade, tomber malade</td>
                        <td>aḍen (tm)</td>
                        <td>ⴰⴹⵏ</td>
                    </tr>
                    <tr>
                        <td>être malade, tomber malade</td>
                        <td>hrec (ar)</td>
                        <td>ⵀⵔⵛ</td>
                    </tr>
                    <tr>
                        <td>descendre dans, descendre en </td>
                        <td>aḍer di</td>
                        <td>ⴰⴹⵔ ⴷⵉ</td>
                    </tr>
                    <tr>
                        <td>descendre dans un lieu, campter, mettre pied à terre, se poser (oiseau), </td>
                        <td>aḍer x</td>
                        <td>ⴰⴹⵔ ⵅ</td>
                    </tr>
                    <tr>
                        <td>descendre de (cheval, d'un âne)</td>
                        <td>aḍer x </td>
                        <td>ⴰⴹⵔ ⵅ </td>
                    </tr>
                    <tr>
                        <td>descendre à </td>
                        <td>aḍer ɣar </td>
                        <td>ⴰⴹⵔ ⵖⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>descendre de (voiture, métro, train, bateau, vélo)</td>
                        <td>aḍer zi</td>
                        <td>ⴰⴹⵔ ⵣⵉ</td>
                    </tr>
                    <tr>
                        <td>trouver</td>
                        <td>af</td>
                        <td>ⴰⴼ</td>
                    </tr>
                    <tr>
                        <td>enfoncer</td>
                        <td>afes</td>
                        <td>ⴰⴼⵙ</td>
                    </tr>
                    <tr>
                        <td>monter</td>
                        <td>ali</td>
                        <td>ⴰⵍⵉ</td>
                    </tr>
                    <tr>
                        <td>aider</td>
                        <td>alel (tm)</td>
                        <td>ⴰⵍⵍ</td>
                    </tr>
                    <tr>
                        <td>aider</td>
                        <td>wiz</td>
                        <td>ⵡⵉⵣ</td>
                    </tr>
                    <tr>
                        <td>aider</td>
                        <td>ɛawen (ar)</td>
                        <td>ⵄⴰⵡⵏ</td>
                    </tr>
                    <tr>
                        <td>s'aider, s'entraider, faire de l'entraide communautaire</td>
                        <td>swiz</td>
                        <td>ⵙⵡⵉⵣ</td>
                    </tr>
                    <tr>
                        <td>avoir confiance</td>
                        <td>tiqq (ar)</td>
                        <td>ⵜⵉⵇⵇ</td>
                    </tr>
                    <tr>
                        <td>saisir, prendre</td>
                        <td>ameẓ</td>
                        <td>ⴰⵎⵥ</td>
                    </tr>
                    <tr>
                        <td>écrire </td>
                        <td>ari</td>
                        <td>ⴰⵔⵉ</td>
                    </tr>
                    <tr>
                        <td>trembler</td>
                        <td>arjij</td>
                        <td>ⴰⵔⵊⵉⵊ</td>
                    </tr>
                    <tr>
                        <td>ajouter</td>
                        <td>arni</td>
                        <td>ⴰⵔⵏⵉ</td>
                    </tr>
                    <tr>
                        <td>accoucher, donner naissance</td>
                        <td>aru </td>
                        <td>ⴰⵔⵓ</td>
                    </tr>
                    <tr>
                        <td>ressembler</td>
                        <td>arws</td>
                        <td>ⴰⵔⵡⵙ</td>
                    </tr>
                    <tr>
                        <td>présider, diriger</td>
                        <td>aryyes</td>
                        <td>ⴰⵔⵢⵢⵙ</td>
                    </tr>
                    <tr>
                        <td>ouvrir</td>
                        <td>arzem</td>
                        <td>ⴰⵔⵣⵎ</td>
                    </tr>
                    <tr>
                        <td>vouloir</td>
                        <td>arzu</td>
                        <td>ⴰⵔⵣⵓ</td>
                    </tr>
                    <tr>
                        <td>jalouser, envier</td>
                        <td>asem</td>
                        <td>ⴰⵙⵎ</td>
                    </tr>
                    <tr>
                        <td>voler (dérober)</td>
                        <td>acar</td>
                        <td>ⴰⵛⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>amener</td>
                        <td>awi</td>
                        <td>ⴰⵡⵉ</td>
                    </tr>
                    <tr>
                        <td>sécher, être sec, tarir (la rivière)</td>
                        <td>azeɣ</td>
                        <td>ⴰⵣⵖ</td>
                    </tr>
                    <tr>
                        <td>courir</td>
                        <td>azzl</td>
                        <td>ⴰⵣⵣⵍ</td>
                    </tr>
                    <tr>
                        <td>se lever, se mettre debout</td>
                        <td>bdd</td>
                        <td>ⴱⴷⴷ</td>
                    </tr>
                    <tr>
                        <td>partager</td>
                        <td>bḍa</td>
                        <td>ⴱⴹⴰ</td>
                    </tr>
                    <tr>
                        <td>commencer à faire nuit ou jour</td>
                        <td>bumbes</td>
                        <td>ⴱⵓⵎⴱⵙ</td>
                    </tr>
                    <tr>
                        <td>faire</td>
                        <td>egg</td>
                        <td>ⴳⴳ</td>
                    </tr>
                    <tr>
                        <td>pétrir</td>
                        <td>ggʷ</td>
                        <td>ⴳⴳⵯ</td>
                    </tr>
                    <tr>
                        <td>coudre</td>
                        <td>gni</td>
                        <td>ⴳⵏⵉ</td>
                    </tr>
                    <tr>
                        <td>transpirer, suer</td>
                        <td>dded</td>
                        <td>ⴷⴷⴻⴷ</td>
                    </tr>
                    <tr>
                        <td>vivre</td>
                        <td>edder</td>
                        <td>ⴷⴷⵔ</td>
                    </tr>
                    <tr>
                        <td>vivre</td>
                        <td>ɛic (ar)</td>
                        <td>ⵄⵉⵛ</td>
                    </tr>
                    <tr>
                        <td>battre, concasser, torturer</td>
                        <td>ddez</td>
                        <td>ⴷⴷⵣ</td>
                    </tr>
                    <tr>
                        <td>beurrer, mettre du beurre</td>
                        <td>dhen </td>
                        <td>ⴷⵀⵏ</td>
                    </tr>
                    <tr>
                        <td>contraindre, forcer, exercer une pression sur </td>
                        <td>dɣɣed</td>
                        <td>ⴷⵖⵖⴷ</td>
                    </tr>
                    <tr>
                        <td>devenir, revenir</td>
                        <td>dwl </td>
                        <td>ⴷⵡⵍ</td>
                    </tr>
                    <tr>
                        <td>suivre</td>
                        <td>ḍefeṛ</td>
                        <td>ⴹⴼⵕ</td>
                    </tr>
                    <tr>
                        <td>se moquer (subtilement de quelqu'un)</td>
                        <td>ḍnẓ</td>
                        <td>ⴹⵏⵥ</td>
                    </tr>
                    <tr>
                        <td>voler (dans les air)</td>
                        <td>ḍu /ḍw</td>
                        <td>ⴹⵓ</td>
                    </tr>
                    <tr>
                        <td>chercher</td>
                        <td>fafa</td>
                        <td>ⴼⴰⴼⴰ</td>
                    </tr>
                    <tr>
                        <td>trier du grain, monder, enlever (des impuretés)</td>
                        <td>farn</td>
                        <td>ⴼⴰⵔⵏ</td>
                    </tr>
                    <tr>
                        <td>nettoyer, curer, balayer</td>
                        <td>faṛḍ</td>
                        <td>ⴼⴰⵕⴹ</td>
                    </tr>
                    <tr>
                        <td>terminer, finir</td>
                        <td>feḍḍa</td>
                        <td>ⴼⴹⴹⴰ</td>
                    </tr>
                    <tr>
                        <td>renoncer à, se passer de, abandonner</td>
                        <td>feḍḍa zi</td>
                        <td>ⴼⴹⴹⴰ ⵣⵉ</td>
                    </tr>
                    <tr>
                        <td>sortir</td>
                        <td>ffɣ</td>
                        <td>ⴼⴼⵖ</td>
                    </tr>
                    <tr>
                        <td>mâcher, ruminer</td>
                        <td>ffeẓ</td>
                        <td>ⴼⴼⵥ</td>
                    </tr>
                    <tr>
                        <td>expliquer</td>
                        <td>fennen</td>
                        <td>ⴼⵏⵏⴻⵏ</td>
                    </tr>
                    <tr>
                        <td>fondre</td>
                        <td>fsi</td>
                        <td>ⴼⵔⵉ</td>
                    </tr>
                    <tr>
                        <td>être léger </td>
                        <td>fsus</td>
                        <td>ⴼⵙⵓⵙ</td>
                    </tr>
                    <tr>
                        <td>passer</td>
                        <td>ekk</td>
                        <td>ⴽⴽ</td>
                    </tr>
                    <tr>
                        <td>se lever, se réveiller </td>
                        <td>kkar</td>
                        <td>ⴽⴽⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>enlever</td>
                        <td>kks</td>
                        <td>ⴽⴽⵙ</td>
                    </tr>
                    <tr>
                        <td>saigner du nez</td>
                        <td>kunzer</td>
                        <td>ⴽⵓⵏⵣⵔ</td>
                    </tr>
                    <tr>
                        <td>descendre</td>
                        <td>hwa </td>
                        <td>ⵀⵡⴰ</td>
                    </tr>
                    <tr>
                        <td>déranger, importuner, embêter</td>
                        <td>hewwes</td>
                        <td>ⵀⵡⵡⵙ</td>
                    </tr>
                    <tr>
                        <td>surveiller</td>
                        <td>ḥḍa </td>
                        <td>ⵃⴹⴰ</td>
                    </tr>
                    <tr>
                        <td>assister, être présent</td>
                        <td>ḥḍar</td>
                        <td>ⵃⴹⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>danser des épaules</td>
                        <td>ḥellek</td>
                        <td>ⵃⵍⵍⴽ</td>
                    </tr>
                    <tr>
                        <td>vouloir, désirer, aimer</td>
                        <td>xes</td>
                        <td>ⵅⵙ</td>
                    </tr>
                    <tr>
                        <td>regarder</td>
                        <td>xzar</td>
                        <td>ⵅⵣⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>asseoir, s'asseoir</td>
                        <td>qqim</td>
                        <td>ⵇⵇⵉⵎ</td>
                    </tr>
                    <tr>
                        <td>fermer</td>
                        <td>qqen</td>
                        <td>ⵇⵇⵏ</td>
                    </tr>
                    <tr>
                        <td>bêcher, retourner la terre</td>
                        <td>qqz</td>
                        <td>ⵇⵇⵣ</td>
                    </tr>
                    <tr>
                        <td>froisser, bâcler (travail)</td>
                        <td>guffeẓ</td>
                        <td>ⵇⵓⴼⴼⵥ</td>
                    </tr>
                    <tr>
                        <td>être meilleur (que)</td>
                        <td>iff (zi)</td>
                        <td>ⵉⴼⴼ</td>
                    </tr>
                    <tr>
                        <td>être gros</td>
                        <td>imzur </td>
                        <td>ⵉⵎⵣⵓⵔ</td>
                    </tr>
                    <tr>
                        <td>jouer, s'amuser, danser</td>
                        <td>irar </td>
                        <td>ⵉⵔⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>précéder</td>
                        <td>izzar</td>
                        <td>ⵉⵣⵣⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>rugir, hurler</td>
                        <td>izzif</td>
                        <td>ⵉⵣⵣⵉⴼ</td>
                    </tr>
                    <tr>
                        <td>être doux, être sucré</td>
                        <td>iẓiḍ</td>
                        <td>ⵉⵥⵉⴹ</td>
                    </tr>
                    <tr>
                        <td>glisser</td>
                        <td>jarr </td>
                        <td>ⵊⴰⵔⵔ</td>
                    </tr>
                    <tr>
                        <td>glacer</td>
                        <td>jars</td>
                        <td>ⵊⴰⵔⵙ</td>
                    </tr>
                    <tr>
                        <td>tondre</td>
                        <td>las</td>
                        <td>ⵍⴰⵙ</td>
                    </tr>
                    <tr>
                        <td>divorcer</td>
                        <td>llef</td>
                        <td>ⵍⵍⴼ</td>
                    </tr>
                    <tr>
                        <td>être profond</td>
                        <td>lleɣ</td>
                        <td>ⵍⵍⵖ</td>
                    </tr>
                    <tr>
                        <td>rencontrer</td>
                        <td>maggar</td>
                        <td>ⵎⴰⵇⵇⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>se précipiter, se hâter, se dépêcher</td>
                        <td>marr</td>
                        <td>ⵎⴰⵔⵔ</td>
                    </tr>
                    <tr>
                        <td>montrer</td>
                        <td>ml </td>
                        <td>ⵎⵍ</td>
                    </tr>
                    <tr>
                        <td>se passer, avoir lieu, se dérouler</td>
                        <td>mmsar</td>
                        <td>ⵎⵎⵙⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>fixer (du regard)</td>
                        <td>muɣɣer </td>
                        <td>ⵎⵓⵖⵖⵔ</td>
                    </tr>
                    <tr>
                        <td>se rencontrer</td>
                        <td>msaggar</td>
                        <td>ⵎⵙⴰⵇⵇⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>se soigner</td>
                        <td>mssesfer</td>
                        <td>ⵎⵙⵙⴻⵙⴼⵔ</td>
                    </tr>
                    <tr>
                        <td>se proposer (à l'un et à l'autre)</td>
                        <td>mssumer </td>
                        <td>ⵎⵙⵙⵓⵎⵔ</td>
                    </tr>
                    <tr>
                        <td>être petit </td>
                        <td>mẓi</td>
                        <td>ⵎⵥⵉ</td>
                    </tr>
                    <tr>
                        <td>renier</td>
                        <td>nakṛ</td>
                        <td>ⵏⴰⴽⵕ</td>
                    </tr>
                    <tr>
                        <td>gouverner</td>
                        <td>nbḍ</td>
                        <td>ⵏⴱⴹ</td>
                    </tr>
                    <tr>
                        <td>conduire</td>
                        <td>ndh</td>
                        <td>ⵏⴷⵀ</td>
                    </tr>
                    <tr>
                        <td>s'habituer à, s'accoutumer</td>
                        <td>nnum</td>
                        <td>ⵏⵏⵓⵎ</td>
                    </tr>
                    <tr>
                        <td>tuer</td>
                        <td>nɣ</td>
                        <td>ⵏⵖ</td>
                    </tr>
                    <tr>
                        <td>enterrer</td>
                        <td>ntar</td>
                        <td>ⵏⵜⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>insulter</td>
                        <td>ukker</td>
                        <td>ⵓⴽⴽⵔ</td>
                    </tr>
                    <tr>
                        <td>surpasser </td>
                        <td>ujar</td>
                        <td>ⵓⵊⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>tousser</td>
                        <td>usu</td>
                        <td>ⵓⵙⵓ</td>
                    </tr>
                    <tr>
                        <td>donner</td>
                        <td>uc</td>
                        <td>ⵓⵛ</td>
                    </tr>
                    <tr>
                        <td>aller</td>
                        <td>uyur</td>
                        <td>ⵓⵢⵓⵔ</td>
                    </tr>
                    <tr>
                        <td>aimer</td>
                        <td>ri</td>
                        <td>ⵔⵉ</td>
                    </tr>
                    <tr>
                        <td>rêver</td>
                        <td>rja </td>
                        <td>ⵔⵊⴰ</td>
                    </tr>
                    <tr>
                        <td>pleurer</td>
                        <td>ru</td>
                        <td>ⵔⵓ</td>
                    </tr>
                    <tr>
                        <td>faire tomber, renverser</td>
                        <td>ɣḍel</td>
                        <td>ⵖⴹⵍ</td>
                    </tr>
                    <tr>
                        <td>croire</td>
                        <td>ɣill</td>
                        <td>ⵖⵉⵍⵍ</td>
                    </tr>
                    <tr>
                        <td>exploiter</td>
                        <td>ɣllil</td>
                        <td>ⵖⵍⵍⵉⵍ</td>
                    </tr>
                    <tr>
                        <td>s'embusquer, se dissimuler pour éviter d'être vu, faire le guet</td>
                        <td>ɣlu</td>
                        <td>ⵖⵍⵓ</td>
                    </tr>
                    <tr>
                        <td>se rebeller</td>
                        <td>ɣuwweɣ</td>
                        <td>ⵖⵓⵡⵡⵖ</td>
                    </tr>
                    <tr>
                        <td>ronger, grignoter, croquer, mordiller</td>
                        <td>ɣezz</td>
                        <td>ⵖⵣⵣ</td>
                    </tr>
                    <tr>
                        <td>poser, mettre sur </td>
                        <td>sars</td>
                        <td>ⵙⴰⵔⵙ</td>
                    </tr>
                    <tr>
                        <td>désigner un chef, nommer </td>
                        <td>saryyes</td>
                        <td>ⵙⴰⵔⵢⵢⵙ</td>
                    </tr>
                    <tr>
                        <td>sonner </td>
                        <td>sasar</td>
                        <td>ⵙⴰⵙⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>arrêter </td>
                        <td>sbdd</td>
                        <td>ⵙⴱⴷⴷ</td>
                    </tr>
                    <tr>
                        <td>convaincre</td>
                        <td>sedreḥ</td>
                        <td>ⵙⴷⵔⵃ</td>
                    </tr>
                    <tr>
                        <td>envoyer / faire passer</td>
                        <td>sekk</td>
                        <td>ⵙⴽⴽ</td>
                    </tr>
                    <tr>
                        <td>écouter</td>
                        <td>sḥss</td>
                        <td>ⵙⵃⵙⵙ</td>
                    </tr>
                    <tr>
                        <td>mentir</td>
                        <td>sxarreq</td>
                        <td>ⵙⵅⴰⵔⵔⵇ</td>
                    </tr>
                    <tr>
                        <td>se taire </td>
                        <td>sqar</td>
                        <td>ⵙⵇⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>faire suer </td>
                        <td>sidded</td>
                        <td>ⵙⵉⴷⴷⴻⴷ</td>
                    </tr>
                    <tr>
                        <td>continuer, poursuivre, enchaîner </td>
                        <td>siɣi</td>
                        <td>ⵙⵉⵖⵉ</td>
                    </tr>
                    <tr>
                        <td>laver </td>
                        <td>slil </td>
                        <td>ⵙⵍⵉⵍ</td>
                    </tr>
                    <tr>
                        <td>entendre </td>
                        <td>sll</td>
                        <td>ⵙⵍⵍ</td>
                    </tr>
                    <tr>
                        <td>régner</td>
                        <td>selleb </td>
                        <td>ⵙⵍⵍⴱ</td>
                    </tr>
                    <tr>
                        <td>faire grandir, éduquer, élever</td>
                        <td>semɣar</td>
                        <td>ⵙⵎⵖⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>être proche, être près de</td>
                        <td>ades</td>
                        <td>ⴰⴷⵙ</td>
                    </tr>
                    <tr>
                        <td>rapprocher, jouxter</td>
                        <td>sides</td>
                        <td>ⵙⵉⴷⵙ</td>
                    </tr>
                    <tr>
                        <td>être insuffisant</td>
                        <td>udrus</td>
                        <td>ⵓⴷⵔⵓⵙ</td>
                    </tr>
                    <tr>
                        <td>réduire, amoindrir</td>
                        <td>sudrs</td>
                        <td>ⵙⵓⴷⵔⵙ</td>
                    </tr>
                    <tr>
                        <td>baisser</td>
                        <td>sneqs (ar)</td>
                        <td>ⵙⵏⵇⵙ</td>
                    </tr>
                    <tr>
                        <td>réduire</td>
                        <td>neqs (ar)</td>
                        <td>ⵏⵇⵙ</td>
                    </tr>
                    <tr>
                        <td>réduire, amoindrir</td>
                        <td>sudrs</td>
                        <td>ⵙⵓⴷⵔⵙ</td>
                    </tr>
                    <tr>
                        <td>prendre du soleil, s'ensoleiler, se chauffer au soleil</td>
                        <td>summar</td>
                        <td>ⵙⵓⵎⵎⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>faire des youyou, appeler à grand cri </td>
                        <td>sriwrew</td>
                        <td>ⵙⵔⵉⵡⵔⵡ</td>
                    </tr>
                    <tr>
                        <td>dessécher</td>
                        <td>sɣur</td>
                        <td>ⵙⵖⵓⵔ</td>
                    </tr>
                    <tr>
                        <td>faire sécher</td>
                        <td>ssazeɣ</td>
                        <td>ⵙⵙⴰⵣⵖ</td>
                    </tr>
                    <tr>
                        <td>soigner</td>
                        <td>ssesfer</td>
                        <td>ⵙⵙⴻⵙⴼⵔ</td>
                    </tr>
                    <tr>
                        <td>essuyer</td>
                        <td>ssfḍ</td>
                        <td>ⵙⵙⴼⴹ</td>
                    </tr>
                    <tr>
                        <td>dicter</td>
                        <td>ssfta</td>
                        <td>ⵙⵙⴼⵜⴰ</td>
                    </tr>
                    <tr>
                        <td>rugir (lion), parler haut et fort</td>
                        <td>zim </td>
                        <td>ⵣⵉⵎ</td>
                    </tr>
                    <tr>
                        <td>presser (fruit), tordre (linge)</td>
                        <td>zemm</td>
                        <td>ⵣⵎⵎ</td>
                    </tr>
                    <tr>
                        <td>vendre </td>
                        <td>zenz</td>
                        <td>ⵣⵏⵣ</td>
                    </tr>
                    <tr>
                        <td>aboyer </td>
                        <td>zu</td>
                        <td>ⵣⵓ</td>
                    </tr>
                    <tr>
                        <td>mugir </td>
                        <td>zungi</td>
                        <td>ⵣⵓⵏⴳⵉ</td>
                    </tr>
                    <tr>
                        <td>chanter </td>
                        <td>zri </td>
                        <td>ⵣⵔⵉ</td>
                    </tr>
                    <tr>
                        <td>prendre le chemin</td>
                        <td>zreɣ</td>
                        <td>ⵣⵔⵖ</td>
                    </tr>
                    <tr>
                        <td>corrompre, soudoyer contre une somme</td>
                        <td>zeṭṭeṭ</td>
                        <td>ⵣⵟⵟⴻⵟ</td>
                    </tr>
                    <tr>
                        <td>se débrouiller, se tirer d'affaire, se tirer d'un embraras</td>
                        <td>zṭṭeṭ ixf</td>
                        <td>ⵣⵟⵟⴻⵟ ⵉⵅⴼ</td>
                    </tr>
                    <tr>
                        <td>voir</td>
                        <td>ẓar</td>
                        <td>ⵥⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>jouer de la musique, de la flute </td>
                        <td>ẓmmar </td>
                        <td>ⵥⵎⵎⴰⵔ</td>
                    </tr>
                    <tr>
                        <td>rechigner</td>
                        <td>ẓenfeḍ</td>
                        <td>ⵥⵏⴼⴹ</td>
                    </tr>
                    <tr>
                        <td>traverser </td>
                        <td>ẓwa</td>
                        <td>ⵥⵡⴰ</td>
                    </tr>
                    <tr>
                        <td>traire </td>
                        <td>ẓẓi</td>
                        <td>ⵥⵥⵉ</td>
                    </tr>      
            </table>
          </div>
          <script type="application/javascript">
            let input, filter, table, tr, td, txtValue;
            input = document.getElementById("myInput");
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                tr[i].style.display = "none";
            }

            function tableSearch() {			
                //Intialising Variables
                filter = input.value.toUpperCase();	
                
                for (let i = 0; i < tr.length; i++) {
                    for (let j = 0; j < 1; j++){
                        td = tr[i].getElementsByTagName("td")[j];
                        if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1 && filter != '') {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            }
        </script>
    </header>
    <!-- Fin du header -->
    
    <!-- Informations -->
    
    <!-- Fin des informations -->
  </section>
  
<!-- Pied de page -->

<footer class="site-footer ">
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            <!-- Twitter -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
      
            <!-- Google -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
            </svg>
      
            <!-- Instagram -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
      
            <!-- Linkedin -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
            </svg>
    
            <!-- Github -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
    
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
       
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright :
          <a class="text-white">AMYAZ</a>
        </div>
        <!-- Copyright -->
  </footer>
  <!-- Fin du pied de page -->
</footer>
</body>
</html>