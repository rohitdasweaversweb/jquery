<table class="table table-hover">
    <thead>
      <tr>
        <th>sl.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Actions</th>

      </tr>
    </thead>
    <?php
        include('inc.php');
        $sel="SELECT * FROM tbl_ajax_image";
        $rs=$con->query($sel);
        $num=1;
        if(mysqli_num_rows($rs)>0){
        while($row=$rs->fetch_assoc()){?>
    <tbody>
      <tr>
      <td><?php echo $num ;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><img src="pic/<?php echo $row['image'];?>" style="width: 100px;"></td>
        <td>
            <button class="btn btn-danger" onclick="delData(<?php echo $row['id'];?>)">Delete</button>
            <button class="btn btn-warning edit"  data-id="<?php echo $row['id'];?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Modify</button>

        </td>
      </tr>
    </tbody>
    <?php $num++; } } else{ ?>
        <th>
        <tr><td colspan=3 class="text-center">No Data Found</td></tr>
        </th>
      <?php } ?>
  </table>


