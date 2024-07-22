
@extends('layouts.master')
@section('title')

     @stop

     @section('css')

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.csss')}}">
<link rel="stylesheet" href="{{ asset('assets/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

@endsection

@section('title_page1')


@endsection

@section('title_page22')



@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">tests per case</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">location</th>
        <th scope="col">total_cases</th>
        <th scope="col">tests_per_case</th>

      </tr>

    </thead>
    <tbody>
      <tr>
        @foreach ($testsPerCase as $item )
        <th scope="">{{$item->location}}</th>
        <td>{{$item->total_cases}}</td>
        <td>{{$item->tests_per_case}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>


                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->

@endsection

@section('scripts')



@endsection



