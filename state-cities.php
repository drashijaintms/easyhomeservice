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

        /* State Links (HVAC & Plumbing pages) */
        .ehs-states-wrapper .ehs-state-item a.ehs-state-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
        }

        .ehs-states-wrapper .ehs-state-item a.ehs-state-link:hover .ehs-state-name,
        .ehs-states-wrapper .ehs-state-item.active .ehs-state-name {
            color: #16a34a;
        }

        .ehs-states-wrapper .ehs-state-item a.ehs-state-link:focus,
        .ehs-states-wrapper .ehs-state-item a.ehs-state-link:active {
            color: inherit;
            text-decoration: none;
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
    <section class="ehs-contractor-states-served roofing_section_2">
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
                                    <div class="ehs-state-item AL" data-code="AL">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Alabama</span>
                                    </div>
                                    <div class="ehs-state-item AK" data-code="AK">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Alaska</span>
                                    </div>
                                    <div class="ehs-state-item AZ" data-code="AZ">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Arizona</span>
                                    </div>
                                    <div class="ehs-state-item AR" data-code="AR">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Arkansas</span>
                                    </div>
                                    <div class="ehs-state-item CA" data-code="CA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">California</span>
                                    </div>
                                    <div class="ehs-state-item CO" data-code="CO">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Colorado</span>
                                    </div>
                                    <div class="ehs-state-item CT" data-code="CT">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Connecticut</span>
                                    </div>
                                    <div class="ehs-state-item DE" data-code="DE">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Delaware</span>
                                    </div>
                                    <div class="ehs-state-item FL" data-code="FL">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Florida</span>
                                    </div>
                                    <div class="ehs-state-item GA" data-code="GA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Georgia</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 2: Hawaii - Maryland -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item HI" data-code="HI">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Hawaii</span>
                                    </div>
                                    <div class="ehs-state-item ID" data-code="ID">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Idaho</span>
                                    </div>
                                    <div class="ehs-state-item IL" data-code="IL">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Illinois</span>
                                    </div>
                                    <div class="ehs-state-item IN" data-code="IN">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Indiana</span>
                                    </div>
                                    <div class="ehs-state-item IA" data-code="IA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Iowa</span>
                                    </div>
                                    <div class="ehs-state-item KS" data-code="KS">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Kansas</span>
                                    </div>
                                    <div class="ehs-state-item KY" data-code="KY">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Kentucky</span>
                                    </div>
                                    <div class="ehs-state-item LA" data-code="LA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Louisiana</span>
                                    </div>
                                    <div class="ehs-state-item ME" data-code="ME">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Maine</span>
                                    </div>
                                    <div class="ehs-state-item MD" data-code="MD">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Maryland</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 3: Massachusetts - New Jersey -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item MA" data-code="MA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Massachusetts</span>
                                    </div>
                                    <div class="ehs-state-item MI" data-code="MI">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Michigan</span>
                                    </div>
                                    <div class="ehs-state-item MN" data-code="MN">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Minnesota</span>
                                    </div>
                                    <div class="ehs-state-item MS" data-code="MS">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Mississippi</span>
                                    </div>
                                    <div class="ehs-state-item MO" data-code="MO">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Missouri</span>
                                    </div>
                                    <div class="ehs-state-item MT" data-code="MT">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Montana</span>
                                    </div>
                                    <div class="ehs-state-item NE" data-code="NE">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Nebraska</span>
                                    </div>
                                    <div class="ehs-state-item NV" data-code="NV">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Nevada</span>
                                    </div>
                                    <div class="ehs-state-item NH" data-code="NH">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Hampshire</span>
                                    </div>
                                    <div class="ehs-state-item NJ" data-code="NJ">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Jersey</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 4: New Mexico - South Carolina -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item NM" data-code="NM">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New Mexico</span>
                                    </div>
                                    <div class="ehs-state-item NY" data-code="NY">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">New York</span>
                                    </div>
                                    <div class="ehs-state-item NC" data-code="NC">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">North Carolina</span>
                                    </div>
                                    <div class="ehs-state-item ND" data-code="ND">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">North Dakota</span>
                                    </div>
                                    <div class="ehs-state-item OH" data-code="OH">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Ohio</span>
                                    </div>
                                    <div class="ehs-state-item OK" data-code="OK">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Oklahoma</span>
                                    </div>
                                    <div class="ehs-state-item OR" data-code="OR">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Oregon</span>
                                    </div>
                                    <div class="ehs-state-item PA" data-code="PA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Pennsylvania</span>
                                    </div>
                                    <div class="ehs-state-item RI" data-code="RI">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Rhode Island</span>
                                    </div>
                                    <div class="ehs-state-item SC" data-code="SC">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">South Carolina</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 5: South Dakota - Wyoming -->
                            <div class="col">
                                <div class="ehs-states-col">
                                    <div class="ehs-state-item SD" data-code="SD">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">South Dakota</span>
                                    </div>
                                    <div class="ehs-state-item TN" data-code="TN">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Tennessee</span>
                                    </div>
                                    <div class="ehs-state-item TX" data-code="TX">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Texas</span>
                                    </div>
                                    <div class="ehs-state-item UT" data-code="UT">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Utah</span>
                                    </div>
                                    <div class="ehs-state-item VT" data-code="VT">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Vermont</span>
                                    </div>
                                    <div class="ehs-state-item VA" data-code="VA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Virginia</span>
                                    </div>
                                    <div class="ehs-state-item WA" data-code="WA">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Washington</span>
                                    </div>
                                    <div class="ehs-state-item WV" data-code="WV">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">West Virginia</span>
                                    </div>
                                    <div class="ehs-state-item WI" data-code="WI">
                                        <span class="ehs-state-pin"><i class="bi bi-geo-alt location-icon"></i></span>
                                        <span class="ehs-state-name">Wisconsin</span>
                                    </div>
                                    <div class="ehs-state-item WY" data-code="WY">
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
    <section class="ehs-contractor-cities-served roofing_section_2">
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

    <script>
    (function () {
        /* =====================================
           HARD BASE DOMAIN
        ===================================== */
        const isLocal = window.location.hostname === "localhost" || window.location.hostname === "127.0.0.1";
        const domain = isLocal ? window.location.origin : "https://easyhomeservice.com";

        /* =====================================
           HVAC LINKS ARRAY (WHITELIST ONLY)
        ===================================== */
        const hvacLinks = {
            AL: domain + "/alabama/hvac-services-in-alabama",
            AK: domain + "/alaska/hvac-services-in-alaska",
            AZ: domain + "/arizona/hvac-services-in-arizona",
            AR: domain + "/arkansas/hvac-services-in-arkansas",
            CA: domain + "/california/hvac-services-in-california",
            CO: domain + "/colorado/hvac-services-in-colorado",
            CT: domain + "/connecticut/hvac-services-in-connecticut",
            DE: domain + "/delaware/hvac-services-in-delaware",
            FL: domain + "/florida/hvac-services-in-florida",
            GA: domain + "/georgia/hvac-services-in-georgia",
            HI: domain + "/hawaii/hvac-services-in-hawaii",
            ID: domain + "/idaho/hvac-services-in-idaho",
            IL: domain + "/illinois/hvac-services-in-illinois",
            IN: domain + "/indiana/hvac-services-in-indiana",
            IA: domain + "/iowa/hvac-services-in-iowa",
            KS: domain + "/kansas/hvac-services-in-kansas",
            KY: domain + "/kentucky/hvac-services-in-kentucky",
            LA: domain + "/louisiana/hvac-services-in-louisiana",
            ME: domain + "/maine/hvac-services-in-maine",
            MD: domain + "/maryland/hvac-services-in-maryland",
            MA: domain + "/massachusetts/hvac-services-in-massachusetts",
            MI: domain + "/michigan/hvac-services-in-michigan",
            MN: domain + "/minnesota/hvac-services-in-minnesota",
            MS: domain + "/mississippi/hvac-services-in-mississippi",
            MO: domain + "/missouri/hvac-services-in-missouri",
            MT: domain + "/montana/hvac-services-in-montana",
            NE: domain + "/nebraska/hvac-services-in-nebraska",
            NV: domain + "/nevada/hvac-services-in-nevada",
            NH: domain + "/new-hampshire/hvac-services-in-new-hampshire",
            NJ: domain + "/new-jersey/hvac-services-in-new-jersey",
            NM: domain + "/new-mexico/hvac-services-in-new-mexico",
            NY: domain + "/new-york/hvac-services-in-new-york",
            NC: domain + "/north-carolina/hvac-services-in-north-carolina",
            ND: domain + "/north-dakota/hvac-services-in-north-dakota",
            OH: domain + "/ohio/hvac-services-in-ohio",
            OK: domain + "/oklahoma/hvac-services-in-oklahoma",
            OR: domain + "/oregon/hvac-services-in-oregon",
            PA: domain + "/pennsylvania/hvac-services-in-pennsylvania",
            RI: domain + "/rhode-island/hvac-services-in-rhode-island",
            SC: domain + "/south-carolina/hvac-services-in-south-carolina",
            SD: domain + "/south-dakota/hvac-services-in-south-dakota",
            TN: domain + "/tennessee/hvac-services-in-tennessee",
            TX: domain + "/texas/hvac-services-in-texas",
            UT: domain + "/utah/hvac-services-in-utah",
            VT: domain + "/vermont/hvac-services-in-vermont",
            VA: domain + "/virginia/hvac-services-in-virginia",
            WA: domain + "/washington/hvac-services-in-washington",
            WV: domain + "/west-virginia/hvac-services-in-west-virginia",
            WI: domain + "/wisconsin/hvac-services-in-wisconsin",
            WY: domain + "/wyoming/hvac-services-in-wyoming"
        };

        /* =====================================
           PLUMBING LINKS ARRAY (WHITELIST ONLY)
        ===================================== */
        const plumbingLinks = {};
        Object.keys(hvacLinks).forEach(code => {
            plumbingLinks[code] = hvacLinks[code].replace("hvac-services-in", "plumbing-experts-in");
        });

        const stateNameToCode = {
            "Alabama": "AL", "Alaska": "AK", "Arizona": "AZ", "Arkansas": "AR", "California": "CA",
            "Colorado": "CO", "Connecticut": "CT", "Delaware": "DE", "Florida": "FL", "Georgia": "GA",
            "Hawaii": "HI", "Idaho": "ID", "Illinois": "IL", "Indiana": "IN", "Iowa": "IA",
            "Kansas": "KS", "Kentucky": "KY", "Louisiana": "LA", "Maine": "ME", "Maryland": "MD",
            "Massachusetts": "MA", "Michigan": "MI", "Minnesota": "MN", "Mississippi": "MS", "Missouri": "MO",
            "Montana": "MT", "Nebraska": "NE", "Nevada": "NV", "New Hampshire": "NH", "New Jersey": "NJ",
            "New Mexico": "NM", "New York": "NY", "North Carolina": "NC", "North Dakota": "ND", "Ohio": "OH",
            "Oklahoma": "OK", "Oregon": "OR", "Pennsylvania": "PA", "Rhode Island": "RI", "South Carolina": "SC",
            "South Dakota": "SD", "Tennessee": "TN", "Texas": "TX", "Utah": "UT", "Vermont": "VT",
            "Virginia": "VA", "Washington": "WA", "West Virginia": "WV", "Wisconsin": "WI", "Wyoming": "WY"
        };

        /* =====================================
           HOVER EFFECT
        ===================================== */
        if (typeof jQuery !== "undefined") {
            jQuery(document).on("mouseenter", ".ehs-states-wrapper .ehs-state-item", function () {
                jQuery(".ehs-states-wrapper .ehs-state-item").removeClass("active");
                jQuery(this).addClass("active");
            });
        }

        /* =====================================
           LINK INSERTION (STRICT MATCH ONLY)
           Only for States on HVAC & Plumbing pages
        ===================================== */
        function applyStateLinks() {
            const path = window.location.pathname.toLowerCase();

            let linkSet = null;

            if (path.includes("hvac")) linkSet = hvacLinks;
            if (path.includes("plumbing")) linkSet = plumbingLinks;

            /* If not HVAC or Plumbing -> stop. */
            if (!linkSet) return;

            // Apply only to states in the States We Serve section
            const stateElements = document.querySelectorAll(".ehs-states-wrapper .ehs-state-item");
            stateElements.forEach(function (item) {
                const nameEl = item.querySelector(".ehs-state-name");
                const stateName = nameEl ? nameEl.textContent.trim() : "";
                const classCode = item.className ? item.className.split(" ").find(function (c) {
                    return c !== "ehs-state-item" && c !== "active";
                }) : null;
                const code = item.getAttribute("data-code") || classCode || stateNameToCode[stateName];

                if (!code || !linkSet[code]) return; // STRICT MATCH ONLY

                const url = linkSet[code];

                if (!item.querySelector("a")) {
                    const a = document.createElement("a");
                    a.href = url;
                    a.className = "ehs-state-link";
                    while (item.firstChild) {
                        a.appendChild(item.firstChild);
                    }
                    item.appendChild(a);
                }
            });
        }

        if (typeof jQuery !== "undefined") {
            jQuery(document).ready(applyStateLinks);
        } else if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", applyStateLinks);
        } else {
            applyStateLinks();
        }
    })();
    </script>