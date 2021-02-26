<div class="card mx-auto mt-5 wow fadeInUp" data-wow-delay="1000ms" style="width:30rem; box-shadow: 10px 10px 10px #dc143c;background-color:background: -webkit-linear-gradient(to right, #000000, #d00000);background: linear-gradient(to right, #000000, #000000); opacity: 0.8; display: none;" id="add">
    <div class="bradcumbContent">
        <h2 style="color:White;">Uploads</h2>
    </div>
    <section class="contact-area mt-20 section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-24 col-lg-12">
                    <div class="contact-content mb-100">
                        
                        <!-- <div class="contact-form-area"> -->
                            <form action="upload.php" method="POST" enctype="multipart/form-data">
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                         
                                <div class="form-group">
                                    <input type="text" class="form-control" name="artist" placeholder="Artist">
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" class="form-control" name="album" placeholder="Album">
                                </div>
                         
                                <div class="form-group">
                                    <input type="text" class="form-control" name="year" placeholder="Year">
                                </div>
            
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lang" placeholder="Language">
                                </div>
                           
                                <div class="form-group">
                                    <select name="type"  style="width:180px;height:30px;" class="text-dark">
                                        <option value="0" name="type">Select Category: </option>
                                        <?php

                                            $sql="select * from category";

                                            $result=mysqli_query($con,$sql);


                                            if (mysqli_num_rows($result)>0) {
                                                while ($row=mysqli_fetch_assoc($result)) {
                                                    echo "<option value=";
                                                        echo $row['id'];
                                                    echo " name='type'>";
                                                        echo $row['category'];
                                                    echo "</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="price" placeholder="Price">
                                </div>

                                <div class="form-group">
                                     <p>Audio: </p><input type="file" name="mp3">
                                </div>

                                <div class="form-group">
                                    <p>Cover Picture: </p><input type="file" name="img">
                                </div>

                                <button class="btn oneMusic-btn mt-15" type="submit" name="upload" onclick="hideAdd()">Upload</button>
                                <button class="btn oneMusic-btn mt-15" type="reset" name="reset">Clear</button>
                                 
                            </form>
                            
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>