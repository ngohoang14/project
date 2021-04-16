<!-- load file layout chung --> 
<?php $this->layoutPath = "Layout.php" ?>
<div class="col-md-12">
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
            <div style="float: right; margin-bottom: 5px;">
                <a class="btn btn-success" href="index.php?controller=contact&action=update&id=<?php echo $data->id; ?>">EDIT</a>&nbsp;
                <a class="btn btn-danger" href="index.php?controller=contact&action=delete&id=<?php echo $data->id; ?>" onclick="return window.confirm('Bạn chắc chưa?');">DELETE</a>
            </div>
            <h6 class="card-title">Liên hệ</h6>
            <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Name</th>
                            <th><?php echo $data->name; ?></th>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <th><?php echo $data->address; ?></th>
                        </tr>
                        <tr>
                            <th>Hotline</th>
                            <th><?php echo $data->hotline; ?></th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th><?php echo $data->email; ?></th>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <th><?php echo $data->facebook; ?></th>
                        </tr>
                        <tr>
                            <th>Youtube</th>
                            <th><?php echo $data->youtube; ?></th>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <th><?php echo $data->instagram; ?></th>
                        </tr>
                    </table>
            </div>
</div>
</div>
</div>
</div>