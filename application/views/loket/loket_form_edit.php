<section class="content-header">
    <h1>
        Loket
        <small>Dinas kependudukan dan pencatatan sipil</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i> Loket</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
         <div class="box-header">
            <h3 class="box-title">Edit loket</h3>
            <div class="pull-right">
                <a href="<?=site_url('loket')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                            <label>Name *</label>
                            <input type="hidden" name="loket_id" value="<?=$row->loket_id?>.">
                            <input type="text" name="name" value="<?=$this->input->post('name') ?? $row->name?>" class="form-control">
                            <span class="help-block"><?=form_error('name')?></span>
                        </div>
                        <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                            <label>keterangan *</label>
                            <input type="text" name="keterangan" value="<?=$this->input->post('keterangan')?>" class="form-control">
                            <span class="help-block"><?=form_error('keterangan')?></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Save</button>
                            <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>