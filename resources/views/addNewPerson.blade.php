@include('base.htmlHead')
@include('base.header')

<div style="width: 90%; margin: 2% auto;">
        <div style="border: 1.5px solid black; background: #e2e3e5; margin-bottom: 2%">
            <form action="{{ url('/edit-profiles') }}" style="margin: 1%">
                <h3>Personal information</h3>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" name="surname" class="form-control" id="surname">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="macAddress" class="form-label">MAC address</label>
                        <input type="text" name="macAddress" class="form-control" id="macAddress">
                    </div>
                    <h3>Add Rooms</h3>

                    <div class="row" id="row">
                        <div class="col-md-3 mb-3">
                            <label for="roomTitle1" class="form-label">Room title</label>
                            <input type="text" name="roomTitle" class="form-control" id="roomTitle1">
                        </div>
                    </div>
                    <a class="nav-link" type="button" onclick="myFunction()"
                       style="font-size: 24px; color: black"><span
                            class="material-icons">add_circle</span>Add new room</a>

                    <button type="submit" name="login" value="login" class="btn btn-primary btn-sm"
                            style="width: auto; margin-left: 1%">Save
                    </button>
                </div>
            </form>
        </div>
</div>
@include('base.htmlFoot')
<script>
    function myFunction(id) {
        document.getElementById("row").innerHTML += `
             <div class="col-md-3 mb-3">
                <label for="roomTitle" class="form-label">Room title</label>
                <input type="text" name="roomTitle" class="form-control" id="roomTitle">
            </div>
        `;
    }
</script>
