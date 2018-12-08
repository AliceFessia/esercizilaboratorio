<!DOCTYPE html>
<html lang="en">
<?php error_reporting(E_ALL | E_STRICT); ?>
	
	<head> 
		<title>Rancid Tomatoes</title>
       	<link href="movie.css" type="text/css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link href="http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/rotten.gif "type="image/gif "rel="icon">                                                                
		
	</head>

        <body> 
        	<?php $film = $_GET["film"] ?>
          	<div id = "banner">
				<img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/banner.png" alt="Rancid Tomatoes">
            </div>
                
                
            <h1><?php
                $info = file("{$film}/info.txt");
                echo $info[0]." (".trim($info[1]).")";
                ?></h1>
            <div id = "all"> <!-- colonna destra più colonna sinistra  -->
                <div id = "right"> <!-- contiene la locandina di lato -->
					<div>
						<img src="<?= $film ?>/overview.png" alt="general overview">
					</div>
                    
					<dl>
                    	<?php
                    		$overview=file("{$film}/overview.txt");
                    		foreach($overview as $o) {
                    			$d1 = explode(":",$o);
                    			?>
                    			<dt><?= $d1[0] ?> </dt>
                    			<?php for($i=1;$i<count($d1);$i++){ ?>
                    			<dd><?= $d1[$i] ?> </dd>
                    			<?php
                    			}
                    		}
                    	?>
					</dl>
                   
                </div> <!-- chiusura div "right" (locandina) -->
                <div id = "left">
                	
					<div id ="rate">
						<?php
						if($info[2]>=60){
							$big_image="freshbig.png";
						}else{
							$big_image="rottenbig.png";
						}
						?>	
						<img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/<?= $big_image ?>" alt="Review">
                        <?= $info[2] ?>%
					</div>
					<?php
					$rec=glob("{$film}/review*.txt");
					$N=count($rec);
					if($N>10){
						$max=10;
					}else{
						$max=$N;
					}
					$mezza=((int)($max/2)+$max%2);
					for($i=0;$i<$max;$i++){
						if($i==0){
					?>
                    <div id="columns">
                    <?php }else if($i==$mezza){ ?>
                        <div id="columndx">
                        <?php } ?>
                        <?php
                        $rec1=file($rec[$i], FILE_IGNORE_NEW_LINES);
                        ?>
							<p class="quotes">
							<?php
							if($rec1[1]=="FRESH"){ ?>
                    			<span >
									<img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/fresh.gif" alt="Fresh">
							<?php
							}else{ ?>
								<img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/rotten.gif" alt="Rotten">
							<?php } ?>
									<q><?= $rec1[0] ?></q>
                    			</span>
                			</p>
							<p class="reviewers">
								<img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif" alt="Critic">
								<?= "$rec1[2]" ?><br>
								<?= "$rec1[3]" ?>
                        		<span class="publications">Variety</span>
							</p>
							<?php
							if($i==($mezza-1) or $i==$max){ ?> 
                        </div> <!-- chiusura div "rightcolumn" -->
                        <?php } ?>
                        <?php } ?>
                        
                    </div> <!-- chiusura div columns -->
                
            </div> <!-- fine del div left -->
            
			<p class="footer">(1-<?= $N ?>) of <?= $N ?></p>
			
        </div><!-- fine del div all -->
        
		<div id="validators">
			<a href="http://validator.w3.org/check/referer">
       <img src="http://webster.cs.washington.edu/w3c-html.png" alt="Validate"></a> 			
            <br>
			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!"></a>
		</div> 
		
	</body>
</html>


