<?php
	$data=array("AndhraPradesh","Assam","Bihar","Chandigarh","NagarHaveli","Lakshadweep","MadhyaPradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","DamanDiu","Delhi","Goa","Gujrat","Haryana","HimachalPradesh","JammuKashmir","Jharkhand","Karnataka","Kerela","Pondicherry","Punjab","Rajasthan","Sikkim","Tamilnadu");
?>
<div class="teachers">
	<div class="container">
		<div class="teach-head">
			<h3>Our Certificate Attestation Process</h3>
			<p>Attestation  procedures depends upon whether the country in which you intend to use the document is a signatory of the Hague Convention or not. If the country is a member of Hague Convention, you need <a href="apostille.php">Apostille</a>, Otherwise you need to attest/legalize/authenticate the certificate</p>
		</div>
		<div class="team-grids">
        	<?php
			for($i=0;$i<count($data);$i++)
			{
				?>
			<div class="col-md-3 team-grid text-center">
				<div class="team-img">
					<h3><a href="attestation.php?state=<?php echo $data[$i]; ?>"><?php echo $data[$i]; ?></a></h3>
				</div>
			</div>
            <?php
			}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>