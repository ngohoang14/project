<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary">
        <div class="panel-heading"><h4>Add edit Sevices</h4></div>
        <div class="panel-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>"> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Benefit</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->benefit) ? $record->benefit:''; ?>" name="benefit" class="form-control" required>
                </div>
            </div>
            <!-- end rows --> 
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Note</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->note) ? $record->note:''; ?>" name="note" class="form-control">
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