 <?php
    include '../../include/selectDb.php';
    ?>




 <?php
    if (mysqli_num_rows($resultAdminList) > 0) {
        while ($row = $resultAdminList->fetch_assoc()) {
    ?>
         <tr>

             <th class="user_id" scope="row"><?php echo $row['admin_id']; ?></th>

             <td><?php echo $row['full_name']; ?></td>

             <td><?php echo $row['contact_number']; ?></td>
             <td><?php echo $row['address']; ?></td>
             <td><?php echo $row['email']; ?></td>
             <td class="hidden-cell"><?php echo $row['last_name']; ?></td>
             <td class="hidden-cell"><?php echo $row['first_name']; ?></td>
             <td class="hidden-cell"><?php echo $row['middle_name']; ?></td>
             <td>
                 <a class="editButton btn btn-sm btn-primary " data-id="<?php echo $row['admin_id']; ?>">Edit</a>
                 <a class=" btn btn-sm btn-danger" href="" onclick="submitData('<?php echo $row['admin_id']; ?>')">Delete</a>
                 <a class="resetPassword btn btn-sm btn-dark" data-id="<?php echo $row['admin_id']; ?>" href="">Reset Password</a>
             </td>
         </tr>
     <?php
        }
    } else {
        ?>
     <tr>
         <td colspan="7">No data available</td>
     </tr>

 <?php
    }
    ?>