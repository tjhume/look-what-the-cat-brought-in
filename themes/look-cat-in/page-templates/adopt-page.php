<?php
/**
* Template Name: Adopt
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="adopt">
    <div class="hero-background" style="background-image: url('../wp-content/uploads/2020/02/adopt-hero.jpg')">
        
        <section class="hero" style="background-image: url('../wp-content/uploads/2020/02/adopt-hero.jpg')">
            <div class="cell-wrap">
                <div class="hero-content">
                    <h1>ADOPT</h1>
                    <div class="hero-buttons">
                        <div class="button-wrap">
                            <a href="#information" class="button">Information</a>
                            <a href="#application" class="button">Application</a>
                            <a href="#adoptable-cats" class="button">Adoptable Cats</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-social">
                <div class="hero-social-wrap">
                    <?php if(have_rows('social_icons', $options_id)): while(have_rows('social_icons', $options_id)):the_row(); 
                        $image = get_sub_field('image');
                        $alt = esc_attr($image['alt']);
                        $src = esc_url($image['url']);
                        $link = get_sub_field('link'); ?>

                        <a href="<?php echo $link; ?>" class="hero-social-icon" target="_blank"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                    <?php endwhile; endif; ?>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <section id="information">
            <h1>ADOPTION INFORMATION</h1>
            <div class="content">
                <div class="adopt-row">
                    <div class="adopt-box">
                        <div class="adopt-box-content">
                            <div class="adopt-overlay">
                                $75
                            </div>
                            <img class="main-content" src="../wp-content/uploads/2020/02/adult-cat.jpg" alt="Adult Cat">
                            <h3 class="main-content">Single Adult Cat</h3>
                        </div>
                    </div>
                    <div class="adopt-box">
                        <div class="adopt-box-content">
                            <div class="adopt-overlay">
                                $125
                            </div>
                            <img class="main-content" src="../wp-content/uploads/2020/02/pair-of-cats.jpg" alt="Pair of Adult Cats">
                            <h3 class="main-content">Pair of Adult Cats</h3>
                        </div>
                    </div>
                    <div class="adopt-box">
                        <div class="adopt-box-content">
                            <div class="adopt-overlay">
                                $100
                            </div>
                            <img class="main-content" src="../wp-content/uploads/2020/02/kitten.jpg" alt="Kittens">
                            <h3 class="main-content">Kittens</h3>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <section id="application" class="opacity">
            <h1>ADOPTION APPLICATION</h1>
            <div class="content">
                <div class="left">
                    <img src="" alt="">
                </div>
                <div class="right">
                    <p>Ready to start the adoption process? Fill out an application!</p>
                    <p>Things to keep in mind before you submit an application for adoption:</p>
                    <ul>
                        <li><strong>Submitting an application does not guarantee that you will be accepted as an adopter</strong>. We will contact you after you submit an application to further discuss the possibility of you adopting a cat from us.  We reserve the right to deny adoption to anyone for any reason.</li>
                        <li>Any cat you adopt must be an inside only cat.</li>
                        <li>Any cat you adopt must never be declawed.</li>
                        <li>If you decide that you cannot keep your adopted cat for any reason, you must return them to us. If you adopt a pair of cats together, you must return both.</li>
                        <li>You may not surrender one of our cats to a shelter that employs eutheniasa as a population control.</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </section>

        <section id="adoptable-cats">
            <h1>ADOPTABLE CATS</h1>
            <p>Coming soon!</p>
            <?php
                /*$opts = array(
                    'http'=>array(
                    'method'=>"GET",
                    'header'=>"X-API-KEY: cbc6298d-2f55-455a-a73e-28a3b65ac13d"
                    )
                );
                $context = stream_context_create($opts);
                $file = file_get_contents('https://www.shelterluv.com/api/v1/animals', false, $context);*/

                $file = '{"success":1,"animals":[{"ID":"","Internal-ID":"16940473","Status":"Service Out"},{"ID":"","Internal-ID":"17120787","Status":"Service Out"},{"ID":"","Internal-ID":"17683388","Status":"Service Out"},{"ID":"","Internal-ID":"17685410","Status":"Service Out"},{"ID":"","Internal-ID":"17685823","Status":"Service Out"},{"ID":"","Internal-ID":"17686323","Status":"Service Out"},{"ID":"","Internal-ID":"17686598","Status":"Service Out"},{"ID":"","Internal-ID":"17687329","Status":"Service Out"},{"ID":"","Internal-ID":"18156336","Status":"Service Out"},{"ID":"","Internal-ID":"18229649","Status":"Service Out"},{"ID":"","Internal-ID":"18240344","Status":"Service Out"},{"ID":"","Internal-ID":"18244641","Status":"Service Out"},{"ID":"","Internal-ID":"18246898","Status":"Service Out"},{"ID":"","Internal-ID":"18661629","Status":"Service Out"},{"ID":"","Internal-ID":"18662442","Status":"Service Out"},{"ID":"","Internal-ID":"18662970","Status":"Service Out"},{"ID":"","Internal-ID":"18663253","Status":"Service Out"},{"ID":"","Internal-ID":"18663773","Status":"Service Out"},{"ID":"","Internal-ID":"18664014","Status":"Service Out"},{"ID":"","Internal-ID":"18664193","Status":"Service Out"},{"ID":"","Internal-ID":"18664387","Status":"Service Out"},{"ID":"","Internal-ID":"18946620","Status":"Service Out"},{"ID":"","Internal-ID":"19005888","Status":"Service Out"},{"ID":"","Internal-ID":"19111717","Status":"Service Out"},{"ID":"","Internal-ID":"19232627","Status":"Service Out"},{"ID":"","Internal-ID":"19232706","Status":"Service Out"},{"ID":"","Internal-ID":"19232865","Status":"Service Out"},{"ID":"","Internal-ID":"19233036","Status":"Service Out"},{"ID":"","Internal-ID":"19233086","Status":"Service Out"},{"ID":"","Internal-ID":"19233089","Status":"Service Out"},{"ID":"","Internal-ID":"19233115","Status":"Service Out"},{"ID":"","Internal-ID":"19235056","Status":"Service Out"},{"ID":"","Internal-ID":"19240599","Status":"Service Out"},{"ID":"","Internal-ID":"19372979","Status":"Service Out"},{"ID":"","Internal-ID":"19373994","Status":"Service Out"},{"ID":"1","Internal-ID":"19526947","Name":"Alister","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1418284800,"Age":62,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-1983","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A27682327","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000364597082","Issuer":"24PetWatch","ImplantUnixTime":"1430118000"}],"LastIntakeUnixTime":"1430179020","Attributes":[],"LastUpdatedUnixTime":"1579626721"},{"ID":"2","Internal-ID":"19527008","Name":"Micah","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1418284800,"Age":62,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-1985","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A27682400","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000364596590","Issuer":"24PetWatch","ImplantUnixTime":"1430118000"}],"LastIntakeUnixTime":"1430179980","Attributes":[],"LastUpdatedUnixTime":"1579626730"},{"ID":"3","Internal-ID":"19527155","Name":"Bruster","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1416038400,"Age":63,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-2072","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A27978574","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000363323808","Issuer":"24PetWatch","ImplantUnixTime":"1432969200"}],"LastIntakeUnixTime":"1433027640","Attributes":[],"LastUpdatedUnixTime":"1579626743"},{"ID":"4","Internal-ID":"19527167","Name":"Petina","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1431414000,"Age":57,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-2084","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A28039702","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000403000132","Issuer":"24PetWatch","ImplantUnixTime":"1441436400"}],"LastIntakeUnixTime":"1433554020","Attributes":[],"LastUpdatedUnixTime":"1579626743"},{"ID":"5","Internal-ID":"19527248","Name":"Cloud","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1431932400,"Age":57,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-2114","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A28061039","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000402939574","Issuer":"24PetWatch","ImplantUnixTime":"1435474800"}],"LastIntakeUnixTime":"1433809500","Attributes":[],"LastUpdatedUnixTime":"1579626752"},{"ID":"6","Internal-ID":"19527460","Name":"Frizzle","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":null,"Status":"Transferred Out -- Pending Acceptance","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1432537200,"Age":56,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Description":"","PreviousIds":[{"IdValue":"DAPA-A-2219","IssuingShelter":"ACTion Programs for Animals","Type":"--"},{"IdValue":"A29277026","IssuingShelter":"ACTion Programs for Animals","Type":"Petpoint"}],"Microchips":[{"Id":"982000365676060","Issuer":"24PetWatch","ImplantUnixTime":"1439794800"}],"LastIntakeUnixTime":"1438645800","Attributes":[],"LastUpdatedUnixTime":"1579626771"},{"ID":"","Internal-ID":"19853128","Name":"Sunshine","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":"Female","Status":"Service Out","InFoster":false,"CurrentWeightPounds":"7.7162","Size":"","Altered":"Yes","DOBUnixTime":1564845280,"Age":6,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":"Domestic Shorthair","Color":"Calico","Pattern":"None","Description":"Needs, dental removal of decidious tooth. ","PreviousIds":[{"IdValue":"PMI-A-64","IssuingShelter":"Pima Medical Institute","Type":""}],"Microchips":[{"Id":"","Issuer":"Found Animals","ImplantUnixTime":""}],"LastIntakeUnixTime":"1580746480","Attributes":[],"LastUpdatedUnixTime":"1581615226"},{"ID":"","Internal-ID":"20323235","Name":"Minnie","LitterGroupId":null,"Type":"Dog","CurrentLocation":null,"Sex":"Female","Status":"Service Out","InFoster":false,"CurrentWeightPounds":"78.2","Size":"Large (60-99)","Altered":"Yes","DOBUnixTime":1423176955,"Age":60,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_dog.png","Photos":[],"Videos":[],"Breed":"Dogo Argentino","Color":"White\/None","Pattern":"None","Description":"","PreviousIds":[{"IdValue":"PMI-A-65","IssuingShelter":"Pima Medical Institute","Type":""}],"Microchips":[],"LastIntakeUnixTime":"1580943354","Attributes":[],"LastUpdatedUnixTime":"1581615204"},{"ID":"","Internal-ID":"20456534","Name":"Skully","LitterGroupId":null,"Type":"Cat","CurrentLocation":null,"Sex":"Male","Status":"Service Out","InFoster":false,"CurrentWeightPounds":"16.4","Size":"","Altered":"Yes","DOBUnixTime":1565551317,"Age":6,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":"Domestic Shorthair","Color":"White\/Brown","Pattern":"None","Description":"","PreviousIds":[{"IdValue":"PMI-A-68","IssuingShelter":"Pima Medical Institute","Type":""}],"Microchips":[{"Id":"","Issuer":"Did Not Attempt to Scan","ImplantUnixTime":""}],"LastIntakeUnixTime":"1581452517","Attributes":[],"LastUpdatedUnixTime":"1581615186"},{"ID":"7","Internal-ID":"20530237","Name":"Willow","LitterGroupId":null,"Type":"Cat","CurrentLocation":{"Tier1":"shelter building","Tier2":"Corner Room"},"Sex":"Female","Status":"Welfare Assessment","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1481493288,"Age":38,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":"Domestic Shorthair","Color":"Brown","Pattern":"Tabby","AdoptionFeeGroup":{"Id":"201497","Name":"Adult Cat","Price":"100.00","Discount":0,"Tax":0},"Description":"","PreviousIds":[],"Microchips":[{"Id":"981 020 033 339 853","Issuer":"Found Animals","ImplantUnixTime":""}],"LastIntakeUnixTime":"1581198888","Attributes":[],"LastUpdatedUnixTime":"1582345859"},{"ID":"8","Internal-ID":"20530398","Name":"Rolle","LitterGroupId":null,"Type":"Cat","CurrentLocation":{"Tier1":"shelter building","Tier2":"intake room"},"Sex":"Male","Status":"Welfare Assessment","InFoster":false,"CurrentWeightPounds":"","Size":"","Altered":"Yes","DOBUnixTime":1486936820,"Age":36,"CoverPhoto":"https:\/\/www.shelterluv.com\/sites\/default\/files\/default_images\/default_cat.png","Photos":[],"Videos":[],"Breed":null,"Color":"","Pattern":"None","Description":"","PreviousIds":[],"Microchips":[{"Id":"","Issuer":"","ImplantUnixTime":""}],"LastIntakeUnixTime":"1580335220","Attributes":[],"LastUpdatedUnixTime":"1581544820"}],"has_more":false,"total_count":"46"}';

                $animals = json_decode($file)->{'animals'};

                //Looping through all animals with status of "Welfare Assessment." Create a new status called "Adoptable" on Shelterluv.
                //Can then access adoptable cats and their individual properties (like $animal->{'Name'} below).
                foreach($animals as $animal){
                    if($animal->{'Status'} === 'Welfare Assessment'){
                        echo $animal->{'Name'};
                    }
                }
            ?>
        </section>

    </div>
</div>

<?php get_footer(); ?>