<div class="container">
    <div class="card shadow">
        <form name="userFrom" action="index.php?controller=ExampleController&action=createAction" method="POST">
            <div class="card-body">
                <div class="form-group row">
                    <label for="attribute" class="form-control-label col-6">Attribute</label>
                    <div class="col-6">
                        <input type="text" name="attribute" title="attribute" value="">
                    </div>
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" name="action" value="speichern" class="saveButton">Save</button>
                <a href="index.php?controller=ExampleController&action=indexAction" class="cancelButton">Cancel</a>
            </div>
        </form>
    </div>
</div>
