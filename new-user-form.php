<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <h2 class="text-muted text-uppercase">add new user</h2>
        <p class="text-muted">Create a brand new user and add them to this site.</p>
        <form class="my-5">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Username <i> (required) </i></b> </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Email <i> (required) </i> </b></label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> First Name </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Last Name </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Website </b></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Password </b></label>
                <div class="col-sm-6">
                    <input type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Send User Notification </b></label>
                <div class="col-sm-6">
                    <input type="checkbox" class="form-control"><span>Send the new user an email about their
                        account.</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><b> Role </b></label>
                <div class="col-sm-2">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option value="1" selected>Customer</option>
                        <option value="2">Shop Manager</option>
                        <option value="3">Subscriber</option>
                        <option value="4">Contributor</option>
                        <option value="5">Author</option>
                        <option value="6">Editor</option>
                        <option value="7">Administrator</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">
                    <button type="button" class="btn btn-primary">Add New User</button>
                </label>
            </div>
        </form>
    </div>
</div>
<!-- END CONTAINER -->