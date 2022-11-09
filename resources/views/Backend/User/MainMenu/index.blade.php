@extends('Backend.Layouts.master')
@section('body')
<div class="content">
    <div class="pb-5">
        <div class="col-12 col-xxl-6">
            <div class="mb-8">
                <h4 class="mb-2">Create A Menu</h4>
            </div>

            <div class="form-section">
                <div class="form-title row">
                    <div class="col-6">
                        <h6>Menu Information</h6>
                    </div>
                    <div class="col-6" style="text-align: right">
                        <a href="{{route('main_menu.create')}}" class="btn btn-sm btn-success">+ Add New</a>
                    </div>
                </div>
                
                <div class="data-show p-3">
                    <div class="table-responsive">
                        <table class="mt-4 table table-hover table-bordered" id="myTable">
                            <thead class="pt-4">
                                <tr>
                                    <th>Sl</th>
                                    <th>Menu Name</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data)
                                @foreach ($data as $showdata)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$showdata->menu_name}}</td>
                                    <td>{{$showdata->icon_name}}</td>
                                    <td>
                                        @if($showdata->status == 1) 
                                        <div class="badge badge-success">Active</div>
                                        @else 
                                        <div class="badge badge-danger">Inactive</div>
                                         @endif
                                    </td>
                                    <td>
                                        <a style="float: left;" href="{{route('main_menu.edit',$showdata->id)}}" class="btn btn-info btn-sm"><span class="nav-link-icon"><span data-feather="edit"></span></span></a>
                                        <form action="{{route('main_menu.destroy',$showdata->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><span class="nav-link-icon"><span data-feather="trash"></span></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
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

@endsection
