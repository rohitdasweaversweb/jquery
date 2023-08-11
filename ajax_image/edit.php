<?php
 include('inc.php');
 $id=$_POST['id'];
 $sel="SELECT * FROM tbl_ajax_image WHERE id='$id'";
 $rs=$con->query($sel);
 while($row=$rs->fetch_assoc()){?>
                   
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo  $row['id'];?>">
                      
                    <div class="mb-3 mt-3">
                    <label for="updname" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row['name'];?>">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo  $row['email'];?>" >
                        </div>
                    </div>
                    
                    <div class="mb-3">
                    <label for="img" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="img" name="img">
                    <img src="pic/<?php echo $row['image'];?>" style="width: 100px; margin: 50px;">
                    </div>
                
                    <button  class="btn btn-primary" id="update-button"  data-bs-dismiss="modal" aria-label="Close">Update</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>



<?php } ?>