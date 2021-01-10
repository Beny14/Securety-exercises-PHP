<?php
// Security Exemple
// ------------------------ 1 ---------------------
/*
    În aplicaţie intră variabila:
    $page = "allUsers.php";
    Creați mecanismul care, prin lista albă, va asigura încărcarea sigură a
    acestei pagini de pe sistem.
*/

    // $allPages = array("allUsers.php", "anyOtherPage.php"); // Paginile ce vor fi prezentate pe site
    // $page = "allUsers.php";
    //     if(in_array($page, $allPages)){
    //         include $page;
    //     }else{
    //         echo "Unknown Page";
    //     }

// ------------------------ 2 ---------------------
/*
    Validați sesiunea pe baza lui User Agent. După validarea realizată cu
    succes, trebuie regenerate sesiunile ID. Dacă validarea nu este bună,
    trebuie întreruptă executarea aplicaţiei şi emis mesajul conform căruia
    utilizatorul nu este valid.
*/

    // if(!isset($_SESSION))
    //     session_start();

    // if(!isset($_SESSION['ua'])) die("Invalid user");

    // $currentUserAgent = $_SERVER['HTTP_USER_AGENT'];
    // $sessionUserAgent = $_SESSION['ua'];

    // if($sessionUserAgent != $currentUserAgent) die("Invalid user");
    // echo "valid user";
    // session_regenerate_id(true);

// ------------------------ 3 ---------------------
/*
    Referrer, acesta reprezintă locaţia de la care browserul a ajuns în 
    locaţia curentă. Se recomandă ca înaintea executării codului pe o 
    pagină „sigură”, să verificăm de unde a ajuns acesta aici şi să continuăm executarea
    numai dacă este vorba de o locaţie acceptată.
*/

    // if(isset($_SERVER['HTTP_REFERER'])) {
    //     echo $_SERVER['HTTP_REFERER'];
    // }
       
    // <a href = "index.php">referer check</a>

// ------------------------ 4 ---------------------
/*
    Acest exemplu verifică dacă stringul este un URL valid:
*/

    // $url = "http://www.mysite.com";

    // if(filter_var($url, FILTER_VALIDATE_URL)){
    //     echo("OK");
    // }else{
    //     echo("Error");
    // }

// ------------------------ 5 ---------------------
/*
    Acest exemplu corectează erorile (caracterele interzise) din denumirea URL-ului:
*/

    // echo filter_var("http://www.myšššsite.com", FILTER_SANITIZE_URL);

// ------------------------ 6 ---------------------
/*
    Dacă, cu ajutorul algoritmului md5, vrem să creăm un hash din
    cuvântul admin, am fi scris următoarele:
*/

    // echo hash("md5", "admin");
    
    echo "<h1 style='text-align:center;'>Exemplele sunt puse in '<span style='color:green;'>comentarii</span>', nu se va afisa nimic pe pagina, deschide-ti fisierul cu ajutorul unui editor code!</h1>";
?>