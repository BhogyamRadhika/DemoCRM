
    <div class="container mt-5">
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <h2>Leads List</h2>
            </div>
            <div class="col-md-6 text-md-right">
                <input type="text" class="form-control d-inline-block w-50" placeholder="Search...">
                <button class="btn btn-primary ml-2">New Lead</button>
            </div>
        </div>
        
        <table class="table table-bordered">
            <thead class="table-header">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>(555) 555-5555</td>
                    <td>Active</td>
                    <td>2024-10-01</td>
                    <td><button class="btn btn-sm btn-info">Edit</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>(555) 555-1234</td>
                    <td>Inactive</td>
                    <td>2024-10-02</td>
                    <td><button class="btn btn-sm btn-info">Edit</button></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>


    <style>
        .table-header {
            background-color: #f1f1f1; /* Simple gray color for the header */
        }
    </style>