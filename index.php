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

<!-- <script src="assets/js/argaocemeterymap.js"></script> -->
<script src="assets/js/argaomap.js"></script>
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
        <p class="fw-normal text-center" style="font-size: 14px;">For St. Michael's Area Church, the analysts are required to perform a study on the creation of a standalone web-based framework,&nbsp;<br>which we believe will reduce the irregularity in information transmission, room for errors, and miskeying data. This framework will be used in the office on a day-to-day basis.&nbsp;<br>If you want to keep track of all your transactions, the framework will help you.&nbsp;<br>
    </div>



<?php
if (isset($_SESSION['userID']))
{
    if($_SESSION['userID'] == 1)
    {
        include_once 'AdminDash.php';
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
                name: "argaomap"
               
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
                        fill: "#50c878"
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
                    tooltip: {content: "<span style=\"font-weight:bold;\">Entrace"}  ,
                    attrs:{
                        fill: "#01ff00"
                    }
                },

                "Statue":{
                    tooltip:{content: "<span style=\"font-weight:bold;\">Cross Statue"},
                    attrs:{
                        fill: "#444444"
                    }
                },

                "Office":{
                tooltip:{content: "<span style=\"font-weight:bold;\">Office"},
                attrs:{
                    fill: "#444444"
                }
                },

                "Building":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Building"},
                 attrs:{
             fill: "#444444"
                        }
                },
                "Grave1":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Grave #1"}
                 , attrsHover: {
                     fill: "#999999"
                    }
                 
                },
                 "Grave2":{
                 tooltip:{content: "<span style=\"font-weight:bold;\">Grave #2"}
                 , attrsHover: {
                      fill: "#999999"
                     }
                },

            //   "fp1 01":{
                //   tooltip:{content: "<span style=\"font-weight:bold;\">Number 1"}
            //   },

                "fp1 1":{
                    text: {content: "C1", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Darrell C Fleming <br> <span>(1870-1942)"}
                    
                },
                
                "fp1 2":{
                    text: {content: "C2", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Christine T Lewis <br> <span>(2007-2016) "}
                    
                },

                "fp1 3":{
                    text: {content: "C2", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">James D Vance <br> <span>(2000-2015)"}
                    
                },

                "fp1 4":{
                    text: {content: "C3", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Paul D Ferry <br> <span>(2002-2013)"}
                    
                },


                "fp1 5":{
                    text: {content: "C4", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Hope A Matthews <br> <span>(2006-2011)"}
                    
                },


                "fp1 6":{
                    text: {content: "C5", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Gail D McDonald <br> <span>(2001-2013)"}
                    
                },


                "fp1 7":{
                    text: {content: "C6", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Gertrude F Mullen <br> <span>(2006-2016)"}
                    
                },


                "fp1 8":{
                    text: {content: "C7", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Peter A Chamberlain <br> <span>(2000-2017)"}
                    
                },

                "fp1 9":{
                    text: {content: "C8", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Dorothy D Yu <br> <span>(2001-2017)"}
                    
                },


                "fp1 10":{
                    text: {content: "C9", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jeanette H Koski <br> <span>(2001-2006)"}
                    
                },


                "fp1 11":{
                    text: {content: "C11", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Mauro K Hanson <br> <span>(2012-2013)"}
                    
                },


                "fp1 12":{
                    text: {content: "C12", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Ricardo J Richards <br> <span>(2016-2019)"}
                    
                },

                "fp1 13":{
                    text: {content: "C13", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Arlene K Livingston <br> <span>(2000-2010)"}
                    
                },

                "fp1 14":{
                    text: {content: "C14", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Emma A Spain <br> <span>(1926-2041)"}
                    
                },

                "fp1 15":{
                    text: {content: "15", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Cathey G Riddell <br> <span>(1962-2018)"}
                    
                },

                "fp1 16":{
                    text: {content: "C16", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Yelena M Martines <br> <span>(1990-2018)"}
                    
                },

                "fp1 17":{
                    text: {content: "17", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Alex C Self <br> <span>(1951-1966)"}
                    
                },

                "fp1 18":{
                    text: {content: "C18", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Terry G Smith <br> <span>(1956-1968)"}
                    
                },

                "fp1 19":{
                    text: {content: "C19", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Florence J Guel <br> <span>(1967-2023)"}
                    
                },

                "fp1 20":{
                    text: {content: "C20", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jan J England <br> <span>(1970-1997)"}
                    
                },

                "fp2 1":{
                    text: {content: "C01", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Bennie S Bryan <br> <span>(1928-2017)"}
                    
                },

                "fp2 2":{
                    text: {content: "C02", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Frank D Maney<br> <span>(1956-1999)"}
                    
                },

                "fp2 03":{
                    text: {content: "C03", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Johnathan E Goodwin <br> <span>(1934-2033)"}
                    
                },

                "fp2 4":{
                    text: {content: "C04", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Gene S Jackson <br> <span>(2042-2035)"}
                    
                },

                "fp2 5":{
                    text: {content: "C05", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Thomas A Winkles <br> <span>(1946-2030)"}
                    
                },

                "fp2 6":{
                    text: {content: "C06", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Alicia R Foster <br> <span>(1934-1950)"}
                    
                },

                "fp2 7":{
                    text: {content: "C07", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Linda M Perryman <br> <span>(1988-2000)"}
                    
                },

                "fp2 8":{
                    text: {content: "C08", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Patrick M Givens <br> <span>(2014-2036)"}
                    
                },

                "fp2 09":{
                    text: {content: "C09", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jacqueline S Johnson <br> <span>(2016-2050)"}
                    
                },

                "fp2 10":{
                    text: {content: "C10", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">John M Rudd<br> <span>(1933-2036)"}
                    
                },

                "fp2 11":{
                    text: {content: "C11", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Gary S Gustafson <br> <span>(1970-2026)"}
                    
                },

                "fp2 12":{
                    text: {content: "C12", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Tina B McCullough<br> <span>(1945-2002)"}
                    
                },

                "fp2 13":{
                    text: {content: "C13", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Manuel J Wendler <br> <span>(1931-1954)"}
                    
                },

                "fp2 14":{
                    text: {content: "C14", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Dione J Draper <br> <span>(1956-2047)"}
                    
                },

                "fp2 15":{
                    text: {content: "C15", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jennifer D Good <br> <span>(2005-2014)"}
                    
                }, 

                "fp2 16":{
                    text: {content: "C16", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Gloria D Worrell <br> <span>(1945-2017)"}
                    
                },

                "fp2 17":{
                    text: {content: "C17", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Lydia W Manns <br> <span>(1999-2017)"}
                    
                },

                "fp2 18":{
                    text: {content: "C18", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Toby A Reddick<br> <span>(1968-2041)"}
                    
                },

                "fp2 19":{
                    text: {content: "C19", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Ann C Henson <br> <span>(1923-2035)"}
                    
                },

                "fp2 20":{
                    text: {content: "C20", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Faye E Roman <br> <span>(1933-2013)"}
                    
                },

                "fp3 1":{
                    text: {content: "C01", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Kristi K Boyce <br> <span>(2005-2019)"}
                    
                },

                "fp3 2":{
                    text: {content: "C02", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Derrick V Neal <br> <span>(1917-2007)"}
                    
                },

                "fp3 3":{
                    text: {content: "C03", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Donald E Marsh <br> <span>(1917-2027)"}
                    
                },

                "fp3 4":{
                    text: {content: "C04", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Timothy T Dubose <br> <span>(2003-2008)"}
                    
                },

                "fp3 5":{
                    text: {content: "C05", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Larry B Black <br> <span>(2005-2015)"}
                    
                },

                "fp3 6":{
                    text: {content: "C06", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Judy D Nottingham <br> <span>(2000-2018)"}
                    
                },

                "fp3 7":{
                    text: {content: "C07", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Clinton S Adair <br> <span>(2006-2019)"}
                    
                },

                "fp3 8":{
                    text: {content: "C08", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Kevin A Coffman <br> <span>(2002-2020)"}

                },


                "fp4 1":{
                    text: {content: "C01", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Charles K Martin <br> <span>(2018-2020)"}
                    
                },

                "fp4 2":{
                    text: {content: "C02", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">John F Bennett <br> <span>(2013-2019)"}
                    
                },

                "fp4 3":{
                    text: {content: "C03", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Marie D Alvarado <br> <span>(2001-2016)"}
                    
                },

                "fp4 7":{
                    text: {content: "C07", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Rosemary D Skinner <br> <span>(2010-2020)"}
                    
                },

                "fp4 8":{
                    text: {content: "C08", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Maria R Adams <br> <span>(2004-2017)"}
                    
                },

                "fp4 9":{
                    text: {content: "C09", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Ellen G McDermott <br> <span>(2007-2018)"}
                    
                },

                "fp4 10":{
                    text: {content: "C10", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Edward B Hernandez <br> <span>(2008-2021)"}
                    
                },

                "fp4 11":{
                    text: {content: "C11", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Ashley G Billy <br> <span>(2009-2016)"}
                    
                },

                "fp4 12":{
                    text: {content: "C12", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Matthew S Hennen <br> <span>(2012-2021)"}
                    
                },

                "fp4 13":{
                    text: {content: "C13", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jessie A Vanhoose <br> <span>(2002-2016)"}
                    
                },
            
                "4f 1":{
                    text: {content: "C01", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Rosalind N Fagan <br> <span>(2005-2017)"}

                },

                "4f 2":{
                    text: {content: "C02", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Kathryn R Bennett <br> <span>(2002-2016)"}
                    
                },

                "4f 3":{
                    text: {content: "C03", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Calvin N Loden <br> <span>(2002-2017)"}
                    
                },

                "4f 4":{
                    text: {content: "C04", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Richard S Martinez <br> <span>(2005-2016)"}
                    
                },

                "4f 5":{
                    text: {content: "C05", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Tanya C Whittemore. <br> <span>(2001-2017)"}
                    
                },

                "4f 6":{
                    text: {content: "C06", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Mary J Holley <br> <span>(2003-2017)"}
                    
                },

                "4f 10":{
                    text: {content: "C10", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Patricia J Smith <br> <span>(2010-2017)"}
                    
                },

                "4f 11":{
                    text: {content: "C11", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Louis M Nowacki <br> <span>(2002-2008)"}
                    
                },

                "4f 12":{
                    text: {content: "C12", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Steven A Nagel <br> <span>(2005-2017)"}
                    
                },

                "4f 13":{
                    text: {content: "C13", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Darrell D Sanchez <br> <span>(2001-2019)"}
                    
                },

                "4f 14":{
                    text: {content: "C14", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Romeo E Sanders <br> <span>(2009-2018)"}
                    
                },

                "4f 15":{
                    text: {content: "C15", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Joe J Mendez<br> <span>(2001-2009)"}
                    
                },

                "4f 16":{
                    text: {content: "C16", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Wesley J Martin <br> <span>(1999-2005)"}
                    
                },

                "4f 17":{
                    text: {content: "C17", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Jodi H Walker <br> <span>(2004-2010)"}
                    
                },

                "4f 18":{
                    text: {content: "C18", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Paul L Sandlin <br> <span>(2001-2011)"}
                    
                },

                "4f2 1":
                {
                    text: {content: "C01", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Kathryn T Davis <br> <span>(2009-2016)"}
                    
                },

                "4f2 2":
                {
                    text: {content: "C02", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">James L Guess <br> <span>(2001-2005)"}
                    
                },

                "4f2 3":
                {
                    text: {content: "C03", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Patty R Smith <br> <span>(2006-2017)"}
                    
                },

                "4f2 4":
                {
                    text: {content: "C04", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">JGeorge C Goad <br> <span>(2017-2021)"}
                    
                },

                "4f2 5":
                {
                    text: {content: "C05", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Idella A Taylor<br> <span>(2003-2012)"}
                    
                },

                "4f2 6":
                {
                    text: {content: "C06", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Leslie B Morrison <br> <span>(2007-2017)"}
                    
                },

                "4f2 14":{
                    text: {content: "C14", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Vicki J Griffin <br> <span>(2005-2014)"}
                    
                },

                "4f2 15":{
                    text: {content: "C15", attrs: {"font-size": 3}},
                    tooltip:{content: "<span style=\"font-weight:bold;\">Danna S Sarno <br> <span>(2012-2021)"}
                    
                },



                

            }
        });
    });
</script>
