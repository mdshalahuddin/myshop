<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>Myshop - Admin Dashboard HTML Template.</title>

    @include('backend.layouts.inc.style')

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="wrapper">

        @include('backend.layouts.inc.sidebar')

        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            @include('backend.layouts.inc.header')

            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    @yield('backend_content')

                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            @include('backend.layouts.inc.footer')

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->
    @include('backend.layouts.inc.script')
</body>

</html>
