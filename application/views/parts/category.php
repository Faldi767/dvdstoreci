            <div class="col-md-2">
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column">
                    <?php
                    foreach ($groups as $row) {
                     echo "<li class='nav-item'><a href'#'' class='nav-link'>".$row->cat_p_title."</a></li>";
                     
                  } ?>
                  </ul>
                </div>
              </div>
              <br>
            </div>