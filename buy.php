<?php include('header.php'); ?>

<nav aria-label="breadcrumb" class="ic-breadcrumb">
    <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buy</li>
            </ol>
    </div>
</nav>

<section id="ic-buy" class="pb-0">
    <div class="container">
        <h1>Listings from Hamilton Homes Real Estate</h1>
        <form id="search-box"action="">
            <div id="searchCity">
                <input type="text" class="form-control" placeholder="City, Area, Postal Code Or Address" id="searchCity">
            </div>
            <div id="buy-filter">
                <div class="buy-filter-row">
                    <div class="ic-col">
                        <ul id="buy-filter-price">
                            <li class="buy-dropdown">
                                <div class="price-buy-filter">Price</div>
                                <ul class="buy-dropdown-menu">
                                    <li>
                                        <input type="number" placeholder="Min Price">
                                    </li>
                                    <li>to</li>
                                    <li>
                                        <input type="number" placeholder="Min Price">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-col">
                        <span class="theme-select">
                            <select class="form-control search_option" name="search_option">
                                <option value="low_to_high">Beds</option>
                                <option value="high_to_low">Beds</option>
                            </select>
                        </span>
                    </div>
                    <div class="ic-col">
                        <span class="theme-select">
                            <select class="form-control search_option" name="search_option">
                                <option value="low_to_high">Beds</option>
                                <option value="high_to_low">Beds</option>
                            </select>
                        </span>
                    </div>
                    <div class="ic-col advance-filter">
                        <a href="#ic-advance-filter" id="ic-advanced-search">Advance Search</a>
                    </div>
                </div>
            </div>
        </form>
        <form>
            <div id="ic-advance-filter">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="ic-single-max-min text-center">
                            <h5>SQUARE FOOTAGE</h5>
                            <ul class="buy-dropdown-menu">
                                <li>
                                    <span class="theme-select">
                                        <select class="form-control search_option" name="search_option">
                                            <option value=""> Min</option><option value="500"> 500+</option><option value="1000"> 1,000+</option><option value="1500"> 1,500+</option><option value="2000"> 2,000+</option><option value="2500"> 2,500+</option><option value="3000"> 3,000+</option><option value="3500"> 3,500+</option><option value="4000"> 4,000+</option><option value="4500"> 4,500+</option><option value="5000"> 5,000+</option><option value="5500"> 5,500+</option><option value="6000"> 6,000+</option><option value="6500"> 6,500+</option><option value="7000"> 7,000+</option><option value="7500"> 7,500+</option><option value="8000"> 8,000+</option><option value="8500"> 8,500+</option><option value="9000"> 9,000+</option><option value="9500"> 9,500+</option><option value="10000"> 10,000+</option>
                                        </select>
                                    </span>
                                </li>
                                <li>to</li>
                                <li>
                                    <span class="theme-select">
                                        <select class="form-control search_option" name="search_option">
                                            <option value=""> Max</option><option value="500"> 500+</option><option value="1000"> 1,000+</option><option value="1500"> 1,500+</option><option value="2000"> 2,000+</option><option value="2500"> 2,500+</option><option value="3000"> 3,000+</option><option value="3500"> 3,500+</option><option value="4000"> 4,000+</option><option value="4500"> 4,500+</option><option value="5000"> 5,000+</option><option value="5500"> 5,500+</option><option value="6000"> 6,000+</option><option value="6500"> 6,500+</option><option value="7000"> 7,000+</option><option value="7500"> 7,500+</option><option value="8000"> 8,000+</option><option value="8500"> 8,500+</option><option value="9000"> 9,000+</option><option value="9500"> 9,500+</option><option value="10000"> 10,000+</option>
                                        </select>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="ic-single-max-min text-center">
                            <h5>YEAR BUILT</h5>
                            <ul class="buy-dropdown-menu">
                                <li>
                                    <span class="theme-select">
                                        <select class="form-control search_option" name="search_option">
                                            <option value=""> Min</option><option value="500"> 500+</option><option value="1000"> 1,000+</option><option value="1500"> 1,500+</option><option value="2000"> 2,000+</option><option value="2500"> 2,500+</option><option value="3000"> 3,000+</option><option value="3500"> 3,500+</option><option value="4000"> 4,000+</option><option value="4500"> 4,500+</option><option value="5000"> 5,000+</option><option value="5500"> 5,500+</option><option value="6000"> 6,000+</option><option value="6500"> 6,500+</option><option value="7000"> 7,000+</option><option value="7500"> 7,500+</option><option value="8000"> 8,000+</option><option value="8500"> 8,500+</option><option value="9000"> 9,000+</option><option value="9500"> 9,500+</option><option value="10000"> 10,000+</option>
                                        </select>
                                    </span>
                                </li>
                                <li>to</li>
                                <li>
                                    <span class="theme-select">
                                        <select class="form-control search_option" name="search_option">
                                            <option value=""> Max</option><option value="500"> 500+</option><option value="1000"> 1,000+</option><option value="1500"> 1,500+</option><option value="2000"> 2,000+</option><option value="2500"> 2,500+</option><option value="3000"> 3,000+</option><option value="3500"> 3,500+</option><option value="4000"> 4,000+</option><option value="4500"> 4,500+</option><option value="5000"> 5,000+</option><option value="5500"> 5,500+</option><option value="6000"> 6,000+</option><option value="6500"> 6,500+</option><option value="7000"> 7,000+</option><option value="7500"> 7,500+</option><option value="8000"> 8,000+</option><option value="8500"> 8,500+</option><option value="9000"> 9,000+</option><option value="9500"> 9,500+</option><option value="10000"> 10,000+</option>
                                        </select>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h5 class="checkobx-heading">PROPERTY TYPE</h5>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">All Properties
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Single Family
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Condo/Coop
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Land
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Income
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Manuf/Mobile
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Residential
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Office
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Special Purpose
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Comercial
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Retail
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Manufactured Home On Real Property
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Timeshare
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Warehouse
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h5 class="checkobx-heading">STATUS</h5>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Active
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Active Under Contract
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Condo/Coop
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Land
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Income
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Manuf/Mobile
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Residential
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Office
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Special Purpose
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Comercial
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Retail
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Manufactured Home On Real Property
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Timeshare
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-property-type checkbox-buy-filter">
                        <div class="single-checkbox-buy-filter">
                            <label class="checkbox-container">Warehouse
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="ic-btn-black btn ic-refine-search">Refine Search</button>
            </div>  
        </form>
        <!-- Map and map result -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div id="buy-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746984.465708819!2d88.10026026270491!3d23.490583053663357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1560587958967!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div id="map-result">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-1.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-2.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-3.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-4.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-5.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-buy-map">
                                <div class="buy-img-part">
                                    <img src="images/buy/buy-6.png" alt="">
                                    <div class="text">Active</div>
                                </div>
                                <div class="buy-text-part">
                                    <p class="price">$19,900,000</p>
                                    <nav aria-label="breadcrumb" class="buy-bed-bath">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">9 Beds</a></li>
                                            <li class="breadcrumb-item"><a href="#">15 Baths </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">26,000 FT2</li>
                                        </ol>
                                    </nav>
                                    <p class="area">
                                    Maison Roger<br/>
            Beverly Hills Post Office, CA

                                    </p>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination mx-auto ic-buy-pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Required JavaScript Libraries -->
<?php include('footer.php'); ?>