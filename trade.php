<?php
session_start();
$session = NULL;
include('ConnexionDB.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Accueil</title>
<link rel="stylesheet" href="styleTrade.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
<div class="menu-bar">
<ul>
<img src="./Images/Logo_Site.png" class="logo" >
<li class="active"><a href="Accueil.php"><i class="fa fa-home"></i> Accueil</a></li>    
<li><a href="Trade.php">Trade</a>
    <div class="sub-menu-1">
        <ul>
            <li class="hover-me"><a href="BTC24hLineTrade.php">BTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                    <li class="hover-me2"><a href="BTC24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                         <ul>
                            <li><a href="BTC24hLineTrade.php">Line</a></li>
                            <li><a href="BTC24hCsTrade.php">CandleStick</a></li>
                         </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="BTC7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC7dLineTrade.php">Line</a></li>
                            <li><a href="BTC7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="BTC30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC30dLineTrade.php">Line</a></li>
                            <li><a href="BTC30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="BTC365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC365dLineTrade.php">Line</a></li>
                            <li><a href="BTC365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="BNB24hLineTrade.php">BNB</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                 <ul>
                 <li class="hover-me2"><a href="BNB24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB24hLineTrade.php">Line</a></li>
                            <li><a href="BNB24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="BNB7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB7dLineTrade.php">Line</a></li>
                            <li><a href="BNB7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="BNB30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB30dLineTrade.php">Line</a></li>
                            <li><a href="BNB30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="BNB365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB365dLineTrade.php">Line</a></li>
                            <li><a href="BNB365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="ETH24hLineTrade.php">ETH</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="ETH24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH24hLineTrade.php">Line</a></li>
                            <li><a href="ETH24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="ETH7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH7dLineTrade.php">Line</a></li>
                            <li><a href="ETH7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="ETH30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH30dLineTrade.php">Line</a></li>
                            <li><a href="ETH30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="ETH365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH365dLineTrade.php">Line</a></li>
                            <li><a href="ETH365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>            
            </li>
            <li class="hover-me"><a href="FIL24hLineTrade.php">FIL</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="FIL24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL24hLineTrade.php">Line</a></li>
                            <li><a href="FIL24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="FIL7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL7dLineTrade.php">Line</a></li>
                            <li><a href="FIL7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="FIL30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL30dCsTrade.php">Line</a></li>
                            <li><a href="FIL30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="FIL365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL365dLineTrade.php">Line</a></li>
                            <li><a href="FIL365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="LTC24hLineTrade.php">LTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="LTC24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC24hLineTrade.php">Line</a></li>
                            <li><a href="LTC24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="LTC7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC7dLineTrade.php">Line</a></li>
                            <li><a href="LTC7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="LTC30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC30dLineTrade.php">Line</a></li>
                            <li><a href="LTC30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="LTC365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC365dLineTrade.php">Line</a></li>
                            <li><a href="LTC365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>



        </ul>
    </div>
</li>    


<li><a href="#">Portefeuille</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#">Donnees Personnelles</a></li>
            <li><a href="#">Mes Monnaies</a></li>
            



        </ul>
    </div>
</li>
<li><a href="#">Inscription</a></li>    
<li><a href="Connexion.php">Connexion</a></li>    

</ul>
</div>
</body>
</header>

<main>
 

    <form action="toto.php" method="post">
        <fieldset>
            <legend> TRADE  </legend>
            <select name="pets" id="pet-select">
                <option value="">ACHETER / VENDRE</option>
                <option value="ACHHETER">ACHETER</option>
                <option value="VENDRE">VENDRE</option>
            </select>
            <label for="utilise">  Monnaie : </label>
            <select name="utilise" id="utilise">
                <option value="BTC"> BTC</option>
                <option value="ETH"> ETH</option>
                <option value="BNB"> BNB</option>
                <option value="FIL"> FIL</option>
                <option value="LTC"> LTC</option>
                
            </select>
            <label for="comments">  Quantité :</label>
            <input type="number"   name="comments" id="comments" cols="20" rows="1.5">
        </input>
        </fieldset>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
        
    </form>
    
    <iframe  src="./Graphes/BTC24hLine.html" width="1202" height="690" frameborder="0"></iframe>
</main>
</html>