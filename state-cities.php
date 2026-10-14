    <style>
        /* ==========================================================================
           SECTION 12: STATES WE SERVE
           ========================================================================== */
        .ehs-contractor-states-served {
            padding: 45px 0 45px;
            background-color: #ffffff;
            font-family: 'Inter', 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            text-align: center;
        }

        .ehs-states-title {
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            color: var(--ehs-primary-dark);
            letter-spacing: -0.5px;
            margin-bottom: 12px;
        }

        .ehs-states-desc {
            font-size: 1.05rem;
            line-height: 1.65;
            color: var(--ehs-text-muted);
            max-width: 680px;
            margin: 0 auto 24px;
            font-weight: 400;
        }

        /* States Map & Grid Wrapper */
        .ehs-states-wrapper {
            width: 100%;
            position: relative;
            background-image: url('../contractor/images/map-background-image.png');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 100% 100%;
            padding: 50px 35px 60px;
            min-height: 540px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .ehs-states-col {
            display: flex;
            flex-direction: column;
            gap: 13px;
            text-align: left;
        }

        .ehs-state-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .ehs-state-pin {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            line-height: 1;
        }

        .ehs-state-pin i,
        .ehs-state-pin .location-icon {
            color: #22c55e;
            font-size: 1.15rem;
        }

        .ehs-state-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #1e293b;
            letter-spacing: -0.2px;
            white-space: nowrap;
        }

        /* ==========================================================================
           SECTION 13: CITIES WE SERVE
           ========================================================================== */
        .ehs-contractor-cities-served {
            padding: 35px 0 35px;
            background-color: #edf5fc;
            font-family: 'Inter', 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            text-align: center;
        }

        .ehs-cities-title {
            font-size: 2.35rem;
            font-weight: 800;
            line-height: 1.25;
            color: var(--ehs-primary-dark);
            letter-spacing: -0.5px;
            margin-bottom: 36px;
            text-align: center;
        }

        .ehs-cities-card {
            background-color: #f7fafc;
            border: 1.5px solid #86efac;
            border-radius: 16px;
            padding: 30px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .ehs-cities-grid {
            margin: 0;
        }

        /* ==========================================================================
           RESPONSIVE MEDIA QUERIES
           ========================================================================== */
        @media (max-width: 1199px) {
            .ehs-states-wrapper {
                min-height: auto;
                padding: 30px 15px;
                background-size: cover;
            }
        }

        @media (max-width: 991px) {
            .ehs-contractor-states-served {
                padding: 40px 0 50px;
            }

            .ehs-states-title {
                font-size: 2rem;
            }

            .ehs-states-desc {
                font-size: 0.95rem;
                margin-bottom: 24px;
            }

            .ehs-states-wrapper {
                background-size: cover;
                padding: 30px 15px 20px;
                min-height: auto;
            }

            .ehs-state-name {
                font-size: 0.88rem;
            }

            .ehs-contractor-cities-served {
                padding: 40px 0 50px;
            }

            .ehs-cities-title {
                font-size: 1.85rem;
                margin-bottom: 25px;
            }
        }

        @media (max-width: 576px) {
            .ehs-states-title {
                font-size: 1.75rem;
            }

            .ehs-cities-title {
                font-size: 1.6rem;
            }

            .ehs-cities-card {
                padding: 20px 15px;
            }

            .ehs-states-col {
                gap: 10px;
            }

            .ehs-state-name {
                font-size: 0.82rem;
            }
        }
    </style>

    <!-- ========================================== -->
    <!-- SECTION 12: STATES WE SERVE START         -->
    <!-- ========================================== -->
    <section class="ehs-contractor-states-served">
        <div class="container">
            <h2 class="ehs-states-title">States We Serve</h2>
            <p class="ehs-states-desc">
                Wherever you are, we are closer than you think
            </p>

            <!-- States Grid with Map Background using Bootstrap Row & Col -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="ehs-states-wrapper">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                            <!-- Column 1: Alabama - Georgia -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Alabama</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Alaska</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Arizona</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Arkansas</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">California</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Colorado</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Connecticut</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Delaware</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Florida</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Georgia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 2: Hawaii - Maryland -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Hawaii</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Idaho</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Illinois</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Indiana</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Iowa</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Kansas</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Kentucky</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Louisiana</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Maine</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Maryland</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 3: Massachusetts - New Jersey -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Massachusetts</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Michigan</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Minnesota</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Mississippi</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Missouri</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Montana</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Nebraska</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Nevada</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Hampshire</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Jersey</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 4: New Mexico - South Carolina -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Mexico</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New York</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">North Carolina</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">North Dakota</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Ohio</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Oklahoma</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Oregon</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Pennsylvania</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Rhode Island</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">South Carolina</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 5: South Dakota - Wyoming -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">South Dakota</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Tennessee</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Texas</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Utah</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Vermont</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Virginia</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Washington</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">West Virginia</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Wisconsin</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Wyoming</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 12: STATES WE SERVE END -->


    <!-- ========================================== -->
    <!-- SECTION 13: CITIES WE SERVE START         -->
    <!-- ========================================== -->
    <section class="ehs-contractor-cities-served">
        <div class="container">
            <h2 class="ehs-cities-title">We work in 500+ Cities</h2>
            
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                    <div class="ehs-cities-card">
                        <div class="row row-cols-2 row-cols-md-4 g-4 ehs-cities-grid">
                            <!-- Column 1 -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New York</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Los Angeles</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Chicago</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Houston</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Phoenix</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 2 -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Philadelphia</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">San Antonio</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">San Diego</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Dallas</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Fort Worth</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 3 -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Jacksonville</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Austin</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">San Jose</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Charlotte</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Columbus</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 4 -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Indianapolis</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">San Francisco</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Seattle</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Denver</span>
                                    </div>
                                    <div class="ehs-state-item">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Nashville</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 13: CITIES WE SERVE END -->
