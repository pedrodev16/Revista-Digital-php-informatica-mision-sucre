<?php include_once "app/views/userViews/header.php"; ?>
  <!-- Responsive navbar-->

  <!-- Responsive navbar-->
  <?php require_once("app/views/userViews/componentes/nav.php") ?>
  <

 <div class="container px-4 px-lg-5 p-5" style="width: 50%;">

 <div class=" justify-content-center ">
                <h3 class="px-4 px-lg-5 text-center"> Login Administrador </h3>
                <form action='<?php echo constant('URL').
            'login/validate'?>' method='post' class="bg_red">
                    <div class="form-group">
                      
                          <input type="text" name="userLogin" 
                placeholder="Usuario admin" 
                class="form-control" required><br>
                
                <input type="password" name="passLogin" 
                placeholder="Password" 
                class="form-control" required><br>
                
                <input type="submit" name='sendLogin' 
                value="Entrar"
                class="btn btn-primary btn-block">
<br>
<br>
                </form>

        </div>
</div>
    
     

</div>
<?php include_once "app/views/userViews/footer.php"; ?>
   
  </body>
</html>