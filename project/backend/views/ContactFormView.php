<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit Sevices</div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>"> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Địa chỉ</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->address) ? $record->address:''; ?>" name="address" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Hotline</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->hotline) ? $record->hotline:''; ?>" name="hotline" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->email) ? $record->email:''; ?>" name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Facebook</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->facebook) ? $record->facebook:''; ?>" name="facebook" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->       
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Youtube</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->youtube) ? $record->youtube:''; ?>" name="youtube" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->    
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Instagram</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->instagram) ? $record->instagram:''; ?>" name="insta" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>