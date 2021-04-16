<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="card" style="padding: 20px;">
    <div class="panel panel-primary">
        <div class="panel-heading" style="margin-bottom: 10px;"><b>THÊM/SỬA DỊCH VỤ</b> </div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Tên dịch vụ</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Min Price</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($record->minprice) ? $record->minprice:''; ?>" min="0" name="minprice" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Max price</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($record->maxprice) ? $record->maxprice:''; ?>" min="0" name="maxprice" class="form-control">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Discount(%)</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($record->discount) ? $record->discount:''; ?>" name="discount" max="100" class="form-control" min="0">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Category</div>
                <div class="col-md-10">
                    <select name="sevicecategory_id" class="form-control" style="width:200px;">   
                    <?php 
                        $categories = $this->modelListCategory();
                     ?>                     
                     <?php foreach($categories as $rows): ?>
                        <option <?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Description</div>
                <div class="col-md-10">
                    <textarea name="description"><?php echo isset($record->description) ? $record->description:''; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("description");
                    </script>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="checkbox" <?php if(isset($record->hot) && $record->hot == 1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hot">Hot</label>
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
                <div class="col-md-2">Photo 1</div>
                <div class="col-md-10">
                    <input type="file" name="photo1">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo1) && $record->photo1 != "" && file_exists("../assets/upload/sevices/".$record->photo1)): ?>
                        <img src="../assets/upload/sevices/<?php echo $record->photo1; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo 2</div>
                <div class="col-md-10">
                    <input type="file" name="photo2">
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo2) && $record->photo2 != "" && file_exists("../assets/upload/sevices/".$record->photo2)): ?>
                        <img src="../assets/upload/sevices/<?php echo $record->photo2; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo 3</div>
                <div class="col-md-10">
                    <input type="file" name="photo3">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo3) && $record->photo3 != "" && file_exists("../assets/upload/sevices/".$record->photo3)): ?>
                        <img src="../assets/upload/sevices/<?php echo $record->photo3; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>
</div>