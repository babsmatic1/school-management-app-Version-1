<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>scolaricx Overview &mdash; scolaricx 1.0 documentation</title>




    <link rel="shortcut icon" href="../_static/favicon.ico" />



    <link
        href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic'
        rel='stylesheet' type='text/css'>









    <link rel="stylesheet" href="../_static/css/citheme.css" type="text/css" />



    <link rel="index" title="Index" href="../genindex.php" />
    <link rel="search" title="Search" href="../search.php" />
    <link rel="top" title="scolaricx 1.0 documentation" href="../index.php" />
    <link rel="next" title="Getting Started With scolaricx" href="getting_started.php" />
    <link rel="prev" title="upgrading" href="../installation/upgrading.php" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">
    <?php include '../include/nav.html' ?>
    <div id="nav2">
        <a href="#" id="openToc">
            <img src="data:image/jpeg;base64,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"
                title="Toggle Table of Contents" alt="Toggle Table of Contents" />
        </a>
    </div>

    <div class="wy-grid-for-nav">


        <nav data-toggle="wy-nav-shift" class="wy-nav-side">
            <div class="wy-side-nav-search">

                <a href="../index.html" class="fa fa-home"> scolaricx</a>


                <div role="search">
                    <form id="rtd-search-form" class="wy-form" action="../search.html" method="get">
                        <input type="text" name="q" placeholder="Search docs" />
                        <input type="hidden" name="check_keywords" value="yes" />
                        <input type="hidden" name="area" value="default" />
                    </form>
                </div>
            </div>
            <?php include '../include/navigation.html' ?>
            &nbsp;
        </nav>

        <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">


            <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
                <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
                <a href="../index.html">scolaricx</a>
            </nav>



            <div class="wy-nav-content">
                <div class="rst-content">
                    <div role="navigation" aria-label="breadcrumbs navigation">
                        <ul class="wy-breadcrumbs">
                            <li><a href="../index.html">Docs</a> &raquo;</li>

                            <li>scolaricx Overview</li>
                            <li class="wy-breadcrumbs-aside">

                            </li>
                            <div style="float:right;margin-left:5px;" id="closeMe">
                                <img title="Classic Layout" alt="classic layout"
                                    src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
                            </div>
                        </ul>
                        <hr />
                    </div>
                    <div role="main" class="document">

                        <div class="section" id="codeigniter-overview">
                            <h1>scolaricx Overview<a class="headerlink" href="#codeigniter-overview"
                                    title="Permalink to this headline">¶</a></h1>
                            <p>The following pages describe the broad concepts behind scolaricx:</p>
                            <div class="toctree-wrapper compound">
                                <ul>
                                    <li class="toctree-l1"><a class="reference internal"
                                            href="getting_started.html">Getting Started</a></li>
                                    <li class="toctree-l1"><a class="reference internal"
                                            href="at_a_glance.html">scolaricx at a Glance</a></li>
                                    <li class="toctree-l1"><a class="reference internal" href="features.html">Supported
                                            Features</a></li>
                                    <li class="toctree-l1"><a class="reference internal" href="appflow.html">Application
                                            Flow Chart</a></li>
                                    <li class="toctree-l1"><a class="reference internal"
                                            href="mvc.html">Model-View-Controller</a></li>
                                    <li class="toctree-l1"><a class="reference internal" href="goals.html">Architectural
                                            Goals</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <footer>

                        <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

                            <a href="getting_started.html" class="btn btn-neutral float-right"
                                title="Getting Started With scolaricx">Next <span
                                    class="fa fa-arrow-circle-right"></span></a>


                            <a href="../installation/troubleshooting.html" class="btn btn-neutral"
                                title="Troubleshooting"><span class="fa fa-arrow-circle-left"></span> Previous</a>

                        </div>


                        <hr />

                        <div role="contentinfo">
                            <p>
                                &copy; Copyright 2014 - 2017, British Columbia Institute of Technology.
                                Last updated on Sep 25, 2017.
                            </p>
                        </div>

                        Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a
                            href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a
                            href="https://readthedocs.org">Read the Docs</a>.

                    </footer>
                </div>
            </div>

        </section>

    </div>





    <script type="text/javascript">
    var DOCUMENTATION_OPTIONS = {
        URL_ROOT: '../',
        VERSION: '1.0',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.html',
        HAS_SOURCE: false
    };
    </script>
    <script type="text/javascript" src="../_static/jquery.js"></script>
    <script type="text/javascript" src="../_static/underscore.js"></script>
    <script type="text/javascript" src="../_static/doctools.js"></script>





    <script type="text/javascript" src="../_static/js/theme.js"></script>




    <script type="text/javascript">
    jQuery(function() {
        SphinxRtdTheme.StickyNav.enable();
    });
    </script>


</body>

</html>