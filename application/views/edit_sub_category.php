     <!-- Pagination-->
     <?php
     $category_id = "";
     $sub_category_name="";
     $sub_category_description="";
     $sub_category_id="";
     foreach($sub_category as $cat)
     {
        $category_id = $cat['category_id'];
        $sub_category_name=$cat['sub_category_name'];
        $sub_category_description=$cat['sub_category_description'];
        $sub_category_id=$cat['sub_category_id'];
     }
     ?>
      <div class="top-products-area">
        <div class="container">
        <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Sub Category</h6><br>
          <form class="col-sm-6" method="post" action="<?php echo base_url(); ?>update_sub_category" id="editSubCategoryForm">
                                      <div class="form-group">
                                        <label>Category Name</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                          <option value="">--Select Category--</option>
                                          <?php
                                            foreach($category as $cat)
                                            {
                                          ?>
                                          <option value="<?php echo $cat['category_id']; ?>" <?php if($category_id==$cat['category_id']) echo "Selected"; ?>><?php echo $cat['category_name']; ?></option>
                                          <?php
                                            }
                                          ?>
                                        </select>
                                        <p class="error" id="error1">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>sub_category Name</label>
                                        <input name="sub_category_name" id="sub_category_name" type="text"  value="<?php echo $sub_category_name; ?>" class="form-control">
                                        <p class="error" id="error1">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>sub_category Description</label>
                                        <textarea name="sub_category_description" id="sub_category_description" class="form-control"><?php echo $sub_category_description; ?></textarea>
                                        <p class="error" id="error2">&nbsp;</p>
                                    </div>
                                 <div class="">
                                    <input type="hidden" value="<?php echo $sub_category_id; ?>" name="sub_category_id">
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
          category_id =  document.getElementById("category_id").value;
          sub_category_name =  document.getElementById("sub_category_name").value;
          if(category_id=="")
          {
            document.getElementById("error1").innerHTML="Select Category Name";
            return;
          }
          else
          {
            document.getElementById("error1").innerHTML="";
          }
          if(sub_category_name=="")
          {
            document.getElementById("error2").innerHTML="Enter Sub Category Name";
            return;
          }
          else
          {
            document.getElementById("error2").innerHTML="";
          }
          document.getElementById("editSubCategoryForm").submit();
        }
        </script>
     

      