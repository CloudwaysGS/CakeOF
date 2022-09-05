 <?= $this->Html->css('login') ?>
 <?= $this->Form->create('User', array('class' => 'card-body cardbody-color')); ?>
 <div class="row">
       <div class="col-md-6 offset-md-3 container-fluid">
             <h2 class="text-center text-dark mt-5">Modification</h2>

             <div class="card my-5">
                   <div class="text-center">
                         <img src="https://www.au-senegal.com/local/cache-gd2/d9/068b52749f47422ba622ac232f9210.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                   </div>
                         <div class="">
                               <?= $this->Form->input('prenom', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre prenom')); ?>
                         </div>
                         <div class="">
                               <?= $this->Form->input('nom', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre nom')); ?>
                         </div>
                   <div class="mb-3 mt-3">
                         <?= $this->Form->input('email', array('label' => '', 'class' => 'form-control ', 'placeholder' => 'Entrer votre Email')); ?>
                   </div>
                   
                   <div class="text-center">
                         <?= $this->Form->submit('Modifier', array('class' => 'btn-login btn btn-color p-3 mb-5 w-100')) ?>
                   </div>
                   
                   <?= $this->Form->end(); ?>
             </div>
       </div>
 </div>
