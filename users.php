<?php
    session_start();
    require("php/connection.php");
    include "header.php";
?>
<link href="search.css" rel="stylesheet" />
<script type="text/javascript">
    function showAdd(){
        $('#add').show();
    }
    function hideAdd(){
        $('#add').hide();
    }
</script>

<!-- ##### Users Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/pics/img48.jpg);">
    <section class="newsletter-testimonials-area">
        <div class="container">
            <div class="row">
			    <div class="container">
			        <div class="row">
			            <div class="col-12">
			                <div class="section-heading white">
			                    <p>Editable</p>
			                    <h2>Users</h2>
			                </div>
			            </div>
			        </div>
				</div>


                <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; display: none;" id="add">
                    <div class="bradcumbContent">
                        <h2 style="color:White; ">Add New Users</h2>
                    </div>
                    <section class="contact-area mt-20 section-padding-100-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-24 col-lg-12">
                                    <div class="contact-content mb-100">
                                        <form method="POST" action="users.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </div>
                                     
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        
                                            <div class="form-group">
                                                <select name="type"  style="width:180px;height:30px;" class="text-dark">
                                                    <option name="type">Select Category: </option>
                                                    <option value="Admin" name='type'>Admin</option>
                                                    <option value="Singer" name='type'>Singer</option>
                                                    <option value="Customer" name='type'>Customer</option>
                                                </select>
                                            </div>

                                            <button class="btn oneMusic-btn mt-15" type="submit" name="add">Add User</button>
                                            <button class="btn oneMusic-btn mt-15" type="reset" name="reset">Clear</button>
                                        </form>

                                        <?php
                                            if (isset($_POST['add'])) {
                                                $name=$_POST['name'];
                                                $email=$_POST['email'];
                                                $type=$_POST['type'];
                                                $pwd=md5('1234');

                                                if ($name==null || $email==null || $type=="Select Category") {
                                                    $msg="Please fill all the fields!";
                                                    echo "<script type='text/javascript'>alert('$msg')</script>";
                                                }
                                                else{
                                                    $sql="insert into user(name, email, password, type) values('$name','$email', '$pwd', '$type')";
                                                    mysqli_query($con, $sql);
                                                }
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


	            <!-- Users -->
	             <div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:75em; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; ">
	             	<div class="bradcumbContent">
		                <h2 style="color:White;">Users List</h2>
		            </div>
                    <center><button class="btn oneMusic-btn mt-15" type="submit" name="addUser" onclick="showAdd()" style="width:15rem;">Add New User</button></center>
		            <div class="scroll" style="overflow-x: hidden; overflow-x: auto; max-height: 50rem;">
		                <section class="contact-area mt-20 section-padding-100-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-24 col-lg-12">
                                        <div class="contact-content mb-100">
                                        	<table style="color: white; width: 75%; ">
	                                        	<form method="POST" action="users.php">
	                                        		<tr>
	                                        			<td>
			                                        		<button class="btn-search oneMusic-btn mt-15" type="submit" name="all">All</button>
														</td>
														<td>
			                                        		<button class="btn-search oneMusic-btn mt-15" type="submit" name="admin">Admin</button>
			                                        	</td>
			                                        	<td>
			                                        		<button class="btn-search oneMusic-btn mt-15" type="submit" name="singer">Singer</button>
			                                        	</td>
			                                        	<td>
			                                        		<button class="btn-search oneMusic-btn mt-15" type="submit" name="customer">Customer</button>
			                                        	</td>
		                                        	</tr>
	                                        	</form>
	                                        </table>
	                                        <br>

                                        	<table style="color: white; width: 100%; ">
                                        		<tr>
                                        			<th>Name</th>
                                        			<th>Email</th>
                                        			<th>Category</th>
                                        		</tr>
                                        	<?php
                                                
                                                if (isset($_POST['admin'])) {
                                                	$sql="select * from user where type='Admin'";
                                                }
                                                elseif (isset($_POST['singer'])) {
                                                	$sql="select * from user where type='Singer'";
                                                }
                                                elseif (isset($_POST['customer'])) {
                                                	$sql="select * from user where type='Customer'";
                                                }
                                                elseif (isset($_POST['all'])) {
                                                	$sql="select * from user";
                                                }
                                                else{
                                                	$sql="select * from user";
                                                }

                                                $result=mysqli_query($con,$sql);

                                                if (mysqli_num_rows($result)>0) {
                                                    while ($row=mysqli_fetch_assoc($result)) {
                                                        $name=$row['name'];
                                                        $email=$row['email'];
                                                        $type=$row['type'];
                                                        $id=$row['id'];

                                                        echo "<tr>";
                                                        	echo "<td>$name</td>";
                                                        	echo "<td>$email</td>";
                                                        	echo "<td>$type</td>";

	                                                        echo "<td>";
	                                                            echo "<a href='delete_user.php?id=$id'><button class='btn-search oneMusic-btn mt-15' type='submit' name='del' onclick='hideAdd()'>Delete</button></a>";
	                                                        echo "</td>";

	                                                        echo "<td>";
	                                                            echo "<button class='btn-search oneMusic-btn mt-15' type='submit' name='upd'>Update</button>";
	                                                        echo "</td>";

                                                        echo "</tr>";
                                                    }
                                                }
                                        	?>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
	            </div>
	            <!-- Users -->

	        </div>
	    </div>
	</section>
</section>

<?php
    include "footer.php";
?>