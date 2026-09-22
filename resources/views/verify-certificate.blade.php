<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>

    <!-- Header Section -->
    <header class="custom-header mb-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Left Logo -->
                <img src="{{ asset('assets/img/city-guilds-logo.jpg') }}" alt="Left Logo" class="logo-left">
                <!-- Red Vertical Line (Divider) -->
                <div class="header-divider"></div>
                <!-- Welcome Text -->
                <h2 class="header-title mb-0">Welcome to Digital Certificates</h2>
            </div>
            <!-- Right Logo -->
            <img src="{{ asset('assets/img/gems-logo.webp') }}" alt="Right Logo" class="logo-right">
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="container mb-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12">
                
                <!-- Success Message Alert -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Error Message Alert -->
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card main-card">
                    <div class="card-body p-4 p-md-5">
                        <div class="row g-5 align-items-start">
                            
                            <!-- Left Column: Form -->
                            <div class="col-lg-7">
                                <h2 class="page-title mb-3">Verify a City & Guilds certificate</h2>
                                <p class="description-text mb-4">
                                    To verify a certificate issued by City & Guilds Limited, or a Post Nominal certificate issued by The City & Guilds of London Institute (CGLI), please enter your name and enrollment number as they appear on your certificate.
                                </p>
                                <p class="description-text mb-4">
                                    Some older certificates may not include an authentication code. These may still be genuine. Please contact our customer support team if you need further assistance.
                                </p>

                                <!-- Form Action set to our route, method POST -->
                                <form action="{{ route('verify.submit') }}" method="POST">
                                    @csrf
                                    
                                    <div class="mb-4">
                                        <label for="studentName" class="form-label">Student Name:</label>
                                        <input type="text" class="form-control custom-input" id="studentName" name="studentName" value="{{ old('studentName') }}" placeholder="Enter student name" required>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="enrollmentNumber" class="form-label">Enrollment Number:</label>
                                        <input type="text" class="form-control custom-input" id="enrollmentNumber" name="enrollmentNumber" value="{{ old('enrollmentNumber') }}" placeholder="Enter enrollment number" required>
                                    </div>

                                    <button type="submit" class="btn btn-verify w-100 w-sm-auto mt-2">Verify</button>
                                </form>
                            </div>

                            <!-- Right Column: Info & Realistic Certificate Image -->
                            {{-- <div class="col-lg-5">
                                <div class="info-box">
                                    <h4 class="info-title mb-3">Authentication Code Position</h4>
                                    <p class="description-text mb-4" style="font-size: 0.85rem;">
                                        The following image highlights in blue where the authentication code can be found on a certificate.
                                    </p>
                                    
                                    <div class="certificate-mockup mt-3">
                                        <div class="cert-top-row">
                                            <div>Awarded 17 June 2014<br>
                                                <span class="cert-highlight-box">VPHL-KTP2-ACLB-SU7F-49WR</span>
                                            </div>
                                            <div class="text-end">
                                                1700GB/CFTS/00000/XXXXXX/X/01/100<br>
                                                550000000000
                                            </div>
                                        </div>

                                        <div class="signature-area">
                                            <div class="signature-block">
                                                <div class="signature-font">A. S.</div>
                                                <div class="signature-line"></div>
                                                <div class="signature-name">Byron Nicolaides</div>
                                                <div class="signature-title">Chair of City & Guilds Limited</div>
                                            </div>
                                            <div class="signature-block">
                                                <div class="signature-font">Emma Leary</div>
                                                <div class="signature-line"></div>
                                                <div class="signature-name">Emma Leary</div>
                                                <div class="signature-title">Responsible Officer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>