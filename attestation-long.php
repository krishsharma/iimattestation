<?php
if(!isset($_GET['state']))
{
	?>
    <div class="about">
        <div class="container">
            <div class="help-info">
                <h2 class="tittle"><?php echo AttestationHead; ?></h2>
            </div>
            <div class="about-grids">
                <div class="col-md-5 about-grid-left">
                    <img src="images/appostilled.gif" alt=""/>
                </div>
                <div class="col-md-7 about-grid">
                    <h3></h3>
                    <?php echo Attestation; ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <?php
	include "gc-pro.php";
}
else
{
	include "gc-pro.php";
	$state=$_GET['state'];
?>
	<div class="about">
        <div class="container">
            <div class="help-info">
                <h2 class="tittle"><?php echo $state; ?> Certificate Attestation</h2>
            </div>
            <div class="about-grids">
                <div class="col-md-12 about-grid">
                    <h3>Attestation  procedures depends upon whether the country in which you intend to use the document is a signatory of the Hague Convention or not. If the country is a member of Hague Convention, you need <a href="apostille.php">Apostille</a>, Otherwise you need to attest/legalize/authenticate the certificate</h3>
                    <p>There are two procedures we can follow to attest your certificate / document  The procedures are: </p>
                    <p><strong>Type A</strong></p>
                    <p>
                    	<ol>
                        	<li>Home Department of <?php echo $state; ?> (HRD Authentication)</li>
                            <li>MEA Delhi</li>
                            <li>Concerned Embassy in Delhi</li>
                            <li>Ministry of Foreign Affairs of the intended country</li>
                        </ol>
                    </p>
                    <p><strong>Type B</strong></p>
                    <p>
                    	<ol>
                        	<li>Notary Maharashtra</li>
                        	<li>Home Department of Maharashtra</li>
                            <li>MEA Delhi</li>
                            <li>Concerned Embassy in Delhi</li>
                            <li>Ministry of Foreign Affairs of the concerned country</li>
                        </ol>
                    </p>
                    <p><strong>NON EDUCATIONAL DOCUMENTS</strong></p>
                    <p>
                    	<ol>
                        	<li>Notary Maharashtra</li>
                        	<li>Home Department of Maharashtra</li>
                            <li>MEA Delhi</li>
                            <li>Concerned Embassy in Delhi</li>
                            <li>Ministry of Foreign Affairs of the concerned country</li>
                        </ol>
                    </p>
                    <p><strong>APOSTILLE</strong></p>
                    <p>Procedure for Apostille of EDUCATIONAL DOCUMENTS</p>
                    <p>
                    	<ol>
                        	<li>Home department Authentication (HRD)</li>
                        	<li>Apostille Sticker from Ministry of External Affairs (MEA)</li>
                        </ol>
                    </p>
                    <p>Procedure for Apostille of NON EDUCATIONAL DOCUMENTS</p>
                    <p>
                    	<ol>
                            <li>Subdivisional Magistrate</li>
                            <li>Apostille sticker from Ministy of External Affairs</li>
                            
                        </ol>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php
}
?>