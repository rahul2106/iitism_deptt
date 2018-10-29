
<?php include('chemistry_navigation.php');?>

<style>


#photo
{
    display:inline-block;
    border:0;
    width:196px;
    height:210px;
    position: relative;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
#photo:hover
{
    box-shadow: 0px 0px 150px #000000;
    z-index: 2;
    -webkit-transition: all 500ms ease-in;
    -webkit-transform: scale(3);
    -ms-transition: all 400ms ease-in;
    -ms-transform: scale(3);   
    -moz-transition: all 400ms ease-in;
    -moz-transform: scale(3);
    transition: all 400ms ease-in;
    transform: scale(3);
}
</style>
<style>
table {
  margin:50px auto;
  box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
}

thead th {
  font-size:16px;
  font-weight:400;
  color:white;
  text-align:center;
  padding:20px;
  background-image : linear-gradient(#646f7f, #4a5564);
}

tbody tr td {
 
  font-weight:400;
  color:#5f6062;
  font-size:13px;
  padding:20px 20px 20px 20px;
  border-bottom:1px solid #e0e0e0;
  
}

tbody tr:nth-child(2n) {
  background:#f0f3f5;
}


</style>
   <div class="row">
    
     
	 <div class="col-lg-12 ">
      <div class="row">
          <h4 id="arvcenter00" style="text-align:center"><b>Faculty Members</b></h4>
        </div>
		
		<div class="row">
          <h6 id="arvcenter00" style="text-align:center"><b>Please Prefix +91-326-223 in phone number whereever applicable</b></h6>
        </div>
          
        <table class="table table-striped table-hover " style="width:100%">
        <thead style='background-color:#5BC0DE;'>
         <tr >
		  <th>#</th>
		  <th>Photo</th>
		 <th>Name<br>(Click )</th>
         <th >Designation  </th>
		 <!-- Step 1 for adding personal home page -->
		  <th>Contact Email/Office No/<br>Mobile/Personal Page</th>
		 <!-- Step 1 for adding personal home page -->
          <th id="arv997a">Research Interest</th>
         </tr>
        </thead>
       <tbody id="table_body">
       <div id="">
              <?php foreach($art as $ar){ 
          if($ar['designation']=='professor')
           {
            $desi='Professor';
           }
            elseif ($ar['designation']=='associate professor')
           {
            $desi='Associate Professor';
           }
            elseif ($ar['designation']=='assistant professor')
           {
            $desi='Assistant Professor';
           }
           elseif ($ar['designation']=='adjunct prof')
           {
            $desi='Adjunct Professor';
           }
           else
           {
            $desi='Chair Professor';
           }
          ?>
        <tr>
		 <td> <?php  echo $k; $k++;  ?></td>
		 <td ><?php echo "<img";
		  echo " src=\"";
		  echo base_url();
		  echo $ar['photopath'];
          echo " \" ";
		  echo "style = 'height:40px;width:40px;'";
           echo " id='photo' /> ";	
	   ?></td>
                     <td>
            <form action="<?php echo site_url('Faculty_members/profile')?>" method="post">

                <input type="hidden" name="name" value="<?php echo $ar['first_name'].' '.$ar['middle_name'].' '.$ar['last_name']?>" >

                <!-- <input type="hidden" name="id" value="<?php echo $ar['id']?>" > -->

                <input type="hidden" name="salutation" value="<?php echo $ar['salutation']?>" >

                <!-- <input type="hidden" name="department" value="<?php echo $dept?>" > -->

                <input type="hidden" name="email" value="<?php echo $ar['email']?>" >

                <input type="hidden" name="photopath" value="<?php echo $ar['photopath']?>" >

                <!-- <input type="hidden" name="sex" value="<?php echo $ar['sex']?>" > -->
                <input type="hidden" name="dept" value="<?php echo $ar['dept_name']?>" >

                <input type="hidden" name="designation" value="<?php echo $desi;?>" >

                <input type="hidden" name="office_no" value="<?php echo $ar['office_no']?>" >

                <input type="hidden" name="mobile_no" value="<?php echo $ar['mobile_no']?>" >

                <!-- <input type="hidden" name="nationality" value="<?php echo $ar['nationality']?>" > -->
                
                <input type="hidden" name="research_interest" value="<?php echo $ar['research_interest']?>" >
				<!-- Step 2 for adding personal home page -->
				<input type="hidden" name="ppage" value="<?php echo $ar['per_page']?>" >
             <!-- Step 2 for adding personal home page -->
              <button id="prof_hover" type="submit"><?= $ar['salutation'].' '.$ar['first_name'].' '.$ar['middle_name'].' '.$ar['last_name'] ?></button>
            </form>
          </td>
           <td><?= $desi ?></td>
           <td>
				<?php
					if ($ar['email'] == "")
						echo "Not Available " ; 
					else
						echo $ar['email']
				?>
				<?php
						echo "</br>";
				?>
				<?php
					if ($ar['office_no'] == 0)
						echo "Not Available";
					else
						echo $ar['office_no']
				?>
				<?php
						echo "</br>";
				?>
				<?php
					if ($ar['mobile_no'] == 0 )
						echo "On Request";
					else
						echo $ar['mobile_no']
				?>
				<?php
						echo "</br>";
				?>
				<!-- Step 3 for adding personal home page -->
				<?php
					if ($ar['per_page'] == "" ){
						echo "Under Construction";
					} else { ?>
						<!--<a href="<?php echo base_url().'~'.$ar['per_page'];?>" target="_blank"><?php echo base_url().'~'.$ar['per_page'];?></a>-->
						<a href="<?php echo base_url().'~'.$ar['per_page'];?>" target="_blank">Personal Page</a>
					<?php }
				?>
				<?php
						echo "</br>";
				?>
				<!-- Step 3 for adding personal home page -->
			</td>
           <td><?= $ar['research_interest'] ?></td>
        </tr>


        
        <?php 
    }
       ?></div>
 
        
       </tbody>
       </table>
       <br><br><br><br><br><br><br>
     </div>
    
    
   </div>
   
  <?php
include(APPPATH . 'views/template/footer.php');
foot();
?>
 
</body></html>