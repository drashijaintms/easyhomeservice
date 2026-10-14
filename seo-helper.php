<?php
function generateMeta() {
    // Extract URI path and segments
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = array_values(array_filter(explode('/', trim($uri, '/'))));

    // Allowed categories
    $validCategories = ['Roofing', 'Solar', 'Window'];

    // Check if it matches /state/category or /state/city/category
    if ((count($segments) === 2 || count($segments) === 3)) {
        $category = ucfirst(strtolower($segments[count($segments) - 1]));
        if (!in_array($category, $validCategories)) {
            return; // Invalid category, do nothing
        }

        $stateParam = $segments[0];
        $cityParam = count($segments) === 3 ? $segments[1] : '';

        $stateFull = htmlspecialchars(ucwords(str_replace('-', ' ', $stateParam)));
        $cityFull = $cityParam ? htmlspecialchars(ucwords(str_replace('-', ' ', $cityParam))) : '';

        // State abbreviations
        $stateAbbr = [
            'California' => 'CA', 'Texas' => 'TX', 'Florida' => 'FL',
            'Pennsylvania' => 'PA', 'Illinois' => 'IL', 'New York' => 'NY'
        ];

        $abbr = $stateAbbr[$stateFull] ?? $stateFull;

        // Custom extras per city
        $cityExtras = [
            'Los Angeles' => 'Los Angeles Roof Repair',
            'San Jose' => 'San Jose Roof Repair',
            'San Diego' => 'San Diego Roof Repair',
            'San Francisco' => 'San Francisco Roof Repair',
            'Tampa' => 'Tampa Roof Repair',
            'Dallas' => 'Dallas Roof Repair',
            'Houston' => 'Houston Roof Repair',
            'Chicago' => 'Chicago Roof Repair',
            'Philadelphia' => 'Philadelphia Roof Repair',
            'San Antonio' => 'San Antonio Roof Repair',
            'New York City' => 'NYC Roof Repair',

            'New York City_Solar' => 'NYC Solar Repair',
            'Tampa_Window' => 'Tampa Window Repair'
        ];

        // Custom extras per state
        $stateExtras = [
            'California_Roofing' => 'San Jose, Los Angeles, San Diego, and more',
            'Texas_Roofing' => 'Dallas, Houston, San Antonio, and other cities',
            'Florida_Roofing' => 'Tampa and other nearby areas',
            'Pennsylvania_Roofing' => 'Philadelphia',
            'Illinois_Roofing' => 'Chicago and surrounding regions',
            'New York_Roofing' => 'New York City and beyond',

            'California_Solar' => 'Los Angeles, San Jose, San Diego, and San Francisco',
            'Texas_Window' => 'Houston, Dallas, San Antonio, and nearby cities'
        ];

        $templates = [
            'Roofing' => [
                'title_city' => 'Best Roofing Experts in %CITY%, %STATE% | %CITY_REPAIR%',
                'desc_city' => 'Need roof repair? Best Roofing Experts in %CITY%, %STATE% services and reliable solutions for all your roofing needs. Contact us now!',
                'keywords_city' => 'Roof repair %CITY%, Best Roofing Experts in %CITY%, %STATE%, %CITY_REPAIR%',

                'title_state' => 'Best Roofing Experts in %STATE% | %STATE_ABBR% Roof Repair Services',
                'desc_state' => 'Need roof repair? Best Roofing Experts in %STATE% (%STATE_ABBR%) offer reliable solutions for all your roofing needs across %STATE_CITIES%. Contact us now!',
                'keywords_state' => 'Roof repair %STATE%, Best Roofing Experts in %STATE_ABBR%, %STATE% Roof Repair'
            ],
            'Solar' => [
                'title_city' => 'Best Solar Experts in %CITY%, %STATE% | %CITY_REPAIR%',
                'desc_city' => 'Best Solar Experts in %CITY%, offering home & commercial solar installation, repair, and maintenance services. Reliable solutions near you. Contact us for a free quote!',
                'keywords_city' => 'Solar Experts %CITY%, Best Solar Experts in %CITY%, %CITY_REPAIR%',

                'title_state' => 'Best Solar Experts in %STATE% | %STATE_ABBR% Solar Installation & Repair',
                'desc_state' => 'Best Solar Experts in %STATE% (%STATE_ABBR%), serving major cities like %STATE_CITIES%. We offer residential and commercial solar installation, repair, and maintenance. Contact us for a free quote today!',
                'keywords_state' => 'Solar Experts %STATE%, Best Solar Experts in %STATE_ABBR%, %STATE% Solar Repair, Solar Installation %STATE_ABBR%'
            ],
            'Window' => [
                'title_city' => 'Best Window Experts in %CITY%, %STATE% | %CITY_REPAIR%',
                'desc_city' => 'Find the best home window replacement & installation contractors near you. Get Best Window Experts in %CITY%, %STATE%, upgrades, and installation services for all window types. Call now!',
                'keywords_city' => 'Window Experts %CITY%, %STATE%, Best Window Experts in %CITY%, %STATE%, %CITY_REPAIR%',

                'title_state' => 'Best Window Experts in %STATE% | %STATE_ABBR% Window Repair & Installation',
                'desc_state' => 'Need window replacement in %STATE%? Best Window Experts in %STATE_ABBR% cover %STATE_CITIES%. Offering top-rated window repair, installation, and upgrades for homes and commercial properties. Call now!',
                'keywords_state' => 'Window Experts %STATE%, Best Window Experts in %STATE_ABBR%, %STATE% Window Repair, window installation %STATE_ABBR%'
            ]
        ];

        $tpl = $templates[$category] ?? $templates['Roofing'];

        $replacements = [
            '%CITY%'         => $cityFull,
            '%STATE%'        => $stateFull,
            '%STATE_ABBR%'   => $abbr,
            '%STATE_CITIES%' => $stateExtras["{$stateFull}_{$category}"] ?? 'various cities',
            '%CITY_REPAIR%'  => $cityExtras["{$cityFull}_{$category}"] ?? $cityExtras[$cityFull] ?? $cityFull . ' ' . $category . ' Services'
        ];

        if (!empty($cityFull)) {
            $metaTitle = strtr($tpl['title_city'], $replacements);
            $metaDescription = strtr($tpl['desc_city'], $replacements);
            $metaKeywords = strtr($tpl['keywords_city'], $replacements);
        } else {
            $metaTitle = strtr($tpl['title_state'], $replacements);
            $metaDescription = strtr($tpl['desc_state'], $replacements);
            $metaKeywords = strtr($tpl['keywords_state'], $replacements);
        }

        $GLOBALS['metaTitle'] = $metaTitle;
        $GLOBALS['metaDescription'] = $metaDescription;
        $GLOBALS['metaKeywords'] = $metaKeywords;
    }
}
?>
