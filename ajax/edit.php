<?php
 include('inc.php');
 $id=$_POST['id'];
 $sel="SELECT * FROM ajax_demo WHERE id='$id'";
 $rs=$con->query($sel);
 while($row=$rs->fetch_assoc()){?>
                   
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo  $row['id'];?>">
                      
                    <div class="mb-3 mt-3">
                    <label for="updname" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="updname" placeholder="Enter name" name="updname" value="<?php echo $row['name'];?>">
                    <div class="mb-3 mt-3">
                        <label for="updemail" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="updemail" placeholder="Enter email" name="updemail" value="<?php echo  $row['email'];?>" >
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="updpwd" class="form-label">Password:</label>
                    <input type="text" class="form-control" id="updpwd" placeholder="Enter password" name="updpwd" value="<?php echo  $row['pass'];?>" >
                    </div>
                
                    <button  class="btn btn-primary" id="update-button"  data-bs-dismiss="modal" aria-label="Close">Update</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>



<?php } ?>