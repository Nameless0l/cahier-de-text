<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Calendrier | Université de Bertoua</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Université de Bertoua" name="description" />
        <meta content="TOGETTECH" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo.svg">

        <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <!-- ========== Top header Start ========== --> 
            
            <!-- Top header End -->

            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

             
                    <div class="container-fluid">

                        <!-- start page title -->
 
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                               
                                <div class="row">
                                   
                                                <div id="external-events" class="mt-2">
                                                    
                                                </div>
                                     <!-- end col-->

                                    <div class="col-xl-9 col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                </div>
                                <!-- end row -->

                                <div style='clear:both'></div>

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0">
                                                <h5 class="modal-title" id="modal-title">Événement</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nom de l'événement</label>
                                                                <input class="form-control" placeholder="Insert Event Name"
                                                                    type="text" name="title" id="event-title" required value="" />
                                                                <div class="invalid-feedback">Veuillez fournir un nom d'événement valide</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                        
                                                                <label class="form-label">Catégorie</label>
                                                                <select class="form-control form-select" name="category" id="event-category">
                                                                    <option  selected> --Select-- </option>
                                                                    <option value="bg-danger">Danger</option>
                                                                    <option value="bg-success">Success</option>
                                                                    <option value="bg-primary">Primary</option>
                                                                    <option value="bg-info">Info</option>
                                                                    <option value="bg-dark">Dark</option>
                                                                    <option value="bg-warning">Warning</option>
                                                            
                                                                </select>
                                             
                                                                <div class="invalid-feedback">Veuillez sélectionner une catégorie d'événement valide</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Effacer</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Sauvegarder</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->

                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->
               
                <!-- End Page-content -->

                <!-- Footer Start -->
               
                <!-- Footer End -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
       
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <script src="assets/libs/%40fullcalendar/core/main.min.js"></script>
        <script src="assets/libs/%40fullcalendar/bootstrap/main.min.js"></script>
        <script src="assets/libs/%40fullcalendar/daygrid/main.min.js"></script>
        <script src="assets/libs/%40fullcalendar/timegrid/main.min.js"></script>
        <script src="assets/libs/%40fullcalendar/interaction/main.min.js"></script>

        <!-- Calendar init -->
        <script src="assets/js/pages/calendar.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/minia/layouts/apps-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 00:33:07 GMT -->
</html>
