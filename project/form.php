<form action="process_form.php" method="POST">
    <div class="card-body">
        <div class="form-group">
            <label for="inputNom">Nom</label>
            <input name="projectName" type="text" class="form-control" id="inputNom" placeholder="Enter project name">
        </div>

        <div class="form-group">
            <label for="inputDescription">Description</label>
            <input name="projectDescription" type="text" class="form-control" id="inputDescription" placeholder="Enter project description">
        </div>

        <div class="form-group">
            <label for="inputStartDate">Start Date</label>
            <input name="startDate" type="date" class="form-control" id="inputStartDate" placeholder="Select start date">
        </div>

        <div class="form-group">
            <label for="inputEndDate">End Date</label>
            <input name="endDate" type="date" class="form-control" id="inputEndDate" placeholder="Select end date">
        </div>
    </div>

    <div class="card-footer">
        <a href="./index.html" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>