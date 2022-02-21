<div class="container-scroller"> 
        <?php $this->load->view('part/menu'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">          
        <?php $this->load->view('part/menu-top'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <?php $this->load->view('part/breadcrumb'); ?>
            <?php $this->load->view('part/mensaje-top'); ?>
            <!-- contenido -->
            <div class="row"><div class="col-lg-6 grid-margin"><div class="card"><div class="card-body">            
            <form action="<?= base_url('nuevo-proyecto/registro'); ?>" method="post">          
              <div class="form-group">
                <label>Nombre de proyecto *</label>
                <input type="text" class="form-control p_input" id="nombre" name="nombre" value="<?= set_value('nombre'); ?>">
                <span><?php echo form_error('nombre'); ?></span>
              </div>
              <div class="form-group">
                <label>Tipo de proyecto *</label>
                <select class="form-control" id="tipo" name="tipo">
                  <option>Acceda</option>
                  <option>Personalizado</option> 
                </select>
                <span><?php echo form_error('tipo'); ?></span>
              </div>
              <div class="form-group">
                <label>URL Administrador PRE</label>
                <input type="text" class="form-control p_input" id="url_admin_pre" name="url_admin_pre" value="<?= set_value('url_admin_pre'); ?>">
                <span><?php echo form_error('url_admin_pre'); ?></span>
              </div>
              <div class="form-group">
                <label>URL Administrador PRO</label>
                <input type="url" class="form-control p_input" id="url_admin_pro" name="url_admin_pro" value="<?= set_value('url_admin_pro'); ?>">
                <span><?php echo form_error('url_admin_pro'); ?></span>
              </div>
              <div class="form-group">
                <label>URL Usuario PRE</label>
                <input type="url" class="form-control p_input" id="url_user_pre" name="url_user_pre" value="<?= set_value('url_user_pre'); ?>">
                <span><?php echo form_error('url_user_pre'); ?></span>
              </div>
              <div class="form-group">
                <label>URL Usuario PRO</label>
                <input type="url" class="form-control p_input" id="url_user_pro" name="url_user_pro" value="<?= set_value('url_user_pro'); ?>">
                <span><?php echo form_error('url_user_pro'); ?></span>
              </div>
              <div class="form-group">
                <label>WS PRE</label>
                <input type="url" class="form-control p_input" id="ws_pre" name="ws_pre" value="<?= set_value('ws_pre'); ?>">
                <span><?php echo form_error('ws_pre'); ?></span>
              </div>
              <div class="form-group">
                <label>WS PRO</label>
                <input type="url" class="form-control p_input" id="ws_pro" name="ws_pro" value="<?= set_value('ws_pro'); ?>">
                <span><?php echo form_error('ws_pro'); ?></span>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Guardar Nuevo Procedimiento Acceda</button> 
              </div>   
            </form>
            </div></div></div></div>
            <!-- end contenido -->
          </div>
          <!-- content-wrapper ends -->
          <?php $this->load->view('part/footer-text'); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div> 