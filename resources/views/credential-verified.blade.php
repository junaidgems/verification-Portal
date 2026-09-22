<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body class="bg-light">

    @php
        $cert = session('verified_certificate');
    @endphp

    
    <div class="success-banner text-center">
        <h4 class="mb-1 fw-bold">Verified Successfully</h4>
        <p class="mb-0 small opacity-75">This credential has been successfully verified.</p>
    </div>

    <!-- MAIN CONTENT  -->
    <main class="container py-5">

        <!-- PAGE HEADER  -->
        <div class="mb-4">
            <span class="badge verify-badge mb-3">
                <i class="bi bi-patch-check-fill me-1"></i> Verified Credential
            </span>
            <h1 class="fw-bold text-dark mb-2 page-main-title">
                GEMS Pathways City &amp; Guilds Accredited Training Programme
            </h1>
            <p class="text-muted fs-6 mb-0">
                by GEMS Pathways City &amp; Guilds Accredited Scheme
            </p>
        </div>

        <!-- HERO DARK CARD (RED ACCENTS) -->
        <div class="hero-card mb-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-4">
                    <p class="text-white-50 mb-1 small text-uppercase" style="letter-spacing: 1px;">Issued To</p>
                    <h2 class="fw-bold mb-0">{{ $cert->student_name }}</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3">
                        <!-- Protected -->
                        <div class="col-md-4 d-flex align-items-center gap-3">
                            <div class="hero-icon"><i class="bi bi-shield-lock-fill"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Protected</h6>
                                <small class="text-white-50">Securely stored</small>
                            </div>
                        </div>
                        <!-- Tamper Proof -->
                        <div class="col-md-4 d-flex align-items-center gap-3">
                            <div class="hero-icon"><i class="bi bi-lock-fill"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Tamper Proof</h6>
                                <small class="text-white-50">Unaltered &amp; authentic</small>
                            </div>
                        </div>
                        <!-- Status -->
                        <div class="col-md-4 d-flex align-items-center gap-3">
                            <div class="hero-icon"><i class="bi bi-check-circle-fill"></i></div>
                            <div>
                                <h6 class="fw-bold mb-0">Status</h6>
                                <small class="text-success fw-bold">
                                    <span class="status-dot"></span> Active
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  MAIN GRID  -->
        <div class="row g-4 align-items-start">

            <!--  LEFT COLUMN  -->
            <div class="col-lg-8">

                <!-- About -->
                <div class="info-card mb-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="icon-box"><i class="bi bi-info-circle"></i></div>
                        <h4 class="fw-bold mb-0">About</h4>
                    </div>
                    <p class="text-muted mb-0 about-text">
                        A <strong>City &amp; Guilds accredited certificate</strong> signifies that the holder has successfully demonstrated a high standard of <strong>skills and competence</strong> in the subject area. This achievement is validated by the successful completion and passing of <strong>all set external assessments</strong>, confirming that the individual has met the rigorous standards required. <strong>Competency</strong> is the ability to perform a job or task successfully, effectively, and to an expected standard. It encompasses the combination of <strong>knowledge, skills, and attitudes (or behaviours)</strong> necessary to execute responsibilities and achieve desired outcomes in a specific role or context.
                    </p>
                </div>

                <!-- Acquired Skills -->
                <div class="info-card mb-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="icon-box"><i class="bi bi-mortarboard"></i></div>
                        <h4 class="fw-bold mb-0">Acquired Skills / Knowledge</h4>
                    </div>
                    <p class="text-muted small mb-3">A showcase of the key skills and technologies learned and applied.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="skill-tag">Teamworking</span>
                        <span class="skill-tag">English Language</span>
                        <span class="skill-tag">Relevant Knowledge</span>
                        <span class="skill-tag">Relevant Skills and Relevant Behaviours</span>
                    </div>
                </div>

                <!-- Earning Criteria -->
                <div class="info-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="icon-box"><i class="bi bi-journal-check"></i></div>
                        <h4 class="fw-bold mb-0">Earning Criteria</h4>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-muted">
                        <i class="bi bi-check-circle-fill text-danger"></i>
                        <span>Passed all the set assessments successfully.</span>
                    </div>
                </div>
            </div>

            <!--  RIGHT COLUMN  -->
            <div class="col-lg-4">

                <!-- Credential Verification -->
                <div class="info-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="icon-box"><i class="bi bi-shield-check"></i></div>
                        <h4 class="fw-bold mb-0">Credential Verification</h4>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-person text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Student Name:</span>
                            <strong>{{ $cert->student_name }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-building text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Issued by (Institute):</span>
                            <strong>{{ $cert->institute_name ?? 'N/A' }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-book text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Programme:</span>
                            <strong>{{ $cert->programme_name ?? 'N/A' }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-person-badge text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Enrollment Number:</span>
                            <strong>{{ $cert->enrollment_number }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-calendar-check text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Completion Date:</span>
                            <strong>{{ $cert->completion_date ?? 'N/A' }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-people text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Batch:</span>
                            <strong>{{ $cert->batch ?? 'N/A' }}</strong>
                        </div>
                    </div>

                    <div class="verify-list-item">
                        <i class="bi bi-info-circle text-danger"></i>
                        <div>
                            <span class="text-muted d-block small">Status:</span>
                            <strong class="text-success"><span class="status-dot"></span> Active</strong>
                        </div>
                    </div>

                    <button class="btn btn-danger w-100 mt-3 fw-bold py-2 verify-btn-red">
                        <i class="bi bi-shield-check me-2"></i> Verified by City&guilds, GEMS 
                    </button>
                </div>
            </div>
        </div>

        <!--  BOTTOM BANNER -->
        <div class="bottom-banner mt-5">
            <div class="d-flex align-items-center gap-3 flex-grow-1">
                <div class="icon-box-red"><i class="bi bi-shield-check"></i></div>
                <div>
                    <h5 class="fw-bold mb-1">Trusted. Verifiable. Tamper Proof.</h5>
                    <p class="text-muted mb-0 small">GEMS credentials are trusted by learners and verified by anyone, anywhere in the world.</p>
                </div>
            </div>
        </div>

    </main>

    <!--  CONFETTI LIBRARY  -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>

    <!-- CONFETTI TRIGGER -->
    <script>
        window.addEventListener('load', function () {
            // Ek default burst
            confetti({
                particleCount: 120,
                spread: 90,
                origin: { y: 0.3 },
                colors: ['#e31837', '#c4122b', '#ff4d6d', '#ffffff', '#0f172a']
            });

            // Thoda delay ke baad side cannons
            setTimeout(function () {
                confetti({
                    particleCount: 80,
                    angle: 60,
                    spread: 70,
                    origin: { x: 0, y: 0.6 },
                    colors: ['#e31837', '#ff4d6d', '#ffffff']
                });
                confetti({
                    particleCount: 80,
                    angle: 120,
                    spread: 70,
                    origin: { x: 1, y: 0.6 },
                    colors: ['#e31837', '#ff4d6d', '#ffffff']
                });
            }, 250);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>