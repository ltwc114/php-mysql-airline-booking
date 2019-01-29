<section id="content" >
		<article class="col1" >
			<div class="pad_1"   >
				<h2>Your Flight Planner</h2>
                
				<form id="form_1" action="selectflight.php" method="post" >
					<div class="wrapper pad_bot1">
					<div class="wrapper"><br>
						Leaving From:
						<div class="bg">
                         <select name="from_flight" style="width:235px; height:30px;">
                           <option value="0">--------------Select Flight--------------</option>
                        <?php
							$query="select DISTINCT from_flight from flight";
							$stmt=$con->prepare($query);
							$stmt->execute();
							while($row=$stmt->fetch(PDO::FETCH_ASSOC))
							{
							
                        ?>
                        
                        		<option value="<?php echo $row["from_flight"]; ?>" ><?php echo $row["from_flight"]; ?></option>
                           <?php
							}
                        ?>
                        </select>
                        </div>
					</div>
							<div class="wrapper">
						Going To:
						<div class="bg"><select name="to_flight" style="width:235px; height:30px;">
                          <option value="0">--------------Select Flight--------------</option>
                        <?php
							$query="select DISTINCT to_flight from flight";
							$stmt=$con->prepare($query);
							$stmt->execute();
							while($row=$stmt->fetch(PDO::FETCH_ASSOC))
							{
							
                        ?>
                        		<option value="<?php echo $row["to_flight"]; ?>"><?php echo $row["to_flight"]; ?></option>
                           <?php
							}
                        ?>
                        </select>
                        </div>
					</div>
                    
             
                    
                    <div class="wrapper">
						Class
                    <select name="economy" style="width:235px; height:30px;">
                     <option value="economy" >economy</option>
                     <option value="execute">execute</option>
                     <option value="first">first</option>
                     </select>
					</br>
                    </br>
                    </div>
                    
                     <div class="wrapper">
						Passanger
                      <select name="passanger" style="width:235px; height:30px;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option></select>
</div> 
                      <input type="submit" class="button2" value="GO">
					</div>
				</form>
				</div>
		</article>