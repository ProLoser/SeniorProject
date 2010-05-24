-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2010 at 04:45 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `isvonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `addons`
--


-- --------------------------------------------------------

--
-- Table structure for table `addon_combinations`
--

CREATE TABLE `addon_combinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trip_id` (`trip_id`),
  KEY `addon_id` (`addon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `addon_combinations`
--


-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `destinations`
--


-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `office_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `locations`
--


-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `location` mediumtext NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='United States, Australia, United Kingdom' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `offices`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_title` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `contents` mediumtext NOT NULL,
  `sidebar_contents` mediumtext,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(100) NOT NULL,
  `location_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `location_id` (`location_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` VALUES(1, 'Australia Adventure', 'Australia Adventure', 'au-adv', '		<h1>\r\n		Australia Trip Information\r\n		</h1>\r\n		<h2>\r\n        About\r\n        </h2>\r\n        <p class="about">\r\n		You will travel throughout along Australia''s beautiful East Coast between Sydney and Cairns, exploring the World Heritage Areas of the Blue Mountains, Fraser Island which is the world''s largest sand island, the Great Barrier Reef and Wet Tropics areas, in addition to primary rainforests, wild rivers, pristine beaches and the cultural attractions of Sydney and Cairns. \r\n		</p>\r\n        \r\n        <h3>Volunteer</h3>\r\n        <!-- Volunteer Slider --> \r\n            <div id="sidebarMiniSliderContainer">                        \r\n            \r\n                <!-- slide 1 --> \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/Australia/aus-vol01.jpg"> \r\n                     <span class="desc">\r\n                     	<strong>Nature Sanctuary:</strong> <em>Make a difference to Australia''s wildlife!</em><br />\r\nISV has several projects located in nature sanctuaries. The goal is to conserve native animals in a relatively natural setting. Primary tasks vary and can include building and maintaining animal enclosures, fence building, vegetation removal, tree planting, and surveying. All of these tasks are directly related to the establishment or maintenance of the sanctuary and the species within it.\r\n                     </span>\r\n                </a> \r\n                \r\n                <!-- slide 2 -->                         \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/Australia/aus-vol02.jpg"> \r\n                    <span class="desc"> \r\n                        <strong>Habitat Restoration:</strong> <em>Volunteer in unique Australian landscapes!</em><br /> \r\nISV is dedicated to assisting with numerous habitat restoration projects throughout Australia on public and privately owned land. Get ready to get your hands dirty and see the results of your efforts by helping to rehabilitate land. The goal of these projects is to help restore important habitats through native revegetation (planting) and exotic species removal. Tasks may also focus on specific issues such as soil erosion and salinity. \r\n                    </span> \r\n                </a> \r\n                \r\n                <!-- slide 3 --> \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/Australia/aus-vol03.jpg"> \r\n                    <span class="desc"> \r\n                        <strong>Scientific Research:</strong> <em>Collect data to make a difference!</em><br /> \r\nBe part of important research that is critical to the success of conservation management plans. ISV has been involved in both baseline surveys and long-term studies. The primary goal of this type of project is to obtain data that will be used to assist with conservation of species and ecosystems. Primary tasks include surveying and monitoring (such as measuring size, age and abundance of plants and animals), experimental set-up, and other data collection.\r\n                    </span> \r\n                </a> \r\n                \r\n                <!-- slide 4 --> \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/Australia/aus-vol04.jpg"> \r\n                    <span class="desc"> \r\n                        <strong>Outdoor Education:</strong> <em>Help educate and inspire others!</em><br /> \r\nGet involved to help develop or operate existing outdoor education facilities that teach others about sustainability. The goal of these projects is to facilitate understanding and appreciation of the natural world and the importance of taking care of it. Opportunities exist for volunteers to be involved in facilities design and development. Other volunteer tasks vary by project and can include weeding, planting, light construction, nature trail building and property maintenance.\r\n                    </span> \r\n                </a> \r\n                \r\n                <div class="btnContainer"> \r\n                    <div class="btn">1</div> \r\n                    <div class="btn">2</div> \r\n                    <div class="btn">3</div> \r\n                    <div class="btn">4</div> \r\n                </div>  \r\n            \r\n            </div> \r\n        \r\n        <h3>Adventure Tour</h3>\r\n  		<div id="gallerycontents" class="twocolumn">\r\n			<!-- Page Gallery -->\r\n			<div class="slideshowgallery">\r\n			<div id="main_image"></div>\r\n			<ul class="gallery_unstyled">\r\n            \r\n    <li class="active"><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day01.jpg" title="Day 1 - Arrive in Sydney" alt="Day 1 - Arrive in Sydney" longdesc="<strong>Day 1 &#8211; Arrive in Sydney</strong><br /> Return to Sydney from your Conservation Volunteer Project. Unwind with a free night out in Sydney (host of the 2000 Olympic Games)." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day02.jpg" title="Day 2 - Sydney (Free Day / Harbor Cruise)" alt="Day 2 - Sydney (Free Day / Harbor Cruise)" longdesc="<strong>Day 2 &#8211; Sydney (Free Day / Harbor Cruise)</strong><br /> Free Day to explore the best of Sydney including Darling Harbor, the historical Rocks area, the Royal Botanical Gardens, Sydney Opera House, beautiful beaches and much more. You may want to visit the Sydney Tower or Sydney Aquarium and in the evening take a sunset cocktail cruise in one of the most famous harbors in the world (ISV Optional Activity Package)." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day03.jpg" title="Day 3 &#8211; *Blue Mountains (Wildlife Park / Rappelling)" alt="Day 3 &#8211; *Blue Mountains (Wildlife Park / Rappelling)" longdesc="<strong>Day 3 &#8211; *Blue Mountains (Wildlife Park / Rappelling)</strong><br /> Today we drive 40 miles west of Sydney to the breathtaking Blue Mountains. On the way we stop at Featherdale Wildlife Park (ISV Included Activity) to see Australia&#39;s unique wildlife such as kangaroos and koalas. In the Blue Mountains we will get to see the famous &quot;Three Sisters&quot; rock formations, and in the afternoon test your courage by rappelling (ISV Optional Activity Package). The scenic sandstone cliffs and gorges of the Blue Mountains are an excellent rappelling location for beginners and experts alike! After dinner, we will take an overnight trip to Byron Bay." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day04.jpg" title="Day 4 &#8211; Byron Bay (Surf Lessons)" alt="Day 4 &#8211; Byron Bay (Surf Lessons)" longdesc="<strong>Day 4 &#8211; Byron Bay (Surf Lessons)</strong><br /> Today we experience the friendly and eclectic culture of beautiful Byron Bay. Learn to surf at the beautiful Byron Bay Beach (ISV Optional Activity Package), and you might be lucky enough to see dolphins or migrating whales. Explore the town or hike to Cape Byron (Australia''s eastern most point)." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day05.jpg" title="Day 5 &#8211; Byron Bay (Free Day)" alt="Day 5 &#8211; Byron Bay (Free Day)" longdesc="<strong>Day 5 &#8211; Byron Bay (Free Day)</strong><br /> Today is a free day to enjoy the beautiful town of Byron Bay and practice your new surfing skills! You may want to relax at the beach, explore the town, trek to the lighthouse at Cape Byron (Australia''s eastern most point) for views of the Pacific Ocean or take part in a number of additional activities available." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day06.jpg" title="Day 6 &#8211; Byron Bay to *Fraser Island (Lake Wabby)" alt="Day 6 &#8211; Byron Bay to *Fraser Island (Lake Wabby)" longdesc="<strong>Day 6 &#8211; Byron Bay to *Fraser Island (Lake Wabby)</strong><br /> Get ready to discover the amazing Fraser Island - the largest sand island in the world. Discover the diversity and natural beauty as you explore spectacular surf beaches and stunning cliffs of colored sands." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day07.jpg" title="Day 7 &#8211; *Fraser Island (Indian Head Tour)" alt="Day 7 &#8211; *Fraser Island (Indian Head Tour)" longdesc="<strong>Day 7 &#8211; *Fraser Island (Indian Head Tour)</strong><br /> Today we will discover the best of Fraser Island on the Indian Head Full-Day Tour (ISV Included Activity). We will cruise along the amazing 75-mile beach to swim in Eli Creek, see the famous Maheno shipwreck and climb to the top of Indian Head for magnificent views of the surrounding sand below, beaches and the Pacific Ocean." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day08.jpg" title="Day 8 &#8211; *Fraser Island to Airlie Beach (Lake Wabby & Birrabeen)" alt="Day 8 &#8211; *Fraser Island to Airlie Beach (Lake Wabby & Birrabeen)" longdesc="<strong>Day 8 &#8211; *Fraser Island to Airlie Beach (Lake Wabby & Birrabeen)</strong><br /> Today we continue to experience the amazing scenery and wildlife (e.g. dingoes) of Fraser Island. This morning you will have the option to trek over sand dunes and swim in the beautiful emerald-green Lake Wabby (ISV Optional Activity Package), the deepest of Fraser Islands lakes. Tonight, we leave for the backpacker town of Airlie Beach, gateway to the Whitsunday Islands." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day09.jpg" title="Day 9 &#8211; Airlie Beach (Ocean Rafting)" alt="Day 9 &#8211; Airlie Beach (Ocean Rafting)" longdesc="<strong>Day 9 &#8211; Airlie Beach (Ocean Rafting)</strong><br /> Airlie Beach is the perfect place to soak up the sun and the warm tropical weather! Today you&#39;ll have the option to go Ocean Rafting (ISV Optional Activity Package), to Whitehaven Beach. Experience what is known as the whitest sand in the world at Whitehaven Beach. On this Ocean Rafting adventure participants will also go snorkeling and take a guided walk on Whitsunday Island. This evening, enjoy the nightlife of this lively town filled with international travelers." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day10.jpg" title="Day 10 &#8211; Airlie Beach to Cairns" alt="Day 10 &#8211; Airlie Beach to Cairns" longdesc="<strong>Day 10 &#8211; Airlie Beach to Cairns</strong><br /> We continue north to the city of Cairns, gateway to the Great Barrier Reef, and the adrenaline capital of Australia." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day11.jpg" title="Day 11 &#8211; Cairns (Reef Teach & Tjapukai Aboriginal Cultural Park)" alt="Day 11 &#8211; Cairns (Reef Teach & Tjapukai Aboriginal Cultural Park)" longdesc="<strong>Day 11 &#8211; Cairns (Reef Teach & Tjapukai Aboriginal Cultural Park)</strong><br /> In the morning we will visit Tjapukai Aboriginal Cultural Park (ISV Included Activity) where we will learn about the history, art, dance and way of life of Australia''s indigenous people. This afternoon we will visit ''Reef Teach'' (ISV Included Activity), a fun information session on the Great Barrier Reef which will prepare you for your snorkeling trip tomorrow." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day12.jpg" title="Day 12 &#8211; Cairns (*Great Barrier Reef)" alt="Day 12 &#8211; Cairns (*Great Barrier Reef)" longdesc="<strong>Day 12 &#8211; Cairns (*Great Barrier Reef)</strong><br /> We spend the day on the Great Barrier Reef for a full day of snorkeling at two different reefs (ISV Included Activity). There&#39;s also the opportunity to scuba dive at an additional cost (even if you have never been scuba diving before!) Here you will explore the diversity of marine life from the largest reef of living coral in the world. Some participants will take the option to spend the day and night onboard another vessel called &quot;Kangaroo Explorer&quot;** and take advantage of an extra day of diving and snorkeling. (Limited availability)" /></li>\r\n    <li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day13.jpg" title="Day 13 &#8211; Cairns (Free Day)" alt="Day 13 &#8211; Cairns (Free Day)" longdesc="<strong>Day 13 &#8211; Cairns (Free Day)</strong><br /> A free day to explore the many attractions in Cairns & surrounding areas. Options available include spending an extra day on the Great Barrier Reef, skydiving, bungee jumping or exploring other areas in or around Cairns including Cape Tribulation where two World Heritage areas meet: the *Daintree Rainforest and the * Great Barrier Reef.. Those participants who opted to spend the night on the &quot;Kangaroo Explorer&quot; (see above) will return this afternoon." /></li>\r\n	<li><img src="/SeniorProject/img/adventure/Australia/Adv_Aus-Day14.jpg" title="Day 14 &#8211; Tully River" alt="Day 14 &#8211; Tully River" longdesc="<strong>Day 14 &#8211; Tully River</strong><br /> Depart for the Tully River to white water raft grade III and IV rapids (ISV Included Activity) through pristine tropical rainforest in yet another World Heritage area, the *Wet Tropics!" /></li>\r\n			</ul>\r\n			</div>\r\n		</div>	\r\n		<div class="clear"></div>\r\n        \r\n        <h3 id="OAP_title">Optional Activity Package (OAP)</h3>\r\n      	 	  <!-- ACCORDION IMAGE ROTATOR -->\r\n          <div id="accordionContainer_advmain">\r\n            \r\n              <!-- slide 1 -->\r\n              <div id="slide1" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg1" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/Australia/sydney.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Sydney Harbour</h3>\r\n                      <p>Enjoy the amazing Sydney Harbour on board this<br />\r\n                      sunset cocktail cruise.</p> \r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/Australia/sydneystrip.jpg"></div>\r\n                  <p class="slideDesc_advmain">Sydney<br />Harbour</p>  \r\n              </div>\r\n                                                          \r\n              <!-- slide 2 -->\r\n              <div id="slide2" class="accordionImgDiv_advmain"> \r\n                  <a href="index.html" id="slideimg2" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/Australia/bluemountains.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Blue Mountains</h3>\r\n                      <p>Experience the rush of rappelling down the beautiful<br /> \r\n                        sandstone cliffs of the World Heritage listed Blue Mountains.</p> \r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/Australia/bluemountainsstrip.jpg"></div>\r\n                  <p class="slideDesc_advmain">Blue<br />Mountains</p> \r\n              </div>\r\n                                \r\n              <!-- slide 3 -->\r\n              <div id="slide3" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg3" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/Australia/bryonbay.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Bryon Bay</h3>\r\n                      <p>Surfing is an Australian tradition and Byron Bay<br />\r\n                      is one of Australia''s most popular surfing spots.</p> \r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/Australia/bryonbaystrip.jpg"></div>\r\n                  <p class="slideDesc_advmain">Bryon <br />Bay</p>  \r\n              </div>\r\n                                          \r\n              <!-- slide 4 -->\r\n              <div id="slide4" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg4" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/Australia/frasierisland.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Frasier Island</h3>\r\n                      <p>Lake Wabby is a stunning emerald freshwater lake<br /> \r\n                      on the amazing Fraser Island.</p> \r\n                  </div>                   \r\n                 <div class="slideStrip_advmain"  title="/SeniorProject/img/adventure/Australia/frasierislandstrip.jpg"></div>\r\n                 <p class="slideDesc_advmain">Frasier<br />Island</p>  \r\n              </div>           \r\n                \r\n              <!-- slide 5 -->\r\n              <div id="slide5" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg5" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/Australia/whitsundayislands.jpg"></a> \r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Whitsunday Islands</h3>\r\n                      <p>This is an adrenaline filled day eco-adventure tour<br />\r\n                      through the Whitsunday Islands to Whitehaven beach.</p> \r\n                  </div>    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/Australia/whitsundayislandsstrip.jpg"></div>\r\n                  <p class="slideDesc_advmain">Whitsunday<br />Islands</p>  \r\n              </div>\r\n          </div> <!-- accordionContainer -->\r\n\r\n		<h3>Fiji Excursion</h3>\r\n        	<div class="mportfolio_exc mportfoliocatbg_exc">\r\n        		<a href="#"><img src="/SeniorProject/img/adventure/Australia/Fiji_Excursion.jpg" class="fade" /></a>\r\n        	</div>\r\n		\r\n		<div class="clear"></div>\r\n', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0);
INSERT INTO `pages` VALUES(2, 'Costa Rica', 'Costa Rica Trip Information', 'costarica-trip', '		<h1>\r\n		Costa Rica Trip Information\r\n		</h1>\r\n		<h2>\r\n        About\r\n        </h2>\r\n        <p class="about">\r\n		Travel throughout Costa Rica from the Pacific to the Caribbean coast discovering primary tropical rainforests, volcanic landscapes, coral reefs, national parks, and plenty of exotic wildlife. Stay in some of the best eco-lodges in the country as you explore and experience the natural wonders in the jewel of Central America.\r\n		</p>\r\n        \r\n        <h3>Volunteer</h3>\r\n        <!-- Volunteer Slider --> \r\n            <div id="sidebarMiniSliderContainer">                        \r\n            \r\n                <!-- slide 1 --> \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/CostaRica/cr-vol01.jpg"> \r\n                     <span class="desc">\r\n                     	<strong>Conservation:</strong> <em>Be part of researching, data collection and monitoring endangered habitats and species!</em><br />\r\nCosta Rica is known as a country of outstanding biodiversity and natural beauty; Costa Ricans desire to keep their country this way. Scientists, biologists and locals are combining their efforts to try to protect the environment. By volunteering in Costa Rica, you will be part of important research that is critical to the success of long-term conservation management strategies.\r\n                     </span>\r\n                </a> \r\n                \r\n                <!-- slide 2 -->                         \r\n                <a href="#" class="slide asyncImgLoad" title="/SeniorProject/img/adventure/CostaRica/cr-vol02.jpg"> \r\n                    <span class="desc"> \r\n                        <strong>Community Support Projects:</strong> <em>Get ''Hands-On'' and Volunteer in a Costa Rican Village!</em><br /> \r\nIf you volunteer in one of ISV&rsquo;s selected Costa Rican communities you will become part of realizing the community&rsquo;s vision for sustainable development. All community- support projects involve home-stays, which provide for amazing cultural exchanges between you and your host family. You will play an important role by assisting with many tasks such as: organic farming, painting murals at schools or local buildings, supporting local product initiatives (such as medicinal plants, coffee and oranges). \r\n                    </span> \r\n                </a> \r\n                \r\n                <div class="btnContainer"> \r\n                    <div class="btn">1</div> \r\n                    <div class="btn">2</div> \r\n                </div>  \r\n            \r\n            </div> \r\n        \r\n        <h3>Adventure Tour</h3>\r\n  		<div id="gallerycontents" class="twocolumn">\r\n			<!-- Page Gallery -->\r\n			<div class="slideshowgallery">\r\n			<div id="main_image"></div>\r\n			<ul class="gallery_unstyled">\r\n            \r\n    <li class="active"><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day01.jpg" title="Day 1 - Arrive in Heredia" alt="Day 1 &ndash; Arrive in Heredia" longdesc="<strong>Day 1 &ndash; Arrive in Heredia</strong><br /> Say goodbye to your volunteer project and return to the city of Heredia. After the ISV Adventure Tour Orientation, which will take place in the afternoon, relax and explore the city." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day02.jpg" title="Day 2 &ndash; Heredia to Rio Pacuare" alt="Day 2 &ndash; Heredia to Rio Pacuare" longdesc="<strong>Day 2 &ndash; Heredia to Rio Pacuare</strong><br /> Get ready for high-adrenaline whitewater rafting on the Pacuare River, Class III and IV rapids (ISV Included Activity). The Pacuare is rated one of the top five rivers in the world to raft. Along the way, we will stop to swim in secluded, natural swimming holes. Overnight in the incredible Rios Tropicales Jungle Lodge and experience a traditional Costa Rican meal prepared by the local river guides. " /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day03.jpg" title="Day 3 &ndash; Rio Pacuare to Gandoca Manzanillo Wildlife Refuge" alt="Day 3 &ndash; Rio Pacuare to Gandoca Manzanillo Wildlife Refuge" longdesc="<strong>Day 3 &ndash; Rio Pacuare to Gandoca Manzanillo Wildlife Refuge</strong><br /> Start the day with a hearty breakfast, then more exhilarating white water rafting. This afternoon we will travel southeast to the heart of the Gandoca Manzanillo Wildlife Refuge. For two amazing nights, you will stay in a unique environmentally friendly lodge while enjoying the Caribbean Sea, golden sand, coconuts and the reggae-vibe of paradise!" /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day04.jpg" title="Day 4 &ndash; Gandoca Manzanillo Wildlife Refuge" alt="Day 4 &ndash; Gandoca Manzanillo Wildlife Refuge" longdesc="<strong>Day 4 &ndash; Gandoca Manzanillo Wildlife Refuge</strong><br /> Experience the rain forest, and be awakening by the howler monkeys. Today''s eco-adventure will involve a hike into Manzanillo Wildlife Refuge (ISV included Activity) and relaxing free afternoon." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day05.jpg" title="Day 5 &ndash; Southern Caribbean to Tortuguero" alt="Day 5 &ndash; Southern Caribbean to Tortuguero" longdesc="<strong>Day 5 &ndash; Southern Caribbean to Tortuguero</strong><br /> Travel to Tortuguero. Getting there is half the experience as we must take a motorboat from CaÃ±o Blanco and travel along the canals for 1 1/2 hrs to reach our final destination. Tortuguero is famous for its sea turtles and National Park. In the afternoon, we will explore Tortuguero Village and visit the sea-turtle information centre, the CCC." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day06.jpg" title="Day 6 &ndash; Tortuguero" alt="Day 6 &ndash; Tortuguero" longdesc="<strong>Day 6 &ndash; Tortuguero</strong><br /> Get ready for another amazing day for wildlife viewing. Watch for sloths and monkeys in the forest while exploring the amazing canals and lagoons of Tortuguero National Park by kayak and also in motor boat (ISV Included Activity)." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day07.jpg" title="Day 7 &ndash; Tortuguero to La Fortuna (Volcan Arenal)" alt="Day 7 &ndash; Tortuguero to La Fortuna (Volcan Arenal)" longdesc="<strong>Day 7 &ndash; Tortuguero to La Fortuna (Volcan Arenal)</strong><br /> Travel to Volcan Arenal near the small town of La Fortuna. Volcan Arenal is the most active volcano in all of Costa Rica. In the evening, those with the ISV Optional Activity Package can relax in natural thermal springs and watch out for nature''s fireworks." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day08.jpg" title="Day 8 &ndash; La Fortuna" alt="Day 8 &ndash; La Fortuna" longdesc="<strong>Day 8 &ndash; La Fortuna</strong><br />\r\nDiscover Arenal Mundo Aventura, an ecological adventure park like no other in Costa Rica. Enjoy the fantastic zip-lines and learn about the indigenous ''Maleku'' culture through a visit to their mystical village (ISV Included Activity). If you have the ISV Optional Activity Package, test your courage on the largest rappel in Costa Rica! Descend 30m (90ft) free-rappel followed by 50m down Pino Blanco waterfall." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day09.jpg" title="Day 9 &ndash; Volcano Arenal to Rinc&oacute;n de la Vieja" alt="Day 9 &ndash; Volcano Arenal to Rinc&oacute;n de la Vieja" longdesc="<strong>Day 9 &ndash; Volcano Arenal to Rinc&oacute;n de la Vieja</strong><br />\r\nTravel to the beautiful Rinc&oacute;n de la Vieja National Park. In this park, you will find a volcano which is composed of nine volcanic craters. Stay for two-nights at the foot of the Rinc&oacute;n de la Vieja Volcano in one of the best Costa Rican ecotourism lodges for adventure travel and nature lovers. As soon as you get to the hotel, you will have the opportunity to go and take a bath into Rio Negro Thermals Waters (ISV Included Activity)." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day10.jpg" title="Day 10 &ndash; Rincon de la Vieja National Park" alt="Day 10 &ndash; Rincon de la Vieja National Park" longdesc="<strong>Day 10 &ndash; Rincon de la Vieja National Park</strong><br />\r\nFor those who have the ISV Optional Activity Package, this is an action-packed day. You will start with a horseback ride through dry forest and scenic trails until we stop at Oropendola Waterfall, a 25m waterfall with emerald-green water. After this, get ready for the Rio Negro Tubing Adventure! Ride the rapids for 1 & 1/2 hours in your own inflatable inner tube. Following lunch, take a hike for 2 & 1/2 hours along the Las Pailas Trail, where you can observe steam vents, boiling mud and water and a very diverse vegetation. Finish this fantastic day at the unique Simbiosis Mud Spa." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day11.jpg" title="Day 11 &ndash; Rincon de la Vieja to Samara Beach" alt="Day 11 &ndash; Rincon de la Vieja to Samara Beach" longdesc="<strong>Day 11 &ndash; Rincon de la Vieja to Samara Beach</strong><br />\r\nRise early and help the local workers to feed the horses and milk the cows at the local farmhouse. Travel to the beautiful Pacific Coast of Costa Rica. Samara Beach is a long, beautiful beach, considered one of the safest in Costa Rica because of the coral reef that protects it and makes it an ideal place for ocean kayaking, swimming and water sports." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day12.jpg" title="Day 12 &ndash; Samara Beach" alt="Day 12 &ndash; Samara Beach" longdesc="<strong>Day 12 &ndash; Samara Beach</strong><br />\r\nIf you have the ISV Optional Activity Package, this is a full day of activities. You will sea kayak to Isla Chora where fish, rays and marine turtles can be found in the surroundings waters. In addition, today you will enjoy two hours of surf lessons on this beautiful beach (ISV Optional Activity Package). It is a perfect day to relax, enjoy the beach and the magnificent sunset." /></li>\r\n    <li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day13.jpg" title="Day 13 &ndash; Pacific Coast to Heredia" alt="Day 13 &ndash; Pacific Coast to Heredia" longdesc="<strong>Day 13 &ndash; Pacific Coast to Heredia</strong><br />\r\nAfter breakfast, you will return to the Central Valley, stopping on the way at the El Jard&iacute;n Restaurant and Souvenir shop. This is a great place to obtain well-made Costa Rican souvenirs, particularly woodcraft, jewelry and masks. Enjoy a farewell dinner during the final night with the group." /></li>\r\n	<li><img src="/SeniorProject/img/adventure/CostaRica/Adv_CR-Day14.jpg" title="Day 14 &ndash; Departure" alt="Day 14 &ndash; Departure" longdesc="<strong>Day 14 &ndash; Departure</strong><br />\r\nThe adventure ends, travel home, Hasta Pronto!" /></li>\r\n			</ul>\r\n			</div>\r\n		</div>	\r\n		<div class="clear"></div>\r\n        \r\n        <h3 id="OAP_title">Optional Activity Package (OAP)</h3>\r\n      	 	  <!-- ACCORDION IMAGE ROTATOR -->\r\n          <div id="accordionContainer_advmain">\r\n            \r\n              <!-- slide 1 -->\r\n              <div id="slide1" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg1" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderMain01.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Surf Lessons at Samara Beach</h3>\r\n                      <p>Costa Rica is famous for surfing in<br />\r\n                      Latin America.</p>\r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderStrip01.jpg"></div>\r\n                  <p class="slideDesc_advmain">Surf Lessons<br /> at Samara<br /> Beach</p>  \r\n              </div>\r\n                                                          \r\n              <!-- slide 2 -->\r\n              <div id="slide2" class="accordionImgDiv_advmain"> \r\n                  <a href="index.html" id="slideimg2" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderMain02.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Sea Kayaking in Samara Beach</h3>\r\n                      <p>From Samara Beach, enjoy a leisurely paddle by kayak to<br />\r\n                      Isla Chora.</p>\r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderStrip02.jpg"></div>\r\n                  <p class="slideDesc_advmain">Sea Kayaking<br /> in Samara<br /> Beach</p> \r\n              </div>\r\n                                \r\n              <!-- slide 3 -->\r\n              <div id="slide3" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg3" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderMain03.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Rinc&oacute;n de la Vieja National Park</h3>\r\n                      <p>Explore Rinc&oacute;n de la Vieja National Park with<br />\r\n                      two exciting activities.</p>\r\n                  </div>                    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderStrip03.jpg"></div>\r\n                  <p class="slideDesc_advmain">Rinc&oacute;n de<br /> la Vieja<br />National Park</p>  \r\n              </div>\r\n                                          \r\n              <!-- slide 4 -->\r\n              <div id="slide4" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg4" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderMain04.jpg"></a>\r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Las Pailas Trail &amp; Simbiosis Mud Spa</h3>\r\n                      <p>Visit one of the most famous national parks in<br />\r\n                      all of Costa Rica. </p>\r\n                  </div>                   \r\n                 <div class="slideStrip_advmain"  title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderStrip04.jpg"></div>\r\n                 <p class="slideDesc_advmain">Las Pailas Trail<br /> &amp; Simbiosis<br /> Mud Spa</p>  \r\n              </div>           \r\n                \r\n              <!-- slide 5 -->\r\n              <div id="slide5" class="accordionImgDiv_advmain">\r\n                  <a href="index.html" id="slideimg5" class="accordionSlideImage_advmain asyncImgLoadAccordion_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderMain05.jpg"></a> \r\n                  <div class="accordionDescBack_advmain"></div>\r\n                  <div class="accordionDesc_advmain">\r\n                      <h3 class="accordionDescHeader_advmain">Arenal Volcano Evening Hot Springs</h3>\r\n                      <p>Soothe and soak sore muscles as you relax in natural<br />\r\n                      hot springs at night.</p>\r\n                  </div>    \r\n                  <div class="slideStrip_advmain" title="/SeniorProject/img/adventure/CostaRica/Adv_CR-SliderStrip05.jpg"></div>\r\n                  <p class="slideDesc_advmain">Arenal Volcano<br /> Evening Hot<br /> Springs</p>  \r\n              </div>\r\n              \r\n          </div> <!-- accordionContainer -->\r\n\r\n		<h3>Galapagos Islands Excursion</h3>\r\n        	<div class="mportfolio_exc mportfoliocatbg_exc">\r\n        		<a href="#"><img src="/SeniorProject/img/adventure/CostaRica/Galapagos_Excursion.jpg" class="fade" /></a>\r\n        	</div>\r\n        <div class="clear"></div>\r\n        <h3 style="margin-top: 20px;">Peru/Machu Picchu Excursion</h3>\r\n        	<div class="mportfolio_exc mportfoliocatbg_exc">\r\n        		<a href="#"><img src="/SeniorProject/img/adventure/CostaRica/Peru_Excursion.jpg" class="fade" /></a>\r\n        	</div>\r\n		\r\n		<div class="clear"></div>\r\n', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `program_types`
--

CREATE TABLE `program_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `adventure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `program_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination_id` int(11) NOT NULL,
  `volunteer_type_id` int(11) NOT NULL,
  `program_type_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `adventure` tinyint(1) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `destination_id` (`destination_id`),
  KEY `volunteer_type_id` (`volunteer_type_id`),
  KEY `program_type_id` (`program_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trips`
--


-- --------------------------------------------------------

--
-- Table structure for table `trip_pages`
--

CREATE TABLE `trip_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination_id` int(11) DEFAULT NULL,
  `volunteer_type_id` int(11) DEFAULT NULL,
  `program_type_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `destination_id` (`destination_id`),
  KEY `volunteer_type_id` (`volunteer_type_id`),
  KEY `program_type_id` (`program_type_id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trip_pages`
--


-- --------------------------------------------------------

--
-- Table structure for table `volunteer_types`
--

CREATE TABLE `volunteer_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `volunteer_types`
--

