<?php
    require_once('identifier.php');
    require_once("connexionDB.php");
	$user=$_SESSION['user'];
	$id= $user['iduser'];
    
    $nomCrypto=isset($_GET['nomCrypto'])?$_GET['nomCrypto']:"all";
    
    if($nomCrypto=="all"){
        $requete="select * from crypto";
       
		$requete2="select Binance_coin,Bitcoin,Etherum,Filecoin,Litecoin from portefeuille
								where iduser=$id";
								
    }else{
         $requete="select * from crypto
                where  nomCrypto='$nomCrypto' ";

				
		if($nomCrypto=="Etherum"){
	     $requete2="select Etherum from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="Bitcoin"){
	     $requete2="select Bitcoin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="Binance_coin"){
	     $requete2="select Binance_coin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="Litecoin"){
	     $requete2="select Litecoin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="Filecoin"){
	     $requete2="select Filecoin  from portefeuille
								where iduser=$id";
		}
        
    }

    $resultatC=$pdo->query($requete);
	$resultatV=$pdo->query($requete2);
?>
<html>
<head>
<title>Portefeuille</title>

<link rel="stylesheet" href="stylePortefeuille.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</style>
</head>
<body>
<header>
<div class="menu-bar">
<ul>
<img src="../images/Logo_Site.png" class="logo" />
<li><a href="#"><i class="fa fa-home"></i> Acceuil</a></li>    
<li><a href="#">Trade</a>
    <div class="sub-menu-1">
        <ul>
            <li class="hover-me"><a href="#">BTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                    <li class="hover-me2"><a href="#">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                         <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                         </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="#">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="#">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="#">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="#">BNB</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                 <ul>
                 <li class="hover-me2"><a href="#">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="#">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="#">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="#">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="#">ETH</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="#">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="#">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="#">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="#">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>            
            </li>
            <li class="hover-me"><a href="#">FIL</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="#">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="#">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="#">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="#">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="#">LTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="#">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="#">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="#">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="#">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="#">Line</a></li>
                            <li><a href="#">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>



        </ul>
    </div>
</li>    


<li class="active"><a href="#">Portefeuille</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#">Donnees Personnelles</a></li>
            <li><a href="wallet.php">Mes Monnaies</a></li>
            

        </ul>
    </div>
</li>
    
<li style="left-side"><a href="#">Deconnexion</a></li>    

</ul>
</div>
<div class="container">
            <div >
          
				
				<div>
					
					<form method="get" action="wallet.php" class="form-inline">
					</br><br/><br/>
						
                        <div>
                       <label for="nomCrypto" >Cryptos</label>
                       <span class="custom-dropdown custom-dropdown--white">
			            <select name="nomCrypto" class="custom-dropdown__select custom-dropdown__select--white" id="nomCrypto" 
                                onchange="this.form.submit()">
                            <option value="all" <?php if($nomCrypto==="all") echo "selected" ?>>all</option>
                            <option value="Etherum"   <?php if($nomCrypto==="Etherum")   echo "selected" ?>>etherum</option>
                            <option value="Binance_coin"   <?php if($nomCrypto==="Binance_coin")   echo "selected" ?>>binance coin</option>
                            <option value="Bitcoin"  <?php if($nomCrypto==="Bitcoin")  echo "selected" ?>>bitcoin</option>
                            <option value="Litecoin"   <?php if($nomCrypto==="Litecoin")   echo "selected" ?>>litecoin</option>
                            <option value="Filecoin"   <?php if($nomCrypto==="Filecoin")   echo "selected" ?>>filecoin</option> 
			            </select>
                        </span>
                        
                            <button class="button button1" >
					            <span> <a id ="trade" href=#>Trade</a> <span/>
				            </button>
                        
                  <img  id = "portefeuille" src="../images/portefeuille.png" loading="lazy" height="40" width="40">
                  <button class="button button2" >
                  <span>
                 <?php $requete3="select Euro from portefeuille
								where iduser=$id";
                                $resultatE=$pdo->query($requete3);
                                $euro=$resultatE->fetch();
                                echo $euro['Euro'];echo' euros';

                  ?>
                  </span>
                  </button>
                        </div>
					</form>	  
				</div>
				
			</div>
           <br/><br/><br/>
            <div >
                
                <div >
                    <table class="table" id="tableauCrypto">
                        <thead>
                            <tr>
                              <th>rang</th><th>symbole</th><th>nom crypto</th><th>valeur crypto</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                          <?php 
								$crypto2=$resultatV->fetch();
								 $j=-1;
							while($crypto=$resultatC->fetch()){ 
							?>
                                <tr>
							<td><?php echo $crypto['idCrypto']; ?> </td>
							<td>
                                <img class="AssetTableRow__Icon-bzcx4v-19 fgsiwR" src="../images/<?php echo $crypto['Photo'] ?>" alt="Logo Bitcoin" aria-label="Logo Bitcoin" loading="lazy" height="36" width="36"></body>

                      
                            </td>
							<td><?php echo $crypto['nomCrypto']; ?> </td>
							<td><?php $j++; echo $crypto2[$j];?></td> 	
					            </tr>
							<?php } ?> 
                       </tbody>
                    </table>
                
                </div>
                <br/> <br/>
				
            </div>
        </div>
</body>
</header>