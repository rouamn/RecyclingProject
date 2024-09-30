
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Recycle</title>
    <link rel="icon" href="{{ asset('img/logo/recycling.ico') }}" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">




</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars">zaazaz</i>
                    </button>

                    <!-- Topbar Search -->
                   @include('admin.topbar')
                <!-- End of Topbar -->

                <div class="container">
    <h1 class="my-4">Liste des Formations</h1>
    <a href="{{ route('formations.create') }}" class="btn btn-primary mb-3 btn-sm">Add Formation</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Date de Formation</th>
                <th>Durée</th>
                <th>Lieu</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formations as $formation)
                <tr>
                    <td>
                        <a href="{{ route('formations.show', $formation->id) }}">{{ $formation->name }}</a>
                    </td>
                    <td>{{ $formation->description }}</td>
                    <td>{{ $formation->date_formation }}</td>
                    <td>{{ $formation->duree }}</td>
                    <td>{{ $formation->lieu }}</td>
                    <td>
                        @if($formation->image)
                            <img src="{{ asset('storage/' . $formation->image) }}" alt="Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Actions">
                        <a href="{{ route('formations.show', $formation->id) }}" class="btn btn-info btn-sm action-btn">
                                <i class="fas fa-eye fa-xs icon-spacing"></i> 
                            </a>
                            <a href="{{ route('formations.edit', $formation->id) }}" class="btn btn-warning btn-sm action-btn">
                                <i class="fas fa-edit fa-xs icon-spacing"></i> 

                            </a>
                            <form action="{{ route('formations.destroy', $formation->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm action-btn" onclick="return confirm('Are you sure you want to delete this formation?');">

                                    <i class="fas fa-trash fa-xs icon-spacing"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

<!-- Footer -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('admin.logout')
<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>

</body>
</html>
