<?php
session_start();
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminHeader.php';
    }
    else{
        include_once 'assets/headerfooter/userHeader.php';
    }
}
else{
    include_once 'assets/headerfooter/Header.php';
}

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
        charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
 
<script src="assets/js/jquery.mapael.min.js"></script>

<script src="assets/js/argaocemeterymap.js"></script>

<style>
    
        /* Reset Zoom button first */
        .mapael .zoomReset {
            display:none;
        }

        /* Then Zoom In button */
        .mapael .zoomIn {
            display:none;
        }

        /* Then Zoom Out button */
        .mapael .zoomOut {
            display:none;
        }

        .mapael .mapTooltip {
    position: absolute;
    background-color: #474c4b;
    
    opacity: 0.70;
    filter: alpha(opacity=70);
    border-radius: 10px;
    padding: 10px;
    z-index: 1000;
    max-width: 200px;
    display: none;
    color: #fff;
}

</style>


<body>
    <div class="mapcontainer">
    <!-- <iframe allowfullscreen="" frameborder="0"  width="100%" height="400" style="padding: 24px;"></iframe> -->
    <div class="map">

    </div>
    </div>
    </div>

    <div style="margin: 26px;">
        <h1 class="text-center">Argao Catholic Cemetery</h1>
        <p class="fw-normal text-center" style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor&nbsp;<br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp;<br>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore&nbsp;<br>eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,&nbsp;<br>sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>



<?php
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'assets/headerfooter/adminFooter.php';
    }
    else{
        include_once 'assets/headerfooter/Footer.php';
    }
}
else{
    include_once 'assets/headerfooter/Footer.php';
}

?>

<script type="text/javascript">
    $(function () {
        $(".mapcontainer").mapael({
            map: {
                name: "argaocemeterymap"
               
                // Enable zoom on the map
                , zoom: {
                    enabled: true,
                    maxLevel: 11
                }
                // Set default plots and areas style
                , defaultPlot: {
                    attrs: {
                        fill: "#004a9b"
                        , opacity: 0.6
                    }
                    , attrsHover: {
                        opacity: 1
                    }
                    , text: {
                        attrs: {
                            fill: "#505444"
                        }
                        , attrsHover: {
                            fill: "#000"
                        }
                    }
                }
                , defaultArea: {
                    attrs: {
                        fill: "#f4f4e8"
                        , stroke: "#ced8d0"
                    }
                    , attrsHover: {
                        fill: "#a4e100"
                    }
                    , text: {
                        attrs: {
                            fill: "#505444"
                        }
                        , attrsHover: {
                            fill: "#000"
                        }
                    }
                }
 
            },

            areas: {
                "Entrance":{
                    tooltip: {content: "<span style=\"font-weight:bold;\">Entrace"}  
                },
                "Statue":{
                    tooltip:{content: "<span style=\"font-weight:bold;\">Cross Statue"}
                },
                "Office":{
                tooltip:{content: "<span style=\"font-weight:bold;\">Office"}
                },
                "Building":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Building"}
                },
                "Grave1":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Grave #1"}
                },
                 "Grave2":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Grave #2"}
                }
            }
        });
    });
</script>
