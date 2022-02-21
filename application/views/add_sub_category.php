     <!-- Pagination-->
     
      <div class="top-products-area">
        <div class="container">
        <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Category</h6><br>
          <form class="col-sm-6" method="post" action="save_sub_category" id="addSubCategoryForm">
                                <div class="form-group">
                                        <label>Category Name</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                          <option value="">--Select Category--</option>
                                          <?php
                                            foreach($category as $cat)
                                            {
                                          ?>
                                          <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name']; ?></option>
                                          <?php
                                            }
                                          ?>
                                        </select>
                                        <p class="error" id="error1">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Category Name</label>
                                        <input name="sub_category_name" id="sub_category_name" type="text" class="form-control">
                                        <p class="error" id="error2">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Category Description</label>
                                        <textarea name="sub_category_description" id="sub_category_description" class="form-control"></textarea>
                                        <p class="error" id="error3">&nbsp;</p>
                                    </div>
                                 <div class="">
                                     <input type="button" value="Save" class="btn btn-success" id="save" onClick="submitForm()">
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
          document.getElementById("addSubCategoryForm").submit();
        }
        </script>
     

      