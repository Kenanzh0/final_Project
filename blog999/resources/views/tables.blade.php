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
                  <h3 class="card-title">DataTable</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">continent</th>
        <th scope="col">location</th>
        <th scope="col">date</th>
        <th scope="col">total_cases</th>
        <th scope="col">new_cases</th>
        <th scope="col">total_deaths</th>
        <th scope="col">new_deaths</th>
        <th scope="col">reproduction_rate</th>
        <th scope="col">icu_patients</th>
        <th scope="col">hosp_patients</th>
        <th scope="col">weekly_icu_admissions</th>
        <th scope="col">weekly_hosp_admissions</th>
        <th scope="col">total_tests</th>
        <th scope="col">new_tests</th>
        <th scope="col">tests_per_case</th>
        <th scope="col">total_vaccinations</th>
        <th scope="col">people_vaccinated</th>
        <th scope="col">people_fully_vaccinated</th>
        <th scope="col">population_density</th>
        <th scope="col">aged_65_older</th>
        <th scope="col">aged_70_older</th>
        <th scope="col">female_smokers</th>
        <th scope="col">male_smokers</th>
        <th scope="col">population</th>
        <th scope="col">excess_mortality</th>
      </tr>

    </thead>
    <tbody>
      <tr>
        @foreach ($users as $item )
        <th scope="">{{$item->iso_code}}</th>
        <td>{{$item->continent}}</td>
        <td>{{$item->location}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->total_cases}}</td>
        <td>{{$item->new_cases}}</td>
        <td>{{$item->total_deaths}}</td>
        <td>{{$item->new_deaths}}</td>
        <td>{{$item->reproduction_rate}}</td>
        <td>{{$item->icu_patients}}</td>
        <td>{{$item->hosp_patients}}</td>
        <td>{{$item->weekly_icu_admissions}}</td>
        <td>{{$item->weekly_hosp_admissions}}</td>
        <td>{{$item->total_tests}}</td>
        <td>{{$item->new_tests}}</td>
        <td>{{$item->tests_per_case}}</td>
        <td>{{$item->total_vaccinations}}</td>
        <td>{{$item->people_vaccinated}}</td>
        <td>{{$item->people_fully_vaccinated}}</td>
        <td>{{$item->population_density}}</td>
        <td>{{$item->aged_65_older}}</td>
        <td>{{$item->aged_70_older}}</td>
        <td>{{$item->female_smokers}}</td>
        <td>{{$item->male_smokers}}</td>
        <td>{{$item->population}}</td>
        <td>{{$item->excess_mortality}}</td>
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


