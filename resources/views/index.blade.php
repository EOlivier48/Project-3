@extends ('layout')

@section('content')
    <div class="container justify-content-center">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-info btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                People
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body text-center">
              <div class="container justify-content-center">
                <div class="list-group list-group-flush" id="peopleList">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container justify-content-center">
    <div class="collapse" id="detailsCollapse">
      <div class="card border-info text-white">
        <div class="card-header text-center bg-info">
          <h3>Details</h3>
        </div>
        <div class="card-body text-info" id="detailCard">
          Name: None</br>
          Favorite Food: N/A</br>
        </div>
      </div>
      <div class="card border-info">
        <div class="card-header text-center text-white bg-info">
          <h3>Visits</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered table-info col-6" id="visitTable">
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('footer')

    <script src="/js/script.js"></script>

@endsection
