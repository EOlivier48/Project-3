<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Trip Tracker</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#">Add A New</a>
      </li>
      <form class="form-inline">
        <div class="btn-group-vertical">
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#newVisitModal">
            Visit
          </button>
          <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#newPersonModal">
            Person
          </button>
        </div>
      </form>
    </ul>
  </div>
</nav>

<div class="modal fade" id="newPersonModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newPersonModalLabel">Add A New Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="firstName" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" id="personModalFN" required>
          </div>
          <div class="form-group">
            <label for="lastName" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" id="personModalLN" required>
          </div>
          <div class="form-group">
            <label for="favoriteFood" class="col-form-label">Favorite Food:</label>
            <input type="text" class="form-control" id="personModalFF" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info" id="createNewPerson">Add Person</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="newVisitModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newVisitModalLabel">Add A New Visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="visitModalPerson" class="col-form-label">Person:</label>
            <select class="custom-select" id="visitModalPerson">
              <option selected>Select A Person</option>
            </select>
          </div>
          <div class="form-group">
            <label for="visitModalState" class="col-form-label">State:</label>
            <select class="custom-select" id="visitModalState">
              <option selected>Select A State</option>
            </select>
          </div>
          <div class="form-group">
            <label for="visitModalDate" class="col-form-label">Date Visited:</label>
            <input type="date" class="form-control" id="visitModalDate">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info" id="createNewVisit">Add Visit</button>
      </div>
    </div>
  </div>
</div>
