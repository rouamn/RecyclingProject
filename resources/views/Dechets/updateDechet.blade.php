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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
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
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    @include('admin.topbar')
                    <!-- End of Topbar -->

                </nav>
                <!-- End of Topbar -->

                <!-- Page Content -->
                <div class="container mt-5">
                    <h1 class="mb-4 text-center">Update Déchet</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ url('/updateDechet', $dechet->id) }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <!-- Centre Name -->
                                <div class="form-group">
                                    <label for="nom">Nom du Déchet</label>
                                    <input type="text" class="form-control" id="nom" name="categorie" value="{{ $dechet->categorie }}" >
                                    @error('categorie')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>

                                <!-- Quantity -->
                                <div class="form-group">
                                    <label for="quantite">Quantité</label>
                                    <input type="number" class="form-control" id="quantite" name="quantite" value="{{ $dechet->quantite }}" >
                                    @error('quantite')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>

                                <!-- Centre Recyclage ID -->
                                <div class="form-group">
                                    <label for="centre_recyclage_id">Centre de Recyclage</label>
                                    <select class="form-control" id="centre_recyclage_id" name="centre_recyclage_id" required>
                                        <option value="">Sélectionnez un Centre</option>
                                        @foreach ($centres as $centre)
                                            <option value="{{ $centre->id }}" {{ $centre->id == $dechet->centre_recyclage_id ? 'selected' : '' }}>
                                                {{ $centre->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('centre_recyclage_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary btn-block">Update Déchet</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->

            <!-- Footer -->
            @include('admin.footer')
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
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
</body>
        