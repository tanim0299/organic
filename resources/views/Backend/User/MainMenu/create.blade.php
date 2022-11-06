@extends('Backend.Layouts.master')
@section('body')
<div class="content">
    <div class="pb-5">
        <div class="col-12 col-xxl-6">
            <div class="mb-8">
                <h4 class="mb-2">Create A Menu</h4>
            </div>

            <div class="form-section">
                <div class="form-title">
                    <h6>Menu Information</h6>
                </div>
                
                <div class="form-body pb-5">
                    <form action="" method="POST" id="form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-single-box">
                                    <label class="form-label">Serial No</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input class="form-control" type="text" placeholder="EX:1" name="sl">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-single-box">
                                    <label class="form-label">Menu Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input class="form-control" type="text" placeholder="EX:1" name="menu_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-single-box">
                                    <label class="form-label">Icon Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input class="form-control" type="text" placeholder="EX:1" name="icon_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="input-single-box">
                                    <label class="form-label">Status</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <select class="form-select" name="status">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="submit-btn">
                                    <input type="submit" class="btn btn-success btn-sm col-4" value="SAVE" id="submit">
                                    <input type="button" class="btn btn-success btn-sm col-4" value="Loading...." id="loading">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

        </div>
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.5.0</p>
        </div>
      </div>
    </footer>
  </div>
</div>
</main><!-- ===============================================-->
<!--    End of Main Content-->
<script type="text/javascript">
   
    $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
 
     $('#loading').hide();
 
     
 </script>

@endsection
