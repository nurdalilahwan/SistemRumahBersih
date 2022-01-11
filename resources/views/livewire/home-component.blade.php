<div>
    <x-content title="Dashboard">
      <x-slot name="breadcrumb">
          <li class="breadcrumb-item active">{{__('Laman Utama')}}</li>
      </x-slot>


      <div class="row">
          <section class="col-lg-7">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">
                    <i class="ion ion-clipboard mr-1"></i>
                    To Do List
                  </h3>

                  <div class="card-tools">
                    <ul class="pagination pagination-sm">
                      <li class="page-item"><a href="#" class="page-link">«</a></li>
                      <li class="page-item"><a href="#" class="page-link">1</a></li>
                      <li class="page-item"><a href="#" class="page-link">2</a></li>
                      <li class="page-item"><a href="#" class="page-link">3</a></li>
                      <li class="page-item"><a href="#" class="page-link">»</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="todo-list ui-sortable" data-widget="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                        <label for="todoCheck1"></label>
                      </div>
                      <!-- todo text -->
                      <span class="text">Design a nice theme</span>
                      <!-- Emphasis label -->
                      <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li class="done">
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                        <label for="todoCheck2"></label>
                      </div>
                      <span class="text">Make the theme responsive</span>
                      <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo3" id="todoCheck3">
                        <label for="todoCheck3"></label>
                      </div>
                      <span class="text">Let theme shine like a star</span>
                      <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo4" id="todoCheck4">
                        <label for="todoCheck4"></label>
                      </div>
                      <span class="text">Let theme shine like a star</span>
                      <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo5" id="todoCheck5">
                        <label for="todoCheck5"></label>
                      </div>
                      <span class="text">Check your messages and notifications</span>
                      <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fas fa-ellipsis-v"></i>
                        <i class="fas fa-ellipsis-v"></i>
                      </span>
                      <div class="icheck-primary d-inline ml-2">
                        <input type="checkbox" value="" name="todo6" id="todoCheck6">
                        <label for="todoCheck6"></label>
                      </div>
                      <span class="text">Let theme shine like a star</span>
                      <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                      <div class="tools">
                        <i class="fas fa-edit"></i>
                        <i class="fas fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                </div>
              </div>
          </section>
          <section class="col-lg-5">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-warning">
                  <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Inventory</span>
                    <span class="info-box-number">5,200</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-success">
                  <span class="info-box-icon"><i class="far fa-heart"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Mentions</span>
                    <span class="info-box-number">92,050</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-danger">
                  <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Downloads</span>
                    <span class="info-box-number">114,381</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="far fa-comment"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Direct Messages</span>
                    <span class="info-box-number">163,921</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
          </section>
      </div>
  </x-content>
  </div>
