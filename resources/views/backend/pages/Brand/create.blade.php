@extends('backend.layout.template')

@section('body')

<form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Brand Name</label>
    <input type="text" class="form-control" name="brandName" placeholder="Enter Brand Name">
  </div>
  <div class="form-group">
    <label>Brand Description</label>
    <textarea class="form-control" name="brandDescription" rows="3" placeholder="Enter Brand Description"></textarea>
  </div>
  <div class="form-group">
    <label>Is Featured</label>
    <select class="form-control" name="isFeatured">
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select>
  </div>
  <div class="form-group">
    <label>Status</label>
    <select class="form-control" name="status">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>
  <!-- <div class="form-group">
    <label>Brand image / Logo</label>
    <input type="file" class="form-control-file" name="image">
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
