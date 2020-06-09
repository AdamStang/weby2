<?php


// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;




    // Instantiate and use the dompdf class
    $dompdf = new Dompdf();

    // Load HTML content
    $dompdf->loadHtml('
<h2>FINÁLNE ZADANIE WEBTECH2</h2>
 <address><p>Slovenská technická univerzita v Bratislave<br>
             Fakulta elektrotechniky a informatiky<br>
             Webové technológie 2
           </p>
 </address>
<h1>Popis API</h1>
<p> V našej API máme využitú službu na vyhodnocovanie rôznych matematických úkonov.
     Túto funkcionalitu využívame prostredníctvom softvéru Octave, ktorý máme nainštalovaný na našom serveri.</p>
 <p>Samotné príkazy sa zadávajú do textového pola. API dokáže vyhodnotit aj viacero príkazov súcasne.
     Kedže si API nepamätá predošlé premenné, je potrebné všetky príkazy zadat spolu do jedného textového pola.
     Príkazy, ktoré nie su ukoncené bodkociarkou sa po odoslaní ihned vyhodnotia a vypíšu na obrazovku.</p>
 <p> Vyhodnocované príkazy sa po odoslaní automaticky posielajú do databázy, kde sú uložené na spracovanie.
     Posielanie údajov prebieha cez HTTP protokol. Využívajú sa metódy ako GET a POST, ktoré sú súcastou HTTP modelu.
     Odoslané informácie, ktoré sú uložené v databáze sa dajú exportovat do PDF.</p>

');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    //$dompdf->stream();
    // Output the generated PDF (1 = download and 0 = preview)
    $dompdf->stream();




?>