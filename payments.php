<?php
	require("php/connection.php");
?>

<div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; display: none; " id="pay">
                    <section class="contact-area mt-20 section-padding-100-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-24 col-lg-12">
                                    <div class="contact-content mb-100">
                                    	<div class="bradcumbContent">
					                        <h2 style="color:White; ">Payment</h2>
					                    </div>
                                        <form method="POST" >
                                        	<div class="form-group">
                                        		<table>
                                        			<tr>
                                        				<th>Accepted Cards:</th> 
                                        				<th><img src="img/icons/visa.png"></th>
                                        				<th><img src="img/icons/master.png"></th>
                                        				<th><img src="img/icons/amex.png"></th>
                                        				<th><img src="img/icons/discover.png"></th>
                                        			</tr>
                                        		</table>
                                        	</div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name on Card">
                                            </div>
                                     
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ccn" placeholder="Credit Card Number">
                                            </div>
                                        
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="expMonth" placeholder="Exp Month">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="cvv" placeholder="CVV">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="expYear" placeholder="Expire Year">
                                            </div>

                                            <button class="btn oneMusic-btn mt-15" type="submit" name="pay" onclick="hidePay()">Pay Now</button>
                                            <button class="btn oneMusic-btn mt-15" type="submit" name="cancel" onclick="hidePay()">Cancel</button>
                                        </form>

                                        <?php
                                            if (isset($_POST['pay'])) {
                                                $name=$_POST['name'];
                                                $ccn=$_POST['ccn'];
                                                $exm=$_POST['expMonth'];
                                                $exy=$_POST['expYear'];
                                                $amount=$_SESSION['amount'];
                                                $email=$_SESSION['email'];
                                                $msg="";
                                                $date=date("d-m-Y");

                                                if ($name==null || $email==null || $exm==null || $exy==null) {
                                                    echo "Please fill all the fields!";
                                                }
                                                else{
                                                    $sql="insert into sales(date, email, amount) values('$date', '$email', '$amount')";
                                                    $res=mysqli_query($con, $sql);

                                                    $sql1="update cart set status=1 where email='$email'";
                                                    $res1=mysqli_query($con, $sql1);

                                                    if ($res && $res1) {
                                                    	header("location:cart.php");
                        							}
                                                }
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>