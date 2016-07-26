<link href="<?php echo base_url(); ?>ASSETS/CUSTOM/css/signin.css" rel="stylesheet">

    <div class="container">

      <form class="form-signin" action="<?php echo base_url(); ?>" method="post">
        <h2 class="form-signin-heading text-muted" draggable="true">Authentication Page</h2>
        <label for="username" class="sr-only">Email address</label>
        <input id="username" name="username" class="form-control" placeholder="Email address" value="<?php if(isset($EmpName)){ echo $EmpName; } ?>" required autofocus="" type="email">
        <label for="password" class="sr-only">Password</label>
        <input id="password" name="password" class="form-control" value="<?php if(isset($EmpPswd)){ echo $EmpPswd; } ?>" placeholder="Password" required type="password">
        <button class="btn btn-lg btn-primary" center type="submit">Sign in</button>
        </div>
        
      </form>

    </div>