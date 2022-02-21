     <!-- Pagination-->
     
      <div class="top-products-area">
        <div class="container">
        <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Category</h6><br>
          <form class="col-sm-6" method="post" action="save_category" id="addCategoryForm">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input name="category_name" id="category_name" type="text" class="form-control">
                                        <p class="error" id="error1">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Description</label>
                                        <textarea name="category_description" id="category_description" class="form-control"></textarea>
                                        <p class="error" id="error2">&nbsp;</p>
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
          document.getElementById("addCategoryForm").submit();
        }
        </script>
     

      