<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
<script type="text/javascript" src="libs/mootools-1.2.5-core-yc.js" ></script>
<script type="text/javascript" src="validate.js" ></script>
<script type="text/javascript">

<?php

    if (isset($_GET['success']) and $_GET['success'] === 'true') {
        echo "alert('Success!')";
    }

?>

</script>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>
Heavenly Cupcake :: Homepage
</title>
</head>

<body>
    <div class="site">
    <div id="header" class="headerStyle">
        <img src = "./images/logo.png" />
    </div>
    <div id="corpo" class="corpoStyle" >
        <div id="menu" class="menu" >
            <ul>
        <li> <a href="#" > Attivita' </a>
        <li> <a href="#" > Cupcakes </a>
        <li> <a href="#" > Componi il tuo cupcake! </a>
        <li> <a href="#" > Contatti </a>
        </ul>
        </div>
        <div id="content" class="contentStyle">
            <img src="images/cake.jpg" class="imgStyle" alt="Cupcake Dream Logo"/>

                <p>La pasticceria <span class="farm"> Heavenly Cupcake
                </span> e' lieta di darti il benvenuto nel nostro dolce
                mondo.. Un mondo fatto di profumi, di colori, di bonta',
                di tenerezze e di momenti resi magici dall'assaggio di un
                nostro cupcake.</p>

                <h2 class="farm"> Cosa e' un Cupcake ?</h2>

                <p>Il piccolo peccato di gola del quale non potrai più
                fare a meno. Divertenti, romantiche e fantastiche le
                cupcakes nascono come mini torte grandi come una tazza da
                the, ma spettacolari per la loro bellezza declinano in
                biscotti e in grandi formati come torte nuziali o per il
                compleanno.</p>

                <h2 class="farm"> Un momento di prelibato stupore </h2>
                <p> Perfette in ogni occasione, per un the con le amiche o
                un evento mondano, i cupcakes sono la nuova tendenza in
                fatto di matrimoni e compleanni, il gesto più dolce per
                esprimere amore o per ridere in compagnia. Ideali per
                coccolarsi dopo una dura giornata, magari immersi nella
                vasca da bagno accompagnati da un bicchiere di spumante e
                mille candele. Sono il perfetto connubio fra goloso e
                bello.<br/>
                Ogni cupcake è diversa, decorata a mano una
                ad una è oggetto di design oltre che di gusto. Dunque,
                qualunque sia l'uso che ne facciate, viziatevi con queste
                adorabili prelibatezze e ricordate che una Cupcake vi
                mette davvero il sorriso!</p>

            <h2 class="farm"> Lasciati tentare... </h2>
            <p>Che sia glassata con cioccolati finissimi, semplicemente
            arricchita da un fiore o che ospiti al suo centro una primizia
            di stagione un cupcake sarà sempre una piccola delizia da
            regalare al palato!</p>

            <p>
            Se ti abbiamo tentato con i nostri dolcetti e volete saperne
            di più sul nostro dolce mondo, compilate il form sottostante
            ed entrate a far parte del nostro goloso mondo.</p>

        <div id="contatti" class="contattiStyle">
        <h3> Form Contatti </h3>
        <p><strong>Nota:</strong> tutti i campi sono obbligatori</p>
        <form name="formContatti" action="processData.php" method="POST" onSubmit="return validate()">
            <label for="name"> Nome : </label>
            <input type="text" id= "name" name="nome" /> <br/>
            <label for="surname"> Cognome : </label>
            <input type="text" id= "surname" name="cognome" /><br/>
            <label for="mail"> Email : </label>
            <input type="text" id= "mail" name="email" /><br/>
            <label for="richiesta"> Richiesta/Commento* : </label>
            <textarea name="testo" id="richiesta" rows="5" cols="40"></textarea>
            <input type="submit" value="Invia" />
        </form>
        </div>
        </div>

    </div>

    </div>

    <div class="footer">
        Heavenly Cupcake&#174; 2012.
        <img src="./images/cake_logo.png" width=25 height=25 alt="scrivici" border=0 ><a href="mailto:heavenlyCupcake@cupcake.com"> Mandaci una mail </a>
    </div>

</body>

</html>
