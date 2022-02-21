<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h3 class="card-title text-center mb-3">Bilpro</h3>
            <h4 class="text-center mb-3">Registro de nuevo usuario</h4>
            <form action="<?= base_url('registro/nuevo-usuario'); ?>" method="post">
              <?php if($this->session->flashdata('status')): ?>
              <div class="form-group">
                 <?= $this->session->flashdata('status') ?>
              </div>
              <?php endif; ?>              
              <div class="form-group">
                <label>Nombre *</label>
                <input type="text" class="form-control p_input" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>" required>
                <span><?php echo form_error('nombre'); ?></span>
              </div>
              <div class="form-group">
                <label>Apellido *</label>
                <input type="text" class="form-control p_input" id="apellido" name="apellido" value="<?= set_value('apellido'); ?>" required>
                <span><?php echo form_error('appelido'); ?></span>
              </div>
              <div class="form-group">
                <label>Cargo</label>
                <input type="text" class="form-control p_input" id="cargo" name="cargo" value="<?= set_value('cargo'); ?>">
                <span><?php echo form_error('cargo'); ?></span>
              </div>
              <div class="form-group">
                <label>Correo *</label>
                <input type="text" class="form-control p_input" id="correo" name="correo" value="<?= set_value('correo'); ?>" required>
                <span><?php echo form_error('correo'); ?></span>
              </div>
              <div class="form-group">
                <label>Contraseña *</label>
                <input type="password" class="form-control p_input" id="pass" name="pass" value="<?= set_value('pass'); ?>" required>
                <span><?php echo form_error('pass'); ?></span>
              </div>
              <div class="form-group">
                <label>Repetir contraseña Contraseña *</label>
                <input type="password" class="form-control p_input" id="repeatPass" name="repeatPass" required>
                <span><?php echo form_error('repeatPass'); ?></span>
              </div> 
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Guardar Nuevo Usuario</button> 
              </div>  
              <p class="sign-up"><a href="<?= base_url('login'); ?>">volver al login</a></p>
            </form>
          </div>
        </div>
      </div> 
    </div> 
  </div> 
</div> 
    