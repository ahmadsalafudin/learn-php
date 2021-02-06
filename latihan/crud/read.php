      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No Hp</th>
              <th>Alamat</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            $no = 0;
            $customers=$mysqli->query("SELECT * FROM customers");
            while($m=mysqli_fetch_array($customers)){
            $no++;    
          ?>  

          <?php 
            include"paging.php";
            $p   = new paging_customers;
            $batas  = 5;
            $posisi = $p->cariPosisi($batas);
            $customers=$mysqli->query("SELECT * FROM customers 
            ORDER BY id_c DESC LIMIT  $posisi,$batas");
            $no=0;
            while($m=mysqli_fetch_array($customers)){   
            $no++;
          ?>

            <tr>
              <th scope="row"><?php echo $no;?></th>
              <td><?php echo $m['nama']; ?></td>
              <td><?php echo $m['email']; ?></td>
              <td><?php echo $m['nohp']; ?></td>
              <td><?php echo $m['alamat']; ?></td>
              <td><img src="images/<?php echo $m['gambar'];?>" height="50"></td>
              <td>
               <a href="index.php?page=edit&id=<?php echo $m['id_c'];?>"><i class="fa fa-pencil"></i></a> | 
               <a href="index.php?page=delete&id=<?php echo $m['id_c'];?>"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>

            <?php } ?>
            
          </tbody>
        </table>

      <div class="halaman">
        <nav aria-label="...">
          <ul class="pagination">

          <?php } ?>
          <?php 
              $jmldata     = mysqli_num_rows($mysqli->query("SELECT * FROM customers"));
              $jmlhalaman  = $p->jmlHalaman($jmldata, $batas);
              $linkHalaman = $p->navHalaman($_GET['home'], $jmlhalaman);
              echo " <li  class='page-item'> $linkHalaman </li>"; 
          ?>
          
          </ul>
        </nav>
      </div>