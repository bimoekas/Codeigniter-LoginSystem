<?php if ($this->session->hass_userdata('success')) { ?>
    <div class="alert alert-success" role="alert">
        <button type="submit" class="btn btn-primary btn-user btn-block" data-dismiss="alert">
            Register Account
        </button>
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php } ?>