<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
                    <div class="col-md-12">  
                    	<?php if(isset($_GET["notify"]) && $_GET["notify"] == "emailExists"): ?>
                    		<div class="alert alert-warning">Email đã tồn tại</div>
                    	<?php endif; ?>
                        
                            <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">ADD/EDIT USER</h6>
                                <form class="forms-sample" method="post" action="<?php echo $action; ?>">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Username</label>
                                        <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" value="<?php echo isset($record->email) ? $record->email : '' ?>" name="email" <?php if(isset($record->email)): ?> disabled <?php else: ?> required <?php endif; ?> class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" 
                                        <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này"
                                        <?php else: ?> required <?php endif; ?>>
                                    </div>
                                    <input type="submit" value="Process" class="btn btn-primary">
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>