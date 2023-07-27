<!doctype html>
<html lang="en">

<head>
    <title>Plant Survey</title>
    <?php include 'components/header.php'; ?>
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- EVENT SECTION -->

    <!-- heading -->
    <h2 class="events_heading text-center display-4">PLANT SURVEY</h2>

    <!-- plants -->
    <!-- 
        array(
            "title" => "",
            "link"  => "",
            "comms" => "",
            "scien" => "",
            "type"  => "",
            "dist"  => "",
            "desc"  => "",
            "uses"  => "",
            "loc"   => "",
            "image" => "./static/images/events/plant-survey/.jpg",
        ),
    -->
    <?php
    $plants = array(
        array(
            "title" => "Yellow Gulmohar",
            "link"  => "yellow_gulmohar",
            "comms" => "Yellow Gulmohar, Yellow Flametree",
            "scien" => "Peltophorum pterocarpum",
            "type"  => "Deciduous",
            "dist"  => "Southeast Asia and Northern Australasia",
            "desc"  => "This tree can vary from 15 to 25 metres in height with leaves as long a 60 cm. It is umbrella shaped and its flowers are fragrant and yellow in colours. The tree starts to flower after about 4 years.",
            "uses"  => "It is used as an ornamental tree especially during Telangana's Batukamma festival while its wood can be used for furniture.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/yellow_gulmohar.jpg",
        ),
        array(
            "title" => "Tecoma Stans",
            "link"  => "tecoma_stans",
            "comms" => "Yellow trumpetbush, yellow bells",
            "scien" => "Tecoma Stans",
            "type"  => "Evergreen",
            "dist"  => "Native to southern US and Mexico, also found in Australia and south/south-east Asia as well as parts of Africa",
            "desc"  => "This tree can be from 1.5 to 5 metres tall. Its flowers are yellow and it has toothed leaves. The tree is considered an invasive species outside the Americas.",
            "uses"  => "Its leaves can be used as a diuretic. It also has ornamental uses and the wood can serve as firewood.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/tecoma_stans.jpg"
        ),
        array(
            "title" => "Dalbergia sissoo",
            "link"  => "sheesham",
            "comms" => "Sheesham, Indian Rosewood",
            "scien" => "Dalbergia sissoo",
            "type"  => "Deciduous",
            "dist"  => "Native to the Indian sub-continent, also found in Africa, Australia and the U.S.",
            "desc"  => "Sheesham is a fairly large tree at 10-15 metres high in dry areas and as tall as 30 metres in wet areas. The trunks are often crooked. It has pink-white flowers.",
            "uses"  => "Sheesham is very commonly used for timber. The wood can also be used as firewood and oil can be extracted from its seeds.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/sheesham.jpg",
        ),
        array(
            "title" => "Azadirachta indica",
            "link"  => "neem",
            "comms" => "Neem",
            "scien" => "Azadirachta indica",
            "type"  => "Evergreen but can shed leaves in droughts",
            "dist"  => "Native to the Indian subcontinent, also found in other tropical regions",
            "desc"  => "Neem is a tree that hardly anyone in the Indian subcontinent is unfamiliar with. It grows quickly and is usually about 15-20 metres tall but can grow up to 40 metres.",
            "uses"  => "Neem has anti-fungal properties and can be used as a bio-pesticide. It used commonly in traditional medicine.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/neem.jpg",
        ),
        array(
            "title" => "Manihot esculenta",
            "link"  => "manihot_esculenta",
            "comms" => "Cassava, Yuca",
            "scien" => "Manihot esculenta",
            "type"  => "Shrub",
            "dist"  => "Native to South America but found in parts of Asia and Africa",
            "desc"  => "Cassava is best known for its edible tuberous root. The plant itself is a woody shrub and might be as tall as 3 metres. The roots must be prepared well though since they can be poisonous otherwise. It is a major source of income in Africa and often serves as a cash crop.",
            "uses"  => "Cassava roots are the third largest source of carbohydrates in tropic regions. The leaves can also be used as food and the plant can be used to treat hypertension and IBS. It is also used to brew alcoholic beverages.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/manihot_esculenta.jpg",
        ),
        array(
            "title" => "Cascabela thevetia",
            "link"  => "cascabela_thevetia",
            "comms" => "Kaner, Yellow Oleander, Lucky Nut",
            "scien" => "Cascabela thevetia",
            "type"  => "Evergreen",
            "dist"  => "Tropical America and India",
            "desc"  => "The tree is short and ranges between 2.5-3 metres in height. The plant is very drought resistant and its fruits are reddish black with large seeds. The flowers and fruits are very poisonous and should be avoided.",
            "uses"  => "The flowers are used to worship Vishnu, as ornaments or as bio-pesticides.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/cascabela_thevetia.jpg",
        ),
        array(
            "title" => "Delonix regia",
            "link"  => "delonix_regia",
            "comms" => "Gulmohar, Flame Tree",
            "scien" => "Delonix regia",
            "type"  => "Deciduous in drought but evergreen otherwise",
            "dist"  => "Endemic to Madagascar but found in other tropical regions as well",
            "desc"  => "Gulmohar is a very colourful tree when in full bloom. The flowers are usually bright red and are considered very beautiful. It grows to a modest height of 5 metres usually but can be sometimes twice as tall as that. It is a common street tree in India.",
            "uses"  => "Gulmohar is largely used as an ornamental tree.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/delonix_regia.jpg",
        ),
        array(
            "title" => "Neolamarckia cadamba",
            "link"  => "neolamarckia_cadamba",
            "comms" => "Kadam, Burflower",
            "scien" => "Neolamarckia cadamba",
            "type"  => "Evergreen",
            "dist"  => "South and South-east Asia",
            "desc"  => "This tree can grow as tall as 45 metres and has flowers which look like hairy orange balls. Kadam is believed to have been the favourite tree of Krishna.",
            "uses"  => "The flowers can be used as perfume; the plant is also believed to have medicinal value in treating digestive disorders.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/neolamarckia_cadamba.jpg",
        ),
        // array(
        //     "title" => "Cordia myxa",
        //     "link"  => "cordia_myxa",
        //     "comms" => "Indian Cherry, Assyrian Plum",
        //     "scien" => "Cordia myxa",
        //     "type"  => "Evergreen",
        //     "dist"  => "From India to Australia",
        //     "desc"  => "The tree takes about 50-60 to mature and is about 3-4 metres tall at full maturity. The fruits are edible and very sweet. Its leaves tend to be hairy while the flowers are bulbous. It grows from 200 to 1500 metres above sea level and it does well in regions with moderate rainfall.",
        //     "uses"  => "The fruits can be used as food while the leaves can be used as fodder for cattle. The fruit can also be used as a medicine for cough while the bark helps heal broken bones.",
        //     "loc"   => "Roadside, Ena to faculty quarter",
        //     "image" => "./static/images/events/plant-survey/cordia_myxa.jpg",
        // ),
        array(
            "title" => "Triadica Sebifera",
            "link"  => "triadica_sebifera",
            "comms" => "Chicken tree, Chinese Tallow, Florida Aspen, Candleberry Tree",
            "scien" => "Triadica Sebifera",
            "type"  => "Deciduous",
            "dist"  => "Native to eastern China and Taiwan. Found throughout the southern United States and is cultivated in parts of India",
            "desc"  => "`Chicken Tree` is a medium-small tree growing to a maximum height of 15 meters. The tree bears bright yellow (or light green) florescent colour spike like flowers with a length of about 20 centimetres. The tree is monoecious and produce both male and female flowers. The leaves are bright green in colour with a broad oval shape and an extended tail resembling that of a `Peepal` tree. The seeds capsule is initially green and turn brown as it mature, ultimately falling to the ground and releasing three seeds of about 12 millimetre in diameter.",
            "uses"  => "The tree only has a few uses such as soap making and producing `stillingia oil` (toxic). The nectar is not toxic and is used by beekeepers to create high quality honey. Apart from that the tree has some decorative uses and is a good source of shade in hot sunny days.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/triadica_sebifera.jpg",
        ),
        array(
            "title" => "Albizia lebbeck",
            "link"  => "albizia_lebbeck",
            "comms" => "Siris, Lebbeck tree, Flea tree, Frywood koko, Women's tongue tree",
            "scien" => "Albizia lebbeck",
            "type"  => "Deciduous",
            "dist"  => "Native to Indomalaya, New Guinea and Northern Australia. Cultivated and naturalized in other tropical regions including India.",
            "desc"  => "`Siris` (local name in India) is a large tree growing to a height of 18 to 30 meter tall with a trunk size of 0.5 to 1 meter in diameter. The fruit of the tree is a seedpod containing 6 to 12 seeds. The tree bears beautiful fragrant flowers with white or green stamens, they contain rich nectar which attract a variety of pollinating insects. The flowers grow around the month of April and fall in a month. In Tamil Nadi, the tree is known as `vaagai` or victory, because the kings of the Sangam Age worn garland after winning battles made of the flowers of the Siris tree.",
            "uses"  => "The tree has many uses ranging from medicinal to decorative. The seeds of the tree are used in folk medicine as a remedy for leprosy (disease causing skin and nerve damage), the bark and leaves are also used as an anti-allergy medicine. In India the tree is used as a source of wood for furniture and other decorative uses. In some regions of Brazil, the tree is used as a food source for herbivorous livestock.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/albizia_lebbeck.jpg",
        ),
        array(
            "title" => "Bauhinia variegata",
            "link"  => "bauhinia_variegata",
            "comms" => "Kachnar, Orchid tree, Mountain ebony",
            "scien" => "Bauhinia variegata",
            "type"  => "Deciduous",
            "dist"  => "Native to China, Southeast Asia and the Indian Subcontinent",
            "desc"  => "`Kachnar` (local name in India) is a medium sized deciduous shrub or small tree. It is a species of flowering plant and is admired for it's large, showy, rosy purple, fragrant and beautiful orchid like flowers. The tree ranges from 10 to 12 meter tall with 10 to 20 centimetre long and broad leaves. The fruit of the tree is a seedpod (like a pea) containing various seeds. Upon drying, the seedpod twist into a helix, which ultimately explode with an audible crack - dropping seeds into the surrounding area.",
            "uses"  => "The tree has various health benefits and ayurvedic uses. It can effectively regulate hypothyroidism and lower blood sugar, it can also improve metabolism, promote weight loss and is a source of antioxidants. It is rich in various vitamins, minerals, proteins, carbs etc. In India buds of the `Kanchar` tree is used to make curries and pickles.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/bauhinia_variegata.jpg",
        ),
        array(
            "title" => "Leucaena leucocephala",
            "link"  => "leucaena_leucocephala",
            "comms" => "Subabul, River Tamarind",
            "scien" => "Leucaena leucocephala",
            "type"  => "Deciduous",
            "dist"  => "Native to Mexico and Central America. Also naturalized in other tropical regions.",
            "desc"  => "`Subabul` (local name in India) tree is named so, because of its resemblance to the `Babul` tree found commonly in India. It is a small fast-growing tree which is cultivated widely in the tropics as a fodder plant (used to feed domestic livestock). The tree ranges from 10 to 20 meter vertically with a bole (trunk) diameter of 30 to 50 centimetres. It produces small white flowers tinged with yellow colour.",
            "uses"  => "Subabul is mainly used as a source of quality animal feed. Because of its fast growth rate, the tree is also used to produce manure and biomass. In India the tree is promoted for both fodder and energy. The tree is also used to create pulp for paper industry.",
            "loc"   => "Roadside, Ena to faculty quarter",
            "image" => "./static/images/events/plant-survey/leucaena_leucocephala.jpg",
        ),
        // array(
        //     "title" => "Ficus religiosa",
        //     "link"  => "ficus_religiosa",
        //     "comms" => "Sacred Fig, Peepal, Bodhi",
        //     "scien" => "Ficus religiosa",
        //     "type"  => "Semi-evergreen",
        //     "dist"  => "Native to the Indian subcontinent as well as Indochina",
        //     "desc"  => "At 30 metres, the Bodhi tree can grow to be very tall. It has an immense lifespan of 1000-1500 years. The fruits are, as the name implies, figs which start out as green and turn purple upon ripening. Unlike most other jungle figs, the sacred fig is not a strangler but is still considered very invasive with an ability to tolerate a variety of climates.",
        //     "uses"  => "The tree has great religious importance in Hinduism, Buddhism and Jainism with one specimen (which is 2,250 years old) being considered the oldest tree with religious significance. ",
        //     "loc"   => "Basketball Court",
        //     "image" => "./static/images/events/plant-survey/ficus_religiosa.jpg",
        // ),
        array(
            "title" => "Pseudopanax ferox",
            "link"  => "pseudopanax_ferox",
            "comms" => "Fierce Lancewood",
            "scien" => "Pseudopanax ferox",
            "type"  => "Evergreen",
            "dist"  => "Native to New Zealand but can grow in tropical regions",
            "desc"  => "This tree can grow upto 8 metres in height. Its leaves are needle shaped and about 40cm long. It can survive in both tropical and subalpine climates. It grows with a central  trunk and downward facing leaves for 10-15 years after which it starts resembling a more typical tree.",
            "uses"  => "Ornamental especially used to complement modern architecture.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/pseudopanax_ferox.jpg",
        ),
        array(
            "title" => "Carya Illinoinensis",
            "link"  => "carya_illinoinensis",
            "comms" => "Pecan",
            "scien" => "Carya Illinoinensis",
            "type"  => "Deciduous",
            "dist"  => "Native to North America but is cultivated all over the world",
            "desc"  => "Pecan is a fairly large tree, growing as tall as 40 metres. Its `nuts`, which it is best known for, are technically fruits with a single pit and taste sweet. It begins to bear these nuts after 6-10 years and a single tree can produce as much as 70-150 pounds of nuts in a harvest. The tree is long-living as well with an expected lifespan of 300 years.",
            "uses"  => "Grown for its delicious nuts, pecans were also used a bartering currency by early settlers in North America. Many states in the U.S. feature this tree on their flags.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/carya_illinoinensis.jpg",
        ),
        array(
            "title" => "Fraxinus griffithii",
            "link"  => "fraxinus_griffithii",
            "comms" => "Himalayan Ash or Griffith's Ash",
            "scien" => "Fraxinus griffithii",
            "type"  => "Semi-Evergreen",
            "dist"  => "Native to Indian subcontinent and south-east Asia, invasive in Australia",
            "desc"  => "Griffith's Ash is usually around 15-18 metres tall and has odd pinnately compound leaves. It has small white flowers which bloom in the summer. The Fraxinus in the name comes from `frango` which is Latin for fragile and refers to the ease with which the wood of this tree breaks while still attached to the ground but the wood is suitable for indoor uses once cut down.",
            "uses"  => "Often grown as an ornamental or street plant, particularly in Australia. Also used as a timber tree in Taiwan.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/fraxinus_griffithii.jpg",
        ),
        array(
            "title" => "Acacia baileyana",
            "link"  => "acacia_baileyana",
            "comms" => "Bailey's wattle, Cootamundra wattle, Golden mimosa",
            "scien" => "Acacia baileyana",
            "type"  => "Shrubs, Trees",
            "dist"  => "Native to a small region of Australia. Cultivated in various parts tropical regions.",
            "desc"  => "Golden Mimosa` (common name in Australia) is a medium shrub/tree that can grow upto a height of 8 meters with leaves as long as 65 mm. It is a flowering tree and is recoganized by it's bright yellow/golden yellow fluffy flowers that are arranged into small globular clusters containing upto 25 flowers. The fruit of the Mimosa tree is an elongated pod (upto 120 mm long), these pods contain about 12 dark brown/black seeds.",
            "uses"  => "The tree is mainly used as a decorational tree. It is also used for it's flowers and a source of food for honey bees in Europe.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/acacia_baileyana.jpg",
        ),
        array(
            "title" => "Acrocomia aculeata",
            "link"  => "acrocomia_aculeata",
            "comms" => "Grugru palm, Gloo gloo, Maca�ba palm, Coyol palm, Macaw palm",
            "scien" => "Acrocomia aculeata",
            "type"  => "Evergreen",
            "dist"  => "Native to tropical regions of America, Mexico and Argentina. Also found in Europe and southern parts of Asia.",
            "desc"  => "`Macaw Palm` is a large palm tree that can vary from 15 to 20 metres tall with a bole (trunk) diameter of upto 50 cm. It has long leaflets (upto 4 meters long) that has various sharp spines jutting out from the main trunk. The flowers of the tree are small, and only present on leaves longer than 1.5 meters.The fruit (grugru nut) is a small, nut like drupe that can be upto 5 cm in diameters.",
            "uses"  => "In Mexico the trunk is milked to create a fermented alcoholic beverage known as `Coyol Wine`. The Grugru nut is used to create rings by slicing into thin circles. Other potential use for the tree is generating biodiesel.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/acrocomia_aculeata.jpg",
        ),
        array(
            "title" => "Breynia retusa",
            "link"  => "breynia_retusa",
            "comms" => "Cup Saucer Plant, Cupped coral-berry tree, Bahupraja (Sanskrit)",
            "scien" => "Breynia retusa",
            "type"  => "Evergreen shrub",
            "dist"  => "Naturally found in the Indian Subcontinent and China, Vietnam, Myanmar.",
            "desc"  => "Bahupraja (Sanskrit name) is a small shrub that has large spreading branches.  The main feature of the plant is it's fruit which looks like berry kept on a saucer. It is a fairly small shrub and can grow upto 2 meters tall. It has broad, elliptical leaves that are 1 to 3 cm wide. Flowers of the this plant are unisexual and can range from green to yellow in color. It's fruits are small 1 to 2 cm in diameter and are slightly flattended round berries.",
            "uses"  => "It's leaves can be used to cure body pain, skin inflammation and other conditions.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/breynia_retusa.jpg",
        ),
        array(
            "title" => "Hedera helix",
            "link"  => "hedera_helix",
            "comms" => "Common ivy, English ivy, European ivy, Ivy",
            "scien" => "Hedera helix",
            "type"  => "Evergreen Vine",
            "dist"  => "Native to most of Europe and western Asia",
            "desc"  => "`English ivy` is a small evergreen climbing plant growing upto 20 to 30 meters on suitable surfaces. It can also grow horizontally, if no vertical surface is availabe. The leaves of this plant are 2 to 4 inches broad and can extend upto 1 inch, similar to that of a Peepal tree. It produce small, 3 to 5 cm wide flowers from late summer until late autimn and are very rich in nectar. It's fruit are yellowish orange berries, 6 to 8 mm in diameter, they contain upto 5 seeds which are dispersed after being eaten by birds.",
            "uses"  => "Used as an oramental plant in gardens.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/hedera_helix.jpg",
        ),
        array(
            "title" => "Dioon purpusii",
            "link"  => "dioon_purpusii",
            "comms" => "Purpus' cycad",
            "scien" => "Dioon purpusii",
            "type"  => "Evergreen plant",
            "dist"  => "Native to a vert small region of Mexico and some parts of India",
            "desc"  => "Dioon purpusii is a small plant that grows about 5 meters tall with a trunk diameter of 40 cm. It has palm like leaves that are 7 to 12 cm long with small sharp leaves emerging from the central petiole. The plant does not grow any flowers and has only one central seed code from which all leaves emerge. The seed code is 15 to 20 cm in diameter and contain small sharp seeds.",
            "uses"  => "Decorational",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/dioon_purpusii.jpg",
        ),
        array(
            "title" => "Ligustrum lucidum",
            "link"  => "ligustrum_lucidum",
            "comms" => "Glossy privet, Tre privet, Wax-Leaf privet, Chinese privet, Broat-Leaf privet",
            "scien" => "Ligustrum lucidum",
            "type"  => "Evergreen tree",
            "dist"  => "Native to southern half of China and naturalized in many places including India.",
            "desc"  => "Glossy privet is a very colourful tree when in full bloom. The flowers are usually white or near white and are have a strong fragnance. It grows to a tall height of 10 metres usually. The leaves of this tree are dark green and can be 6 to 17 meters long and 3 to 8 cm wide.",
            "uses"  => "The seeds of the Chinese privet tree are used in Chinese medice to cure liver and kidney diseases. Also used as an ornamental tree.",
            "loc"   => "Basketball Court",
            "image" => "./static/images/events/plant-survey/ligustrum_lucidum.jpg",
        ),
        array(
            "title" => "Ceiba pentandra",
            "link"  => "ceiba_pentandra",
            "comms" => "Kapok Tree",
            "scien" => "Ceiba pentandra",
            "type"  => "Tropical Tree",
            "dist"  => "Native to Mexico, Central America and the Caribbean, northern South America, and West Africa. A smaller variety is cultivated in southern and southeast Asia",
            "desc"  => "The buttress roots can be clearly seen in photographs extending 12 to 15 m (40 to 50 ft) up the trunk of some specimens. The trees produce several hundred 15 cm (6 in) pods containing seeds surrounded by a fluffy, yellowish fiber that is a mix of lignin and cellulose.",
            "uses"  => "The flowers are an important source of nectar and pollen for honey bees and bats. Native tribes along the Amazon River harvest the fiber to wrap around their blowgun darts. It has been used as a diuretic, as an aphrodisiac, and to treat headaches, as well as type II diabetes. It is used as an additive in some versions of the psychedelic drink Ayahuasca.",
            "loc"   => "Main gate to faculty quarters",
            "image" => "./static/images/events/plant-survey/ceiba_pentandra.jpg",
        ),
        array(
            "title" => "Acacia concinna",
            "link"  => "acacia_concinna",
            "comms" => "Shikakai",
            "scien" => "Acacia concinna",
            "type"  => "Tropical Dry",
            "dist"  => "Asia - Central to Southern India",
            "desc"  => "Acacia Concinna is a thorny spreading shrub or tree that can either be scandent or climb into other plants. The bark is light grey. Leaves are oblong 4-10mm long forming 7-11 pairs of branches each with 17-37 pairs of leaflets. Flower buds are purple or dark red. The flowers are cream or white. Pods up to 5cm long are flat and thick with 7 seeds.",
            "uses"  => "Black fever, Malaria, Diabetes, Chronic cough, Asthmetic obstruction, Jaundice.",
            "loc"   => "Main gate to faculty quarters",
            "image" => "./static/images/events/plant-survey/acacia_concinna.jpg",
        ),
        array(
            "title" => "Mangifera indica",
            "link"  => "mangifera_indica",
            "comms" => "Mango Tree",
            "scien" => "Mangifera indica",
            "type"  => "Tropical",
            "dist"  => "It is native to the Indian subcontinent where it is indigenous. Hundreds of cultivated varieties have been introduced to other warm regions of the world",
            "desc"  => "A large green tree, valued mainly for its fruits, both green and ripe. Approximately 210 varieties of mango have been reported. It can grow up to 15-30 meters (49-98 ft) tall. The tree grows best in well-drained sandy loam; it does not grow well in heavy wet soils. The mango is an irregular, egg-shaped fruit that is a fleshy drupe. Mangos are typically 8-12 cm (3-5 in) long and greenish-yellow in color.",
            "uses"  => "In Ayurveda, it is used in a Rasayana formula sometimes with other mild sours and shatavari (Asparagus racemosus) and guduchi (Tinospora cordifolia). Majorly used for its world famous fruit.",
            "loc"   => "Main gate to faculty quarters",
            "image" => "./static/images/events/plant-survey/mangifera_indica.jpg",
        ),
        array(
            "title" => "Caesalpinia pulcherrima",
            "link"  => "caesalpinia_pulcherrima",
            "comms" => "Peacock Flower",
            "scien" => "Caesalpinia pulcherrima",
            "type"  => "Tropical and sub tropical",
            "dist"  => "It is native to the tropics and subtropics of the Americas",
            "desc"  => "It is a shrub growing to 3 m tall. In climates with few to no frosts, this plant will grow larger and is semievergreen. In Hawaii this plant is evergreen and grows over 5 m tall. Grown in climates with light to moderate freezing, plant will die back to the ground depending on cold, but will rebound in mid-to late spring.",
            "uses"  => "African slaves and native Indian populations used the flos pavonis or peacock flower as an abortifacient in their practice of traditional medicine.",
            "loc"   => "Main gate to faculty quarters",
            "image" => "./static/images/events/plant-survey/caesalpinia_pulcherrima.jpg",
        ),
        array(
            "title" => "Plumeria alba",
            "link"  => "plumeria_alba",
            "comms" => "Pagoda tree, caterpillar tree",
            "scien" => "Plumeria alba",
            "type"  => "Deciduous shrub",
            "dist"  => "Native to Central America and the Caribbean, it is now common and naturalized in southern and southeastern Asia",
            "desc"  => "This 2-8m deciduous shrub has narrow elongated leaves, large and strongly perfumed white flowers with a yellow center.",
            "uses"  => "P. alba is often cultivated as an ornamental plant. In Cambodia pagodas especially choose this shrub, with the flowers used in ritual offerings to the deities, they are sometimes used to make necklaces which decorate coffins.",
            "loc"   => "Main gate to faculty quarters",
            "image" => "./static/images/events/plant-survey/plumeria_alba.jpg",
        ),
        array(
            "title" => "Plumeria obtusa",
            "link"  => "plumeria_obtusa",
            "comms" => "Singapore graveyard flower, White Frangipani, Gulchin (hindi)",
            "scien" => "Plumeria obtusa",
            "type"  => "Plant/Tree",
            "dist"  => "Native to the West Indies, southern Mexico, Belize, Guatemala. Naturalized around the world for it's fragrant flowers",
            "desc"  => "`Gulchin` (native name in hindi) is either a small shrub or a tree ranging from 1 to 6 meter in height. The leaves of this tree are oval with 2 to 7 centimeter width and around 6 to 22 centimeter long, they are dark green in color and are shiny on the upper surface. The main attraction of the tree is it's white colored flowers which tend to be yellow at the center. The flowers grow in a cluster and have 5 petals each, that are fused at the base in a small funnel-shaped tube.",
            "uses"  => "The tree is mainly used as an ornamental tree because of it's beautiful flowers. It's flowers are also used to make necklaces, bracelets etc around the world. In certain places it's bark is used to treat oedema (cause swelling in knees, eyes etc.).",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/plumeria_obtusa.jpg",
        ),
        array(
            "title" => "Psidium guajava",
            "link"  => "psidium_guajava",
            "comms" => "Common guava, Yellow guava, Amrood (hindi)",
            "scien" => "Psidium guajava",
            "type"  => "Evergreen shrub or small tree",
            "dist"  => "Native to the Caribbean, Central America and South America. Widely cultivated in the tropical and subtropical regions for its fruit",
            "desc"  => "Guava tree or Psidium Guajava, is a small tree that grows upto a height of 33 feet (around 10 meter). The tree can easily be recognized because of it's smooth, copper/brown colored bark that flakes off. The leaves of the tree are long and oval shaped. The tree produces fragrant white flowers that contain 4 to 5 petals each. The main attraction of the tree is its `Guava` fruit, for which it is cultivated around the world. The fruit is spherical and is edible, it exudes a strong sweet musky odor when ripe and is 5 to 10 centimeter in diameter.",
            "uses"  => "The fruit of this tree is edible and can be eaten raw or cooked. The leaves of this tree are used to treat dysentery (intestinal inflammation).",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/psidium_guajava.jpg",
        ),
        array(
            "title" => "Millettia pinnata",
            "link"  => "millettia_pinnata",
            "comms" => "Pongamia pinnata, Indian beech, Pongame oiltree",
            "scien" => "Millettia pinnata",
            "type"  => "Deciduous",
            "dist"  => "Native to eastern and tropical Asia, Australia and Pacific islands",
            "desc"  => "`Millettia Pinnata` is a medium tree that grows upto a height of 25 meters. It has a straight or crooked trunk that is 50 to 80 centimeter in diameter. It has deep-green/burgundy colored oval leaves. The tree starts flowering after 4 years and blossoms throughout the year. The flowers are white, pink and purple in color and can grow upto 20 millimeter long. The seeds of the tree are contained within a brown seed pod which appear immediately after flowering. Each pod contains 1 to 2 brown-red bean-like seeds. The seeds emerge from the pod only after the other covering has decomposed or is damaged by animals. The tree is well suited for intense heat and sunlight due to which it is a good source of shadow in hot, sunny areas.",
            "uses"  => "Often used as a source of shade due to its large canopy and fragrant flowers. The flowers are also used by gardeners as compost for other trees and plants. The wood can be used to make posts and tool handles. The seeds of this tree are used to extract a thick brownish oil which is used in medicines.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/millettia_pinnata.jpg",
        ),
        array(
            "title" => "Pometia pinnata",
            "link"  => "pometia_pinnata",
            "comms" => "Matoa, Taun tree, Island leechee, Tava, Thit-kandu (hindi)",
            "scien" => "Pometia pinnata",
            "type"  => "Evergreen tree",
            "dist"  => "Native to tropical South Asia, Southeast Asia and Melanesia",
            "desc"  => "Island leechee is a large tree that grows upto a height of 50 meters. The tree has long compound leaves that can be upto 1 meter long and contain several small leaflets. The leaflets are egg shaped and are red in color while young and become dark green as they mature. The tree produces both male and female flowers. The flowers are about 2.5 millimeter long and are generally white to green yellow in color. Its fruit are round with a diameter of 1 to 3 centimeter and red to black in color. The seeds of this tree are egg shaped, upto 2.5 centimeter long and are brown in color.",
            "uses"  => "The fruit of this tree is edible and can be eaten raw. It is also a good source of shade due to its large size.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/pometia_pinnata.jpg",
        ),
        array(
            "title" => "Prunus laurocerasus",
            "link"  => "prunus_laurocerasus",
            "comms" => "Cherry laurel, Common laurel, English laure",
            "scien" => "Prunus laurocerasus",
            "type"  => "Evergreen shrub",
            "dist"  => "Native to Southwestern Asia and Southeastern Europe",
            "desc"  => "Prunus laurocerasus is an evergreen shrub or small to medium sized tree, growing to a height of 5 to 15 meters tall, with a trunk diameter of 60 centimeter. The leaves of the tree are dark green in color, oval shaped, growing to a length of 4 to 10 centimeter. Sometimes the leaves of this tree emit a scent of almonds when crushed. The flowers grow on a bud and each bud can have 30 to 40 small flowers. Each flower is 1 centimeter long and has a creamy white color. The fruit of this tree is a small cherry which turns black when ripe.",
            "uses"  => "The tree is mainly cultivated for ornamental purposes.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/prunus_laurocerasus.jpg",
        ),
        array(
            "title" => "Ficus elastica",
            "link"  => "ficus_elastica",
            "comms" => "Rubber fig, Rubber bush, Indian rubber tree, Indian rubber bush",
            "scien" => "Ficus elastica",
            "type"  => "Deciduous",
            "dist"  => "Native to eastern parts of South and Southeast Asia. Naturalized in Sri Lanka, West Indies and parts of the US",
            "desc"  => "Indian rubber tree, is a medium-large tree that can grow upto a height of 60 meters with a trunk diameter of upto 2 meters. The leaves of the fig tree are 10 to 35 centimeters long and 5 to 15 centimeters wide. The leaves of this tree are largest on young plants and much smaller on older trees. The tree requires a particular species of fig wasp to pollinate, due to which the tree does not produce colorful or fragrant flowers to attract other pollinators. The fruit is a small yellow-green colored oval fig and is 1 centimeter long. The tree also produces a milky white latex due to which it got the name `Rubber fig`.",
            "uses"  => "The tree is grown around the world as an ornamental plant. The latex from the rubber fig tree is used to make rubber.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/ficus_elastica.jpg",
        ),
        array(
            "title" => "Pisonia grandis",
            "link"  => "pisonia_grandis",
            "comms" => "Grand devil's claw",
            "scien" => "Pisonia grandis",
            "type"  => "Deciduous",
            "dist"  => "Native to India and other regions connected by the pacific ocean",
            "desc"  => "Pisonia grandis is a medium tree that can grow upto a height of 20 meters. The tree has broad bright green colored leaves. The tree bears small green sweet-smelling flowers that mature into sticky barbed seeds. The tree is a common nesting site for birds. The wood of the tree is weak and soft due to which it decays rapidly when the tree falls.",
            "uses"  => "The tree does not have many uses. The leaves of this tree is used as a leaf vegetable in some countries.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/pisonia_grandis.jpg",
        ),
        array(
            "title" => "Blandfordia nobilis",
            "link"  => "blandfordia_nobilis",
            "comms" => "Christmas bells, Gadigalbudyari",
            "scien" => "Blandfordia nobilis",
            "type"  => "Evergreen tree",
            "dist"  => "Native to Australia. Cultivated all around the world for it's bright red flowers",
            "desc"  => "Christmas bells is a small sized tree that can grow upto a height of 7 meters. The main attraction of this tree is its bright red bell shaped flowers. The flowers of this tree contain 3 petals which form a cylindrical flower usually 20-30 millimeters long and 10 millimeters wide. Due to its bell like flower the tree got the name `Christmas bells` all around the world.",
            "uses"  => "The tree is mainly used as an ornamental tree due to its beautiful and fragrant flowers.",
            "loc"   => "Main gate to castle dio",
            "image" => "./static/images/events/plant-survey/blandfordia_nobilis.jpg",
        ),
        array(
            "title" => "Syzygium cumini",
            "link"  => "syzygium_cumini",
            "comms" => " Jaamun, Indian Blueberry, Black plum",
            "scien" => "Syzygium cumini",
            "type"  => "Evergreen Tree",
            "dist"  => "E. Asia - China, India, Malaysia",
            "desc"  => "It is a medium-sized tropical and evergreen tree, about 10-30 m in height. The leaves are smooth, opposite, shiny, leathery and oval. The flowers are pink or nearly white. The fruits are oval, green to black when ripe, with dark purple flesh. It contains a large seed.",
            "uses"  => "The seeds and fruits are used in the treatment of diabetes. Seeds and bark are used against dysentery. Bark juice is used for treating wounds and enlargement of the spleen. Bark infusion is used to treat irregular menstruation, diarrhoea, dysentery, children's thrush, etc. Fruits are used in the treatment of colic and diarrhoea. Leaf infusion is used for diarrhoea and diabetes. Fruits can be eaten raw or processed into desserts. It is juicy, purple, and olive-shaped. It also functions as a hedge in some areas and is interplanted with crops as a shade tree. The bark is a source of tannins and brown dye used in colouring and preserving fish nets. The branches are used to whiten teeth. The wood is used in exterior joinery and carpentry, construction, boat building, plywood, agricultural implements, furniture, etc. Jambolan can tolerate waterlogged conditions and can withstand strong winds.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/syzygium_cumini.jpg",
        ),
        array(
            "title" => "Ficus benjamina",
            "link"  => "ficus_benjamina",
            "comms" => "Weeping fig, Benjamin fig, Ficus tree",
            "scien" => "Ficus benjamina",
            "type"  => "Evergreen tree usually grown as a houseplant",
            "dist"  => "India, Southeast Asia, Northern Australia",
            "desc"  => "Weeping fig is an elegant plant with slender branches that arch gracefully from a light grey trunk, with dense, glossy dark leaves that may shed when the plant is stressed. It grows as a large broadleaf evergreen tree in tropical and subtropical climates, but it is more often grown as a houseplant in homes and offices and is a popular feature in interior commercial landscaping. It is a rare tree that has a good tolerance for the limited light conditions of indoor environments.",
            "uses"  => "Weeping fig is one of the best plants for improving air quality indoors. It has one of the top removal rates for air toxins such as formaldehyde, benzene, and trichloroethylene.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/ficus_benjamina.jpg",
        ),
        array(
            "title" => "Alstonia scholaris",
            "link"  => "alstonia_scholaris",
            "comms" => "Blackboard tree, Devil's tree",
            "scien" => "Alstonia scholaris",
            "type"  => "Evergreen tropical tree",
            "dist"  => "Native to southern China, tropical Asia and Australasia",
            "desc"  => "It is a glabrous tree and grows up to 40 m (130 ft.) tall. Its mature bark is greyish and its young branches are copiously marked with lenticels.",
            "uses"  => "Its wood is used in manufacturing pencils, coffins, household utensils, trenchers, corks etc. Its bark is used as a remedy in chronic diarrhoea and the advanced stages of dysentery. It has also been found effective in restoring the tone of the stomach and of the system generally in debility after fevers and other exhausting diseases.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/alstonia_scholaris.jpg",
        ),
        // array(
        //     "title" => "Terminalia arjuna",
        //     "link"  => "terminalia_arjuna",
        //     "comms" => "Arjun, Kamrak, Kumbuk",
        //     "scien" => "Terminalia arjuna",
        //     "type"  => "Evergreen",
        //     "dist"  => "Found across the Indian sub-continent",
        //     "desc"  => "A tall tree which grow up 25 metres, the arjun tree has strange conical leaves which are green at the top and brown at the bottom. It has a buttressed trunk with a spreading crown and downwards sloping branches.  It is usually grown on the banks of rivers and streams.",
        //     "uses"  => "The Arjun tree has both cultural and religious significance and its leaves are used to feed silkworms. The bark also has medicinal properties and can be used to treat chest pain and as a heart tonic. ",
        //     "loc"   => "Roadside, Main gate to Castle Dio",
        //     "image" => "./static/images/events/plant-survey/terminalia_arjuna.jpg",
        // ),
        array(
            "title" => "Fraxinus excelsior",
            "link"  => "fraxinus_excelsior",
            "comms" => "European Ash, Common Ash",
            "scien" => "Fraxinus excelsior",
            "type"  => "Deciduous",
            "dist"  => "Europe and South-western Asia",
            "desc"  => "The European Ash is fairly tall at 12-18 metres with a thick trunk. The bark of the tree is silvery-brown and is particularly pale in younger trees. It can have both male and female flowers which bloom in the spring and keep blooming even after the leaves wilt.",
            "uses"  => "The wood is used for both woodwork and fuel. They are also grown ornamentally due to the unique nature of their bark.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/fraxinus_excelsior.jpg",
        ),
        array(
            "title" => "Senna siamea",
            "link"  => "senna_siamea",
            "comms" => "Ironwood Cassia, Siamese Senna, Kassod Tree",
            "scien" => "Senna siamea",
            "type"  => "Evergreen",
            "dist"  => "South and Southeast Asia",
            "desc"  => "The tree is moderately tall and can grow as tall as18 metres. It has yellow flowers and black fruits which are edible but need handling first. The bark might be slightly irritating to the skin.",
            "uses"  => "The leaves and fruits are edible and the plant contains barakol, a sedative, which provides it with its medicinal properties. It is also used as a shade plant as well as a windbreaker. The wood also makes for excellent charcoal.",
            "loc"   => "",
            "image" => "./static/images/events/plant-survey/senna_siamea.jpg",
        ),
        array(
            "title" => "Lagerstroemia speciosa",
            "link"  => "lagerstroemia_speciosa",
            "comms" => "Pride of India, Banaba, Queen's crepe-myrtle, Jarul",
            "scien" => "Lagerstroemia speciosa",
            "type"  => "Deciduous",
            "dist"  => "Tropical Asia including the Indian subcontinent",
            "desc"  => "This is a medium sized tree which can grow up to 20 metres. Its flowers are either pink or white with six petals which only bloom once in the summer. The plant's scientific name is after Carl Linnaeus who discovered. The name Jarul means �queen of flowers�.",
            "uses"  => "The tree is largely used ornamentally although the fruits are used in traditional medicine to reduce glucose in blood.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/lagerstroemia_speciosa.jpg",
        ),
        array(
            "title" => "Bixa orellana",
            "link"  => "bixa_orellana",
            "comms" => "Sindoor, Orellana, Annatto",
            "scien" => "Bixa orellana",
            "type"  => "Evergreen",
            "dist"  => "Native to South and Central America but cultivated in the Indian subcontinent as well",
            "desc"  => "It is tall for a shrub, ranging from 6-10 metres in height. Its flowers are either pink or white and resemble wild roses. Its fruit is an ovoid capsule which falls and opens up to release 40-50 seeds. The shrub flowers from July-October and fruits from October-December.",
            "uses"  => "The tree has great cultural significance in India where the powder around the seed is used to produce dye with the same name which signifies marital status. The bark is also used to make ropes while the seed oil is used to dye clothes.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/bixa_orellana.jpg",
        ),
        array(
            "title" => "Senna auriculata",
            "link"  => "senna_auriculata",
            "comms" => "Matura tea tree, Avaram or Ranawara, Tanner's Cassia",
            "scien" => "Senna auriculata",
            "type"  => "Evergreen",
            "dist"  => "India and Sri Lanka",
            "desc"  => "This is small shrub, about 1-1.5 metres in height. Its flowers are bright yellow and appear at the end of each branch. The fruit is a short legume with 12-20 seeds in every fruit stored away in a separate cavity.",
            "uses"  => "Used in Ayurveda to prepare decoctions for diabetes, fevers and urinary tract infections. The leaves are used as laxatives. The shrub is also used decoratively in home gardens.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/senna_auriculata.jpg",
        ),
        array(
            "title" => "Melaleuca viminalis",
            "link"  => "melaleuca_viminalis",
            "comms" => "Creek Bottlebrush, Weeping Bottlebrush",
            "scien" => "Melaleuca viminalis",
            "type"  => "Evergreen",
            "dist"  => "Native to Australia",
            "desc"  => "The bottlebrush is a large shrub at 10 metres tall. The flowers are its most striking feature. They are arranged as red coloured spikes around the end of the branches which continue growing even after flowering. The flowering occurs around September to December but can occur sporadically around the year. The fruit is a hard brown capsule. ",
            "uses"  => "It is a common street plant because of its hardiness.",
            "loc"   => "Roadside, Main gate to Castle Dio",
            "image" => "./static/images/events/plant-survey/melaleuca_viminalis.jpg",
        ),
        array(
            "title" => "Oroxylum indicum (गरूर का पौधा)",
            "link"  => "oroxylum_indicum",
            "comms" => "Indian trumpet flower, broken bones, Indian caper.",
            "scien" => "Oroxylum indicum",
            "type"  => "Evergreen",
            "fam" => "Bignoniaceae",
            "part" => "Flower, seeds pods and stem.",
            "loc"   => "Nectar Garden",
            "desc"  => "It is listed as <b>rare, endangered and threatened</b> plants. O. indicum is native to the Indian subcontinent and the Himalayan foothills.",
            "imp" => "Plant is used in rituals by some of the communities in Nepal, Thailand and Laos. The plant parts such as leaves, flower buds, pods and stems are consumed in local dishes of thai and Laos. The plant is known to have medicinal importance and contains diverse phytochemicals like prunetin, sitosterol, oroxindin, biochanin-A, tetuin, anthraquinone and emodin.
            O. indicum seeds are used in traditional Indian Ayurvedic and Chinese medicines.",
            "image" => "./static/images/events/plant-survey/oroxylum_indicum.jpg",
        ),
        array(
            "title" => "Pterocarpus santalinus (रक्त चन्दन)",
            "link"  => "pterocarpus_santalinus",
            "comms" => "Rakta Chandana, red saunders, Yerra Chandanam, Red sandalwood.",
            "scien" => "Pterocarpus santalinus",
            "type"  => "Evergreen",
            "fam" => "Fabaceae",
            "part" => "Wood",
            "loc"   => "Nectar Garden",
            "desc"  => "It is listed as <b>near threatened</b> plants. The plant is common in southern eastern ghats mountain range ofSouth India. The tree should not be confused with the aromatic Santalum sandal wood trees that grow natively in South India.",
            "imp" => "The wood is used as timber and highly valued in China. Due to its slow growth and rarity, furniture  made from this wood is difficult to find and is expensive. It has been one of the most prized woods for millennia. 
            P. santalinus has medicinal use and is traditionally used as an antipyretic, anti-inflammatory, anthelminthic, tonic, hemorrhage, dysentery, aphrodisiac, anti-hyperglycaemic and diaphoretic purposes.",
            "image" => "./static/images/events/plant-survey/pterocarpus_santalinus.jpg",
        ),
        array(
            "title" => "Adenanthera pavonina (रतन गुञ्ज पौधा)",
            "link"  => "adenanthera_pavonina",
            "comms" => "Red Lucky Seed, Peacock flower fence, Sandalwood tree.",
            "scien" => "Adenanthera pavonina",
            "type"  => "Evergreen",
            "fam" => "Fabaceae",
            "part" => "Leaves, bark, seed and wood",
            "loc"   => "Nectar Garden",
            "desc"  => "The tree is common in the tropical countries: Brazil and United states and in southern states of India like Tamilnadu and Kerala. A pavonina seeds are know as a symbol of love in China.",
            "imp" => "The tree has ornamental use in gardens because of its beautiful canopy and seeds.This tree is used
            for making soap and a red dye from the wood. The extremely hard wood is used in boat-building,
            making furniture and for firewood. Decoction of the young leaves and bark of red lucky tree is used
            to treat diarrhoea. The ground seeds are used to treat inflammation. The leaf extract has antibacterial
            activity.",
            "image" => "./static/images/events/plant-survey/adenanthera_pavonina.jpeg",
        ),
        array(
            "title" => "Tectona grandis (सागौन का पौधा)",
            "link"  => "tectona_grandis",
            "comms" => "Sagwaan tree, Teak tree.",
            "scien" => "Tectona grandis",
            "type"  => "Evergreen",
            "fam" => "Vitaceae",
            "part" => "Root, leaves, stem and flowers",
            "loc"   => "Nectar Garden",
            "desc"  => "<b>Teak</b> is a tropical hardwood deciduous tree. It is native to south and southeast Asia, mainly
            Bangladesh, India, Indonesia, Sri Lanka etc, but is naturalised and cultivated in many countries for
            its valued used as timber.",
            "imp" => "Teak's natural oils make it useful in exposed locations and make the timber termite and pest-
            resistant. Teak is durable even when not treated with oil or varnish. It is particularly valued for its
            durability and water resistance. The wood is used for boat building, exterior construction, veneer,
            furniture, carving and turnings.",
            "image" => "./static/images/events/plant-survey/tectona_grandis.jpg",
        ),
        array(
            "title" => "Cissus quadrangularis (हदीजोड़ पौधा)",
            "link"  => "cissus_quadrangularis",
            "comms" => "Hadjod, veldt grape, devil's backbone, adamant creeper, asthisamharaka.",
            "scien" => "Cissus quadrangularis",
            "type"  => "Evergreen",
            "fam" => "Vitaceae",
            "part" => "Root, leaves, stem and flowers",
            "loc"   => "Nectar Garden",
            "desc"  => "The species is native to tropical Asia, Arabia, and much of Africa. It is a hardy plant and can grow
            in dry condition also.",
            "imp" => "C. quadrangularis contains carotenoids. Triterpenoids and ascorbic acid. It is considered to be
            medicinally important plants and have been used in Indian classical ayurvedic medicines to heal
            broken bones and injured ligaments and tendons. Assamese people and the Garo tribe of Meghalaya
            and Bangladesh have used this for bone fracture.",
            "image" => "./static/images/events/plant-survey/cissus_quadrangularis.jpg",
        ),
        array(
            "title" => "Crateva religiosa (वरूण)",
            "link"  => "crateva_religiosa",
            "comms" => "Sacred Barna, Garlic pear tree, Varuna.",
            "scien" => "Crateva religiosa",
            "type"  => "Evergreen",
            "fam" => "Capparaceae",
            "part" => "Root, leaves, stem and flowers",
            "loc"   => "Nectar Garden",
            "desc"  => "It is native to tropical Asia and several South Pacific islands. It is grown elsewhere for fruit,
            especially in parts of the African continent.",
            "imp" => "Improves digestion, good for cardiac disorders, paralysis, blood disorders, kidney stones, headache
            and migraine. C.religiosa herb contains a pharmacologically active pentacyclic triterpenoid and
            hence has potential medicinal properties like anticancerous and anti-inflammatory effects. It is used
            in various Ayurvedic medicines.",
            "image" => "./static/images/events/plant-survey/crateva_religiosa.jpg",
        ),
        array(
            "title" => "Moringa oleifera (मुंगा)",
            "link"  => "moringa_oleifera",
            "comms" => "Moringa, Drumstick tree, Horseradish tree.",
            "scien" => "Moringa oleifera",
            "type"  => "Evergreen",
            "fam" => "Moringaceae",
            "part" => "young seed pods, flowers and leaves",
            "loc"   => "Nectar Garden",
            "desc"  => "M. oleifera is a fast-growing, drought-resistant tree native to the Indian subcontinent.India is the
            largest producer of moringa. Moringa trees have been used to combat malnutrtion, especially
            among infants and nursing mothers. Since moringa thrives in arid and semiarid environments, it
            may provide a versatile, nutritious food source throughout the year in various geographic regions.
            Some 140 organizations worldwide have initiated moringa cultivation programs to lessen
            malnutrition, purify water, and produce oils for cooking.",
            "imp" => "The leaves are the most nutritious part of the plant, being a significant source of vitamin B, C, K,
            provitamin A, manganese and protein. Commonly dried and crushed into powder for soups and
            sauces. One estimate for yield of oil from kernels is 250 L/ha. The oil can be used as food
            supplements, as a base for cosmetics, and for hair and the skin. The bark, sap, roots, leaves, seeds
            and flowers are used in traditional medicine. Moringa seed cakes obtained as a byproduct of
            pressing seeds to obtain oil, is used to filter water using flocculation.",
            "image" => "./static/images/events/plant-survey/moringa_oleifera.jpg",
        ),
        array(
            "title" => "Nyctanthes arbor-tristis (पारिजात)",
            "link"  => "nyctanthes_arbor-tristis",
            "comms" => "Night-flowering jasmine and Parijat (Parvati chi phula)",
            "scien" => "Nyctanthes arbor-tristis",
            "type"  => "Evergreen",
            "fam" => "Oleaceae",
            "part" => "Leaves, flower, bark",
            "loc"   => "Nectar Garden",
            "desc"  => "The plant is native to South Asia and Southeast Asia. It is also known as \"tree of sorrow\" because
            the flowers lose their brightness during daytime. The flower is the official flower of the state of
            West Bengal and of Kanchanaburi Province Thailand.",
            "imp" => "The flowers can be used as a source of yellowdye for clothing. The leaves have been used in
            Ayurvedic medicine and Homoeopathy for sciatica, arthritis and fever and as a laxative.",
            "image" => "./static/images/events/plant-survey/nyctanthes_arbor-tristis.jpg",
        ),
        array(
            "title" => "Ficus religiosa (पीपल का पेड़)",
            "link"  => "ficus_religiosa",
            "comms" => "Bodhi tree, peepul tree, peepal tree, ashvattha tree.",
            "scien" => "Ficus religiosa",
            "type"  => "Evergreen",
            "fam" => "Moraceae",
            "part" => "Wood and Bark",
            "loc"   => "Nectar Garden",
            "desc"  => "F. religiosa is native to most of the Indian subcontinent- Bangladesh, Nepal, Pakistan and India as
            well as part ofIndochina- the Andaman Islands, Thailand, Myanmar etc,.The sacred tree is thestate
            tree of the Indian states of Odisha and Haryana.",
            "imp" => "The tree is considered sacred by the followers of Hinduism, Jainism and Buddhism. F. religiosa is
            used in traditional medicine for about fifty types of disorders including asthma, diabetes, diarrhea,
            epilepsy, gastric problems, inflammatory disorders, infectious and sexual disorders.",
            "image" => "./static/images/events/plant-survey/ficus_religiosa.jpg",
        ),
        array(
            "title" => "Terminalia arjuna (अर्जुन वृक्ष)",
            "link"  => "terminalia_arjuna",
            "comms" => "Arjuna, arjun tree",
            "scien" => "Terminalia arjuna",
            "type"  => "Evergreen",
            "fam" => "Combretaceae",
            "part" => "leaves, bark, fruits",
            "loc"   => "Nectar Garden",
            "desc"  => "The arjuna is seen across the Indian subcontinent and found growing on river banks Uttar Pradesh, Bihar, Maharashtra, Madhya Pradesh, West Bengal, Odisha along with Sri Lanka and Bangladesh. It has oblong, conical leaves which are green on the top and brown below, smooth, grey bark; it has pale yellow flowers which appear between March and June and fibrous woody fruit divided into five wings and can be seen between September and November.",
            "imp" => "The arjuna is one of the species whose leaves are fed on by the Antheraea paphia moth which produces the tassar silk a wild silk of commercial importance. It also has various medicinal properties like antioxidant, anti-inflammatory and antimicrobial. Arjuna helps reduce the risk of heart diseases. It strengthens and tones the heart muscles and helps in proper functioning of the heart. Bark and fruits are rich in tannins which has commercial importance.",
            "image" => "./static/images/events/plant-survey/terminalia_arjuna.jpg",
        ),
        array(
            "title" => "Mimusops elengi (बकुला पेड़)",
            "link"  => "mimusops_elengi",
            "comms" => "Bakula tree, Spanish cherry, medlar, bullet wood",
            "scien" => "Mimusops elengi",
            "type"  => "Evergreen",
            "fam" => "Sapotaceae",
            "part" => "bark, flowers, fruits, seeds",
            "loc"   => "Nectar Garden",
            "desc"  => "The plant is native to South and Southeast Asia, particularly the coastal areas of the Indian subcontinent, Sri Lanka, Vietnam and Myanmar.",
            "imp" => "The fruit is edible when bright red-orange in colour. The bark, flowers, fruits, and seeds of Bakula are used in Ayurvedic medicine due to its astringent, cooling, anthelmintihic effect. It is mainly used for dental ailments such as bleeding gums, pyorrhea, dental caries and loose teeth.",
            "image" => "./static/images/events/plant-survey/mimusops_elengi.jpg",
        ),
        array(
            "title" => "Bauhinia racemosa (बीड़ी के पत्ते का पेड़)",
            "link"  => "bauhinia_racemosa",
            "comms" => "bidi leaf tree",
            "scien" => "Bauhinia racemosa",
            "type"  => "Evergreen",
            "fam" => "Fabaceae",
            "part" => "bark, flowers, fruits, seeds",
            "loc"   => "Nectar Garden",
            "desc"  => "Rare medicinal species of flowering shrub with religious significance. It is native to tropical Southeast Asia.",
            "imp" => "The leaves are used in the production of beedi, a thin Indian cigarette. In Maharashtrian families it is customary to exchange leaves of the Aapta tree on the day of Dussehra. It is known as exchanging Gold—that is why the tree is also called  Sonpatta (leaves of Gold).",
            "image" => "./static/images/events/plant-survey/bauhinia_racemosa.jpeg",
        ),
        array(
            "title" => "Cordia myxa (लसुर)",
            "link"  => "cordia_myxa",
            "comms" => "bidi leaf tree",
            "scien" => "Cordia myxa",
            "type"  => "Evergreen",
            "fam" => "Boraginaceae",
            "part" => "fruits",
            "loc"   => "Nectar Garden",
            "desc"  => "It is found growing primarily in Asia, as well as, across the globe especially in tropical regions starting from 200 m above mean sea level in the plains and ascends to an altitude around 1,500 m in the hills. The bark is distinctly grayish brown in color with longitudinal and vertical fissures.",
            "imp" => "Fully ripe fruit has sweet and juicy flavor. The pulp of a half ripe fruit can be used as an alternative to paper glue in office work.
            Note: Cordia myxamay contains <b>tumorigenic</b> pyrrolizidine alkaloids.",
            "image" => "./static/images/events/plant-survey/cordia_myxa.jpg",
        ),
        array(
            "title" => "Vitex negundo (निर्गुन्डी)",
            "link"  => "vitex_negundo",
            "comms" => "Nirgundi, Chinese chaste tree, five-leaved chaste tree, or horseshoe vitex, or nisinda",
            "scien" => "Vitex negundo",
            "type"  => "Evergreen",
            "fam" => "Lamiaceae",
            "part" => "Plant/leaf extract",
            "loc"   => "Nectar Garden",
            "desc"  => "It is a large aromatic shrub. Vitex negundo is native to tropical Eastern and Southern Asia and Africa. It is widely cultivated and naturalized elsewhere also.",
            "imp" => "Purified extracts are believed to have medicinal properties. Vitex negundo is used as a cough remedy and sold under the trade names Ascof and Plemex. In Malaysia, it is used in traditional herbal medicine for women's health, including treatments for regulating the menstrual cycle, fibrocystic breast disease and post-partum remedies.",
            "image" => "./static/images/events/plant-survey/vitex_negundo.jpg",
        ),
        array(
            "title" => "Simarouba glauca (स्वर्ग के पेड़)",
            "link"  => "simarouba_glauca",
            "comms" => "Luxmi Taru, bitterwood, paradise tree, Simarouba, gavilan, negrito, cedro blanco, malacacheta, palo amargo",
            "scien" => "Simarouba glauca",
            "type"  => "Evergreen",
            "fam" => "Simaroubaceae",
            "part" => "Leaf, seed, fruit pulp, bark extract, root",
            "loc"   => "Nectar Garden",
            "misc" => "Highly recommended to grow more and more Paradise trees as a gift to Humanity due to its anti-cancerous properties.",
            "planted" => "Director, IIT Bhilai",
            "desc"  => "Paradise tree is an evergreen, small to medium-sized tree. It is native to Bahamas, Jamaica, Mexico, Puerto rico, united states of America.",
            "imp" => "Plant parts are highly medicinal and used for multiple purposes. Beneficial for fever, malaria, diarrhea, dysentery, intestinal parasites, indigestion, anemia, herpes, influenza, polio, and vaccinia viruses. Also known for anti-cancerous properties. The seed produces edible oil used in the preparation of bakery products and for industrial purposes. Seed shells can be used in the manufacture of particle board, activated charcoal, or as fuel. The wood is used for interior construction, boxes and crates, furniture.",
            "image" => "./static/images/events/plant-survey/simarouba_glauca.jpeg",
        ),
        array(
            "title" => "Justicia adhatoda (वासका के पेड़)",
            "link"  => "justicia_adhatoda",
            "comms" => "Malabar nut, adulsa, adhatoda, vasa, vasaka",
            "scien" => "Justicia adhatoda",
            "type"  => "Evergreen",
            "fam" => "Acanthaceae",
            "part" => "Leaf",
            "loc"   => "Nectar Garden",
            "desc"  => "The plant exist as shrub and is native of Indian subcontinent (Assam, Bangladesh, India, Nepal and Sri Lanka) and Myanmar. It has been introduced elsewhere also.",
            "imp" => "It is a medicinal plant widely used in a number of traditional medicines in Siddha, Ayurveda, homeopathy, and Unani medicine. The leaves of Justicia adhatoda contains phytochemicals such as alkaloids, tannins, saponins, phenolics and flavonoids.",
            "image" => "./static/images/events/plant-survey/justicia_adhatoda.jpg",
        ),
        array(
            "title" => "Elaeocarpus ganitrus (रुद्राक्ष वृक्ष)",
            "link"  => "elaeocarpus_ganitrus",
            "comms" => "Rudraksha, stonefruit",
            "scien" => "Elaeocarpus ganitrus",
            "type"  => "Evergreen",
            "fam" => "Elaeocarpus",
            "part" => "Fruit",
            "loc"   => "Nectar Garden",
            "desc"  => "35 out of the 300 species of Elaeocarpus are found in India. The principal species of this genus is Elaeocarpus ganitrus, which is commonly known as \"rudraksha tree\", and is found in Gangetic plain, in the foothills of the Himalayas, parts of Australia, Guam and Hawaii.",
            "imp" => "Rudraksha fruits contain alkaloids, flavonoids, tannins, steroids, triterpenes, and cardiac glycosides.  They also contain rudrakine an alkaloid which had been discovered in rudraksha fruit. 
            The dried stones are used as prayer beads by Hindus, as well as by Buddhists, Sikhs and Muslims. When they are ripe, rudraksha stones are covered by an inedible blue outer fruit so they are sometimes called \"blueberry beads.\"",
            "image" => "./static/images/events/plant-survey/elaeocarpus_ganitrus.jpg",
        ),
    )

    ?>

    <div class="plant-list">
        <?php foreach ($plants as $plant) : ?>
            <div class="transition-blog-card">
                <div class="photo" style="background-image: url(<?= $plant['image']; ?>)"></div>
                <div class="info">
                    <h1><?= $plant['title']; ?></h1>
                    <p><?= $plant['desc']; ?> </p>
                    <a href="<?= $plant['link']; ?>.php" onclick="toggleBodyScroll()">
                        <button>Read More</button>
                    </a>
                </div>
            </div>

            <div class="popup" id="<?= $plant['link']; ?>">
                <div class="popup-inner">
                    <div class="popup__scroll">
                        <div class="popup__photo">
                            <img src=<?= $plant['image']; ?> alt="" />
                        </div>
                        <div class="popup__text">
                            <h1><?= $plant['title']; ?></h1>
                            <p><i><b>Scientific Name:</b> <?= $plant['scien']; ?></i></p>
                            <p><b>Common Names:</b> <?= $plant['comms']; ?></p>
                            <?php
                            if (array_key_exists('type', $plant))
                                echo "<p><b> Type: " . $plant['type'] . "</b></p>";
                            if (array_key_exists('misc', $plant))
                                echo "<p><b>" . $plant['misc'] . "</b></p>";
                            if (array_key_exists('planted', $plant))
                                echo "<p><b> Planted by: " . $plant['planted'] . "</b></p>";
                            if (array_key_exists('dist', $plant))
                                echo "<p><b> Distribution: " . $plant['dist'] . "</b></p>";
                            if (array_key_exists('fam', $plant))
                                echo "<p><b> Family: " . $plant['fam'] . "</b></p>";
                            if (array_key_exists('part', $plant))
                                echo "<p><b> Parts used: " . $plant['part'] . "</b></p>";
                            if (array_key_exists('desc', $plant))
                                echo "<p><b> Description: " . $plant['desc'] . "</b></p>";
                            if (array_key_exists('imp', $plant))
                                echo "<p><b> Importance: " . $plant['imp'] . "</b></p>";
                            if (array_key_exists('uses', $plant))
                                echo "<p><b> Uses: " . $plant['uses'] . "</b></p>";
                            if (array_key_exists('loc', $plant))
                                echo "<p><b> Location: " . $plant['loc'] . "</b></p>";
                            ?>
                        </div>
                    </div>
                    <!-- <a class="popup__close" href="javascript:history.back()" onclick="toggleBodyScroll()">X</a> -->
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <!-- footer -->
    <?php include 'components/footer.php'; ?>

    <!-- jQuery-->
    <?php include 'components/scripts.php'; ?>

    <script>
        window.onclick = function(event) {
            console.log(event.target);
            if (event.target.className.indexOf('popup') >= 0) {
                history.back();
                toggleBodyScroll();
            }
        }

        function toggleBodyScroll() {
            const oldValue = document.body.style.overflow;
            document.body.style.overflow = (oldValue == 'hidden') ? 'scroll' : 'hidden';
        }

        if (window.location.hash) {
            toggleBodyScroll();
        }
    </script>

</body>

</html>