<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        

        <!-- Scripts -->
        <script>

            // (async function () {
            //     // Define a function to load the Google Analytics script asynchronously
            //     function loadGoogleAnalytics(ga4_id) {
            //         var script = document.createElement('script');
            //         script.src = 'https://www.googletagmanager.com/gtag/js?id=' + ga4_id;
            //         script.async = true;
            //         document.head.appendChild(script);
            //     }

            //     // Initialize the dataLayer array if it doesn't exist
            //     window.dataLayer = window.dataLayer || [];

            //     // Define a function to push events to the dataLayer
            //     function gtag() {
            //         dataLayer.push(arguments);
            //     }

            //     // Function to fetch the GA4 ID
            //     async function fetchData() {
            //         try {
            //             const response = await fetch('YOUR_GA4_ID_API_ENDPOINT_HERE');
            //             return await response.json();
            //         } catch (error) {
            //             console.error('Error fetching GA4 ID:', error);
            //             return null;
            //         }
            //     }

            //     // Fetch the GA4 ID and initialize gtag when the ID is available
            //     const result = await fetchData();

            //     // Load the Google Analytics script
            //     loadGoogleAnalytics(result.ga4_id);

                
            //     if (result.ga4_id) {
            //         gtag('js', new Date());
            //         gtag('config', result.ga4_id);
            //     }


            //     const urls = [
            //         { url: 'https://singco.loca.lt/home2', weight: 50 },
            //         { url: 'https://singco.loca.lt/home1', weight: 50 },
            //     ];

            //     const totalWeight = urls.reduce((sum, url) => sum + url.weight, 0);
            //     const randomNumber = Math.random();

            //     let selectedURL = null;
            //     let cumulativeWeight = 0;

            //     for (const url of urls) {
            //         cumulativeWeight += (url.weight / totalWeight);
            //         if (randomNumber <= cumulativeWeight) {
            //             selectedURL = url.url;
            //             break;
            //         }
            //     }

            //     if (selectedURL === null) {
            //         selectedURL = urls[urls.length - 1].url;
            //     }
                
            //     window.location.href = selectedURL;
            // })();

            (function () {
                // Define a function to load the Google Analytics script asynchronously
                function loadGoogleAnalytics() {
                    var script = document.createElement('script');
                    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-TCYMM81YQK';
                    script.async = true;
                    document.head.appendChild(script);
                }

                // Initialize the dataLayer array if it doesn't exist
                window.dataLayer = window.dataLayer || [];

                // Define a function to push events to the dataLayer
                function gtag() {
                    dataLayer.push(arguments);
                }

                // Load the Google Analytics script
                loadGoogleAnalytics();

                // Initialize gtag and configure it
                gtag('js', new Date());
                gtag('config', 'G-TCYMM81YQK');

                
                function trackGA4Event(eventName, eventParams = {}) {
                    // Check if gtag is defined (Google Analytics library)
                    if (typeof gtag === 'function') {
                        gtag('event', eventName, eventParams);
                    } else {
                        console.error('Google Analytics (gtag) is not defined.');
                    }
                }


                const urls = [
                    { url: 'http://sulay.test:81', weight: 50 },
                    { url: 'http://sulay.test:81/home1', weight: 50 },
                ];

                const totalWeight = urls.reduce((sum, url) => sum + url.weight, 0);
                const randomNumber = Math.random();

                let selectedURL = null;
                let cumulativeWeight = 0;

                for (const url of urls) {
                    cumulativeWeight += (url.weight / totalWeight);
                    if (randomNumber <= cumulativeWeight) {
                        selectedURL = url.url;
                        break;
                    }
                }

                // if (selectedURL === null) {
                //     selectedURL = urls[urls.length - 1].url;
                // }

                function haveSamePath(url1, url2) {
                    // Create `Location` objects for the two URLs
                    var location1 = new URL(url1);
                    var location2 = new URL(url2);

                    // Compare the pathname properties
                    return location1.pathname === location2.pathname;
                }

                if (haveSamePath('http://sulay.test:81', window.location.href)) {

                    if (!haveSamePath(selectedURL, window.location.href)) {
                        window.location.href = selectedURL;
                    }
                    
                }
                

                trackGA4Event('page_view');

                // Outbound Clicks
                trackGA4Event('click', {
                    event_category: 'Outbound Link',
                    event_label: 'URL of the outbound link',
                });

            })();
        </script>


        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia




        {{-- <script src="https://www.googleoptimize.com/optimize.js?id=OPT-K9JJVMP"></script> --}}
    </body>
</html>
