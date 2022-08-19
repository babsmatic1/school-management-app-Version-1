<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Upgrading From Beta 1.0 to Beta 1.1 &mdash; scolaricx 1.0 documentation</title>




    <link rel="shortcut icon" href="../_static/favicon.ico" />



    <link
        href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic'
        rel='stylesheet' type='text/css'>









    <link rel="stylesheet" href="../_static/css/citheme.css" type="text/css" />



    <link rel="index" title="Index" href="../genindex.php" />
    <link rel="search" title="Search" href="../search.php" />
    <link rel="top" title="scolaricx 1.0 documentation" href="../index.php" />
    <link rel="up" title="Upgrading From a Previous Version" href="upgrading.php" />
    <link rel="next" title="Tutorial" href="../tutorial/" />
    <link rel="prev" title="Upgrading From Beta 1.0 to Final 1.2" href="upgrading.php" />


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

                <a href="../index.php" class="fa fa-home"> scolaricx</a>


                <div role="search">
                    <form id="rtd-search-form" class="wy-form" action="../search.php" method="get">
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
                <a href="../index.php">scolaricx</a>
            </nav>



            <div class="wy-nav-content">
                <div class="rst-content">
                    <div role="navigation" aria-label="breadcrumbs navigation">
                        <ul class="wy-breadcrumbs">
                            <li><a href="../index.php">Docs</a> &raquo;</li>

                            <li><a href="index.php">Installation Instructions</a> &raquo;</li>

                            <li><a href="upgrading.php">Upgrading From a Previous Version</a> &raquo;</li>

                            <li>Upgrading From Beta 1.0 to Beta 1.1</li>
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

                        <div class="section" id="upgrading-from-beta-1-0-to-beta-1-1">
                            <h1>Upgrading From Beta 1.0 to Beta 1.1<a class="headerlink"
                                    href="#upgrading-from-beta-1-0-to-beta-1-1" title="Permalink to this headline">¶</a>
                            </h1>
                            <p>To upgrade to Beta 1.1 please perform the following steps:</p>
                            <div class="section" id="step-1-replace-your-index-file">
                                <h2>Step 1: Replace your index file<a class="headerlink"
                                        href="#step-1-replace-your-index-file" title="Permalink to this headline">¶</a>
                                </h2>
                                <p>Replace your main index.php file with the new index.php file. Note: If
                                    you have renamed your “system” folder you will need to edit this info in
                                    the new file.</p>
                            </div>
                            <div class="section" id="step-2-relocate-your-config-folder">
                                <h2>Step 2: Relocate your config folder<a class="headerlink"
                                        href="#step-2-relocate-your-config-folder"
                                        title="Permalink to this headline">¶</a></h2>
                                <p>This version of scolaricx now permits multiple sets of “applications”
                                    to all share a common set of backend files. In order to enable each
                                    application to have its own configuration values, the config directory
                                    must now reside inside of your application folder, so please move it
                                    there.</p>
                            </div>
                            <div class="section" id="step-3-replace-directories">
                                <h2>Step 3: Replace directories<a class="headerlink" href="#step-3-replace-directories"
                                        title="Permalink to this headline">¶</a></h2>
                                <p>Replace the following directories with the new versions:</p>
                                <ul class="simple">
                                    <li>drivers</li>
                                    <li>helpers</li>
                                    <li>init</li>
                                    <li>libraries</li>
                                    <li>scaffolding</li>
                                </ul>
                            </div>
                            <div class="section" id="step-4-add-the-calendar-language-file">
                                <h2>Step 4: Add the calendar language file<a class="headerlink"
                                        href="#step-4-add-the-calendar-language-file"
                                        title="Permalink to this headline">¶</a></h2>
                                <p>There is a new language file corresponding to the new calendaring class
                                    which must be added to your language folder. Add the following item to
                                    your version: language/english/calendar_lang.php</p>
                            </div>
                            <div class="section" id="step-5-edit-your-config-file">
                                <h2>Step 5: Edit your config file<a class="headerlink"
                                        href="#step-5-edit-your-config-file" title="Permalink to this headline">¶</a>
                                </h2>
                                <p>The original application/config/config.php file has a typo in it Open
                                    the file and look for the items related to cookies:</p>
                                <div class="highlight-ci">
                                    <div class="highlight">
                                        <pre><span></span><span class="nv">$conf</span><span class="p">[</span><span class="s1">&#39;cookie_prefix&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>
<span class="nv">$conf</span><span class="p">[</span><span class="s1">&#39;cookie_domain&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>
<span class="nv">$conf</span><span class="p">[</span><span class="s1">&#39;cookie_path&#39;</span><span class="p">]</span>    <span class="o">=</span> <span class="s2">&quot;/&quot;</span><span class="p">;</span>
</pre>
                                    </div>
                                </div>
                                <p>Change the array name from $conf to $config, like this:</p>
                                <div class="highlight-ci">
                                    <div class="highlight">
                                        <pre><span></span><span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;cookie_prefix&#39;</span><span class="p">]</span>        <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>
<span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;cookie_domain&#39;</span><span class="p">]</span>        <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span>
<span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;cookie_path&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="s2">&quot;/&quot;</span><span class="p">;</span>
</pre>
                                    </div>
                                </div>
                                <p>Lastly, add the following new item to the config file (and edit the
                                    option if needed):</p>
                                <div class="highlight-ci">
                                    <div class="highlight">
                                        <pre><span></span><span class="cm">/*</span>
<span class="cm">|------------------------------------------------</span>
<span class="cm">| URI PROTOCOL</span>
<span class="cm">|------------------------------------------------</span>
<span class="cm">|</span>
<span class="cm">| This item determines which server global</span>
<span class="cm">| should be used to retrieve the URI string. The</span>
<span class="cm">| default setting of &quot;auto&quot; works for most servers.</span>
<span class="cm">| If your links do not seem to work, try one of</span>
<span class="cm">| the other delicious flavors:</span>
<span class="cm">|</span>
<span class="cm">| &#39;auto&#39;         Default - auto detects</span>
<span class="cm">| &#39;path_info&#39;    Uses the PATH_INFO</span>
<span class="cm">| &#39;query_string&#39;        Uses the QUERY_STRING</span>
<span class="cm">*/</span>

<span class="nv">$config</span><span class="p">[</span><span class="s1">&#39;uri_protocol&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s2">&quot;auto&quot;</span><span class="p">;</span>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">

                        <a href="../tutorial/index.php" class="btn btn-neutral float-right" title="Tutoriel">Next
                            <span class="fa fa-arrow-circle-right"></span></a>


                        <a href="upgrading.php" class="btn btn-neutral" title="Upgrading"><span
                                class="fa fa-arrow-circle-left"></span>
                            Previous</a>

                    </div>


                    <hr />
                    <?php include '../include/footer.html' ?>
                </div>
            </div>

        </section>

    </div>





    <script type="text/javascript">
    var DOCUMENTATION_OPTIONS = {
        URL_ROOT: '../',
        VERSION: '1.0',
        COLLAPSE_INDEX: false,
        FILE_SUFFIX: '.php',
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