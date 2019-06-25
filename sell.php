<?php include('header.php'); ?>

<nav aria-label="breadcrumb" class="ic-breadcrumb">
    <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sell</li>
            </ol>
    </div>
</nav>

<section id="ic-sell-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div id="ic-sell-top-left">
                    <h3>Property Valuation</h3>
                    <p>Thinking about selling your home? It's important to know how much your property is worth in today's market to choose an appropriate selling price.</p>
                    <form class="needs-validation" novalidate>
                        <div class="input-group flex-nowrap mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Location" aria-label="Username" aria-describedby="addon-wrapping">
                            <div class="input-group-prepend">
                                <button class="input-group-text locate-btn"  id="addon-wrapping" aria-hidden="true">Locate</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="theme-select">
                                <select class="form-control search_option" name="search_option">
                                    <option value="low_to_high">Select Property Category Type</option>
                                    <option value="high_to_low">Select Property Category Type</option>
                                </select>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Beds</label>
                                <span class="theme-select">
                                    <select class="form-control search_option" name="search_option">
                                        <option value="low_to_high">Select Beds</option>
                                        <option value="high_to_low">Select Beds</option>
                                    </select>
                                </span>
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Baths</label>
                                <span class="theme-select">
                                    <select class="form-control search_option" name="search_option">
                                        <option value="low_to_high">Select Baths</option>
                                        <option value="high_to_low">Select Baths</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustom01">sq.ft</label>
                                <span class="theme-select">
                                    <select class="form-control search_option" name="search_option">
                                        <option value="low_to_high">Select Beds</option>
                                        <option value="high_to_low">Select Beds</option>
                                    </select>
                                </span>
                            </div>
                            <div class="col-md-6 mb-4">
                            <label for="validationCustom01">condition</label>
                                <span class="theme-select">
                                    <select class="form-control search_option" name="search_option">
                                        <option value="low_to_high">Select Baths</option>
                                        <option value="high_to_low">Select Baths</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <button class="ic-btn-black btn submit-btn-sell" type="submit">Submit form</button>
                    </form>
                </div>   
            </div>
            <div class="col-md-6 col-lg-6">
                <div id="ic-sell-top-right">
                    <ul>
                        <li class="active"><a href="">Estimate<span></span></a></li>
                        <li><a href="">Low<span></span></a></li>
                        <li><a href="">High<span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ic-sell-bottom">
    <div class="container"> 
        <h1>Want a more accurate price estimate?</h1>
        <p>Due to MLS rules, this tool depends on active listings to give you an idea what your home might be worth. Our agents have access to sold listings data, market 
statistics and additional information that can contribute to a much more accurate estimate.</p>
        <a href="" class="ic-btn-black">Get an in person assesment</a>
    </div>
</section>
<!-- Required JavaScript Libraries -->
<?php include('footer.php'); ?>