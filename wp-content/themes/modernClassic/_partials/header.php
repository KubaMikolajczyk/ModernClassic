<header id="masthead" class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav id="nav" class="navbar align-items-center justify-content-between p-0">

                    <div class="navigation row justify-content-between align-items-center w-100">

                        <div class="col-md-4">
                            <div class="menu-burger-box d-flex justify-content-start align-items-end">
                                <div class="burger-container" onclick="crossBurger(this)">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                                <h3>Menu</h3>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="header-logo-box text-center">
                                <a title="<?php bloginfo("name")?>"  href="<?php echo site_url(); ?>">
                                    <img alt="Logo <?php bloginfo("name")?>" src="<?php echo get_field('logo','option'); ?>"/>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="search-field-box">
                                <form action="submit">
                                    <div class="search-field d-flex align-items-center justify-content-end">
                                        <button><i class="icon-search-3"></i></button>
                                        <input placeholder="Szukaj" type="text">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>




