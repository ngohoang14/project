<ul class="list-unstyled level1">
      <?php 
            $categories = $this->modelListCategoriesHot();
       ?>
       <?php foreach($categories as $rows): ?>
            <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
       <?php endforeach; ?>
          </ul>