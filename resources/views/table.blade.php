@extends('layout')
@section('content')
 <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
          <h3 class="animated fadeInLeft">News Tables</h3>
          <p class="animated fadeInDown">
            Table <span class="fa-angle-right fa"></span> Data Tables
          </p>
      </div>
    </div>
</div>
<div class="col-md-12 top-20 padding-0">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>News Tables</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Title</th>
            <th>News</th>
            <th>image</th>
            <th>Add on</th>
            <th>Status</th>
            <th class="text-center" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>The untold story</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quod eos! Ut tenetur sunt iste sit repellendus minima, facere quia, aspernatur accusamus repudiandae saepe ipsam maxime,</td>
            <td>image</td>
            <td>2011/04/25</td>
            <td>DeActive</td>
            <td><button class="btn btn-success btn-sm" style="width: 100%">Active</button></td>
            <td><button class="btn btn-danger btn-sm" style="width: 100%">Delete</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>The untold story</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quod eos! Ut tenetur sunt iste sit repellendus minima, facere quia, aspernatur accusamus repudiandae saepe ipsam maxime,</td>
            <td>image</td>
            <td>2011/04/25</td>
            <td>Active</td>
            <td><button class="btn btn-success btn-sm" style="width: 100%">Deactive</button></td>
            <td><button class="btn btn-danger btn-sm" style="width: 100%">Delete</button></td>
          </tr>
        </tbody>
          </table>
        </div>
    </div>
  </div>
</div>  
</div>
@endsection