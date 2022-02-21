     <!-- Pagination-->
     <?php
     $category_name="";
     $category_description="";
     $category_id="";
     foreach($category as $cat)
     {
        $category_name=$cat['category_name'];
        $category_description=$cat['category_description'];
        $category_id=$cat['category_id'];
     }
     ?>
      <div class="top-products-area">
        <div class="container">
        <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Category</h6><br>
          <form class="col-sm-6" method="post" action="<?php echo base_url(); ?>update_category" id="editCategoryForm">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input name="category_name" id="category_name" type="text"  value="<?php echo $category_name; ?>" class="form-control">
                                        <p class="error" id="error1">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <textarea name="category_description" id="category_description" class="form-control"><?php echo $category_description; ?></textarea>
                                        <p class="error" id="error2">&nbsp;</p>
                                    </div>
                                 <div class="">
                                    <input type="hidden" value="<?php echo $category_id; ?>" name="category_id">
                                     <input type="button" value="Update" class="btn btn-success" id="save" onClick="submitForm()">
                                 </div>
                             </form>
        </div>
      </div>
    </div>
  </div>
        </div>
      </div>
      <script>
        function submitForm()
        {
          category_name =  document.getElementById("category_name").value;
          if(category_name=="")
          {
            document.getElementById("error1").innerHTML="Enter Category Name";
            return;
          }
          else
          {
            document.getElementById("error1").innerHTML="";
          }
          document.getElementById("editCategoryForm").submit();
        }
        </script>
     

      