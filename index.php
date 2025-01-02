<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Ajoute
</button>

<!-- Modal -->
 <?php
 include "./Entities/User/Ajoute.php";
 ?>
<table class="table table-dark">
  <thead>
  </thead>
  <tbody>
    <tr class="table-active">
      <th>Name</th>
      <th>Last name</th>
      <th>email</th>
      <th>Phone</th>
      <th>Modify</th>
      <th>Delet</th>
    </tr>
    <?php
        $obj = new Gestion();
        foreach($obj->afficher() as $info){ ?>
    <tr>
        <td><?php echo $info['name']?></td>
        <td><?php echo $info['prenom']?></td>
        <td><?php echo $info['email']?></td>
        <td><?php echo $info['phone']?></td>
        <td><button type="button" class="btn btn-primary" onclick="modifymodal(<?php echo $info['id']?>)" data-bs-toggle="modal" data-bs-target="#exampleModal1">
M
</button></td>
        <td><form action="./Entities/User/Delet.php" method="post"><input type="hidden" name="userId" value="<?php echo $info['id']?>" id="">
    <input type="submit" name="submit" value="x"></form></td>
     
    </tr>
    <?php }?>
    
  </tbody>
</table>
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
    <form >
        <input type="text" name="name" id="name">
        <input type="text" name="prenom" id="lastname">
        <input type="text" name="email" id="email">
        <input type="text" name="phone" id="phone">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- first modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="./Entities/User/ADD.php" method="Post">
        <input type="text" name="name" id="">
        <input type="text" name="prenom" id="">
        <input type="text" name="email" id="">
        <input type="text" name="phone" id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function modifymodal(id){
    console.log(id);
    <?php
        $obj = new Gestion();
        foreach($obj->afficher() as $info){  ?>
        if (id == <?php echo  $info['id'] ?>){
          document.getElementById("name").value = "<?php echo $info['name']?>"; 
          document.getElementById("lastname").value = "<?php echo $info['prenom']?>"; 
          document.getElementById("email").value = "<?php echo $info['email']?>"; 
          document.getElementById("phone").value = "<?php echo $info['phone']?>"; 
        }
         <?php } ?>
  }
</script>
</body>
</html>