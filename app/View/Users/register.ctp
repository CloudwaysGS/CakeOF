 <?= $this->Html->css('login') ?>
 <?= $this->Form->create('User', array('class' => 'card-body cardbody-color')); ?>
 <div class="row">
       <div class="col-md-6 offset-md-3 container-fluid">
             <h2 class="text-center text-dark mt-5">Registration form</h2>

             <div class="card my-5">
                   <div class="text-center">
                         <img src="https://www.au-senegal.com/local/cache-gd2/d9/068b52749f47422ba622ac232f9210.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                   </div>
                   <div class="row">
                         <div class="col-6">
                               <?= $this->Form->input('prenom', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre prenom')); ?>
                         </div>
                         <div class="col-6">
                               <?= $this->Form->input('nom', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre nom')); ?>
                         </div>
                   </div>
                   <div class="mb-3 mt-3">
                         <?= $this->Form->input('email', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre Email')); ?>
                   </div>
                   <div class="row mb-3">
                         <div class="col-6">
                               <?= $this->Form->input('password', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre Password')); ?>
                         </div>
                         <div class="col-6">
                               <?= $this->Form->input('password2', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Confirmer votre Password')); ?>
                         </div>
                   </div>
                   <div class="text-center">
                         <?= $this->Form->submit('register', array('class' => 'btn-login btn btn-color p-3 mb-5 w-100')) ?>
                   </div>
                   <div id="emailHelp" class="form-text text-center mb-5 text-dark">
                         <a href="login" class="text-dark fw-bold">connecter si vous avez un compte</a>
                   </div>
                   <?= $this->Form->end(); ?>
             </div>
       </div>
 </div>