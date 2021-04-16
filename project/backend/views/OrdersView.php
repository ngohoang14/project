<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?> 
<div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Danh sách Orders</h6>
                <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Name</th>
                                    <th style="width: 150px;">Phone</th> 
                                    <th style="width: 100px;">Date</th>
                                    <th style="width: 100px;">Price</th>
                                    <th style="width: 150px;">Status</th>
                                    <th style="width: 100px;">Delivery</th>
                                </tr>
                            </thead>
                <?php foreach($listRecord as $rows): ?>
                <?php   
                    //lay ban ghi customer
                    $customer = $this->modelGetCustomers($rows->customer_id);
                 ?>
                <tbody>
                    <tr>
                     <td><?php echo $customer->name; ?></td> 
                     <td><?php echo $customer->phone; ?></td>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;">
                         <?php if($rows->status == 1): ?>
                            <span class="label label-primary">Đã giao hàng</span>
                         <?php else: ?>
                            <span class="label label-danger">Chưa giao hàng</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center;">
                        <a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>" class="btn btn-success">Chi tiết</a>
                        <?php if($rows->status == 0): ?>
                            <a href="index.php?controller=orders&action=delivery&id=<?php echo $rows->id; ?>" class="btn btn-danger">Giao hàng</a>
                         <?php endif; ?>
                     </td>
                 </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                    <?php for($i = 1;$i <= $numPage; $i++): ?>
                        <li><a class="page-link" href="index.php?controller=products&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endfor; ?>
                </ul>
                </nav>
        </div>
            </div>
        </div>
    </div>
    </div>