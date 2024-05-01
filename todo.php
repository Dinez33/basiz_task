<?php
    
    include('header.php');
?>
<style>
    .fw-bold{
  font-weight:800;
  font-size:20px;
}
.todo-task{
    border: 1px solid #4e73df;
    padding: 20px;
    margin: 20px;
    width: 50%;
}
.options i{
    margin: 10px 20px 10px 0;
}
#tasks{
    display: flex;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
</style>
<!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800">Students</h1> -->
</div>

<!-- Content Row -->
<div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Todo App</h6>
                    <button class="btn btn-primary btn-user btn-block add_field_button" id="addNew" data-bs-toggle="modal" data-bs-target="#form" style="width: auto;">Add New Task</button>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                <div id="tasks">

                </div>
                     
                </div>
            </div>
        </div>
    
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
    <form class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Task Title</p>
            <input type="text" class="form-control" name="" id="textInput">
            <div id="msg"></div>
            <br>
            <p>Description</p>
            <textarea name="" class="form-control" id="textarea" cols="30" rows="5"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="add" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
    </form>
                                        
<script src="assets/js/todo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<?php include('footer.php') ?>