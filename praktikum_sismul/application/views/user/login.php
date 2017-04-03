<main>
<div class="section no-pad-bot" id="index-banner">

    <div class="container">
       <div class="center">
             <h5>Login</h5>
            </div>
        <!-- start content -->
        <form method="post" action="<?php echo base_url('welcome/cek_login'); ?>" class="login col s12">
            
            
            <div class="input-field col s12 m12">
             <i class="material-icons prefix">account_circle</i>
             <input type="text" class="validate" name="username" required>
             <label for="icon_prefix">Username</label>
            </div>
            
            <div class="input-field col s12 m12">
             <i class="material-icons prefix">lock</i>
             <input type="password" class="validate" name="password" required>
             <label for="password">Password</label>
            </div>
            
            <div class="center">
             <input type="submit" class="waves-effect waves-light btn" value="LOGIN">   
            </div>
       </form>

       <br>
       <br>
    </div>
</div>
</main>