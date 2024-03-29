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
                <div class="col-md-2">Danh mục cha</div>
                <div class="col-md-10">
                    <select name="parent_id" style="width: 200px;" class="form-control">
                        <option value="0"></option>
                        <?php
                            $sevicescategories = $this->modelListSevicesCategories($record->id!= null ? $record->id : 0);
                         ?>
                         <?php foreach($sevicescategories as $rows): ?>
                            <option <?php if(isset($record->parent_id) && $record->parent_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/sevices/".$record->photo)): ?>
                        <img src="../assets/upload/sevices/<?php echo $record->photo; ?>" style="width:100px;">
                    <?php endif; ?>
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