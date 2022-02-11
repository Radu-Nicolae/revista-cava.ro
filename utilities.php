<?php

class Article
{
    var $title;
    var $description;
    var $day;
    var $month;
    var $url;
    var $authorName;
    var $authorUrl;

    /**
     * @param $title
     * @param $description
     * @param $day
     * @param $month
     * @param $url
     * @param $authorName
     * @param $authorUrl
     */
    public function __construct($title, $description, $day, $month, $url, $authorName, $authorUrl)
    {
        $this->title = $title;
        $this->description = $description;
        $this->day = $day;
        $this->month = $month;
        $this->url = $url;
        $this->authorName = $authorName;
        $this->authorUrl = $authorUrl;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param mixed $authorName
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
    }

    /**
     * @return mixed
     */
    public function getAuthorUrl()
    {
        return $this->authorUrl;
    }

    /**
     * @param mixed $authorUrl
     */
    public function setAuthorUrl($authorUrl)
    {
        $this->authorUrl = $authorUrl;
    }


    public function getDatabase()
    {
        $negemenele = new Article("negemenele germinează în floare", "", "29", "Oct", "negemenele", "Ioana Barbu", "ioanabarbu.jpeg");
        $hauntedPlaces = new Article("Top 5 most haunted places in Romania", "Halloween is a world known celebration where people dress up as scary characters or real life people, decorate their houses and carve out pumpkins. However, many forget the roots of this holiday, as the initially frightening and sinister costumes have been wrapped in advertising campaigns and children stories, now not having such a grotesque look.", "31", "Oct", "hauntedPlaces", "Taisia Plesi", "taisiaplesi.jpeg");
        $logomania = new Article("The rebirth of logo mania", "When you think logos, you either think tacky or statement. From hypebeast culture to subtle wealth show offs, logos have been playing a huge part in the fashion industry for a century. ", "4", "Nov", "logomania", "Alessia Grecu", "unknown.jpeg");
        $glimpse = new Article("a glimpse can never be enough", "", "5", "Nov", "glimpse", 'Anastasia Hangiu', "anastasiahagiu.jpg");
        $inteligentaLaModa = new Article("Când va fi și inteligența la modă?", "Printre tendințele actuale, probabil una dintre cele mai pregnante este aceea de a reabilita – și câteodată chiar a preaslăvi – ceea ce odată am desconsiderat sau denigrat. Una dintre categoriile de oameni care suferă cel mai mult, dar o fac fără să bată toba, sunt oamenii inteligenți. De ce au ei soarta asta? Nu cumva sună a discriminare? Și nu va veni cândva și rândul lor să fie „repuși în drepturi”?", "10", "Nov", "inteligentaLaModa", "Mihai Stanescu", "mihaistanescu.jpeg");
        $youngAndFamous = new Article("Young and Famous - a blessing or a curse", "Life in the spotlight seems so very glamorous – until it isn’t. We’ve all seen the documentaries – monsters hiding in plain sight, contracts that no one benefits from, the intrigues and games in the backstage. Yet, somehow, the life of celebrities has maintained its appeal; no one is thrown off, most want it all the same. ", "12", "Nov", "youngAndFamous", "Catinca Apostol", "catinca.jpeg");
        $sentimente = new Article("Sentimente", "	Oh! Să fii adolescent înseamnă să treci prin atâtea schimbări și emoții, încât, în majoritatea timpului, te simți chiar și tu confuz și pierdut.", "15", "Nov", "sentimente2", "Alexandra Vladu", "alexandravladu.jpg");
        $anarchy = new Article("anarchy", "", "17", "Nov", "anarchy", "Nereia Crișan", "nereiacrisan.jpeg");
        $movies35 = new Article("35 Movies that break the 4th wall", "Let’s take a square room- got 4 standing walls. There’s an actor drinking water inside of it. How can we film the action? If we don’t move the camera, then we can only film the action from one perspective, while covering the wall behind us. So the actor uses three walls, because the camera occupies the fourth. The actor never looks into the camera, so he never uses the fourth wall.", "21", "Nov", "35movies", "Ilona Dragomir", "unknown.jpeg");
        $justThisOnce = new Article("just this once", "", "24", "Nov", "justThisOnce", "Anastasia Hangiu", "anastasiahagiu");
        $red = new Article("Red (Taylor's Version)", "If you've met me, you already know Taylor Swift's discography is the soundtrack of my life. After her masters controversy, I thought my favorite album was lost for good; taxi cabs and busy streets, they'd never bring it back to me... ", "27", "Nov", "red", "Ilinca Sotirescu", "ilincasotirescu.jpeg");
        $merryCovid = new Article("Merry Covid Christmas ", "It’s been almost two years since humanity has had to deal with the massive health crisis brought over by Covid-19. It was first discovered in Wuhan, China at the end of 2019, hence the name, but the exact cause still remains unclear. After that, it was slowly transmitted to the rest of the country.", "29", "Nov", "merryCovid", "Taisia Plesi", "taisiaplesi.jpeg");
        $nothingScarier = new Article("Nothing scarier than change", "", "9", "Dec", "nothingScarier", "Mihaela Filipescu", "unknown.jpeg");
        $spotifyWrapped = new Article("spotify wrapped", "Iată-ne ajunși la final de an. Revelionul se apropie cu pași repezi, iar zilele sunt numărate până Moș Crăciun va veni la noi. Cu toate acestea, primul eveniment important al lunii decembrie este Spotify Wrapped.", "11", "Dec", "spotifyWrapped", "Alexandra Vladu", "alexandravladu.jpg");
        $midtermStress = new Article("Midterm stress", "Midterms. The result of months’ worth of work and lessons you most probably didn’t learn beforehand. Those horrifying two to three weeks when most students try to get up to date with all the schoolwork, staying up, only functioning on caffeine, and waking up at 6 am only to roam the school halls like exhausted zombies.", "14", "Dec", "midtermStress", "Anastasia Mihai", "unknown.jpeg");
        $fabricaDeMancare = new Article("Fabrica de mâncare K", "Nimeni nu putea nega importanța acestui templu industrial făcător de minuni, fabrica de mâncare K era o construcție vitală pentru concetățenii cu fețele stinse. Vopsită în verde, acoperită de zgârie-norii care se înălțau amenințător peste fabrică, nu ocupa o suprafață mare, însă de aici porneau cele trei linii de tren care duceau către centrul metropolei, de unde se obținea rația zilnică de hrană, artere într-o inimă.", "17", "Dec", "fabricaDeMancare", "Călin Mihai Tănase", "unknown.jpeg");
        $destinulUltim = new Article("Destinul Ultim al Universului", "Destinul universului a fost dezbătut doar în filosofie și religie pentru mult timp. De câteva decenii însă, lucrurile s-au schimbat. Dezvoltarea științei, a cosmologiei fizice, mai exact, a făcut ca acest subiect să fie studiat și din punct de vedere științific. Destinul universului este un subiect care unește toți locuitorii acestei lumi, deoarece este vorba despre soarta finală a tot ce a fost, tot ce este și tot ce va fi vreodată.", "19", "Dec", "destinulUltim", "Matei Dăianu", "unknown.jpeg");
        $povesteDeCraciun = new Article("O poveste de Crăciun", "	Era o zi superbă de iarnă, iar Niclaus schia fericit pe pârtia muntelui din apropierea casei în care locuia. Fulgii îi împărtășeau voioșia, dansând neosteniți în jurul lui. Nici vântul nu se lăsa mai prejos, șuierând melodios printre ramurile pline de zăpadă ale copacilor, de-a lungul pârtiei, răscolind zăpada, norii și parcă împingându-l de la spate pe schior … tot înainte, tot înainte … ", "22", "Dec", "povesteDeCraciun", "Ioana Busuioc", "unknown.jpeg");
        $choseHim = new Article("I'm sorry I chose him", "", "22", "Dec", "choseHim", "Nereia Crisan", "nereiacrisan.jpeg");
        $eticaBrazilor = new Article("Etica brazilor de Crăciun", "E mai bine să cumperi brad real sau artificial? <br> Sărbătorile de iarnă au revenit și în mijlocul petrecerilor, cadourilor și decorațiunilor e bradul, simbolul speranței și al nemuririi. Indiferent ce fel de brad ai, te-ai întrebat probabil la un moment dat: care e varianta mai bună pentru mine și pentru mediu – un brad natural sau unul de plastic?", "26", "Dec", "eticaBrazilor", "Parascheva Toboșaru", "unknown.jpeg");
        $whenIGrowUp = new Article("When I Grow Up- A Story About Beds", "It got really cold after 3 am in his room. Regardless of the heating system - for which his parents paid a great deal of money, regardless of the blue and white blanket he found hidden in a stocking 2 years before. It always gets cold after 3. That's about the time when you start noticing things.", "28", "Dec", "whenIGrowUp", "Clara Pistol", "unknown.jpeg");
        $boobcInPandemie = new Article("Boboc în pandemie", "Știți povestea aceea când un angajat scoate din priză serverul ca să-și încarce telefonul și toată activitatea firmei se oprește și nimeni nu înțelege ce se întâmplă? Exact asta am trăit cu toții, numai că ,,ceva” a scos din priză... LUMEA. Ne uitam speriați și confuzi unii la alții.", "30", "Dec", "bobocInPandemie", "Diana Burja", "unknown.jpeg");
        $artPerformance = new Article("Art performance: Marina Abramović", "Marina Abramović is a Serbian conceptual and performance artist, as well as a writer and filmmaker. She is rightfully considered a founder of what we know today as “art performance” having a life-long dedicated career and spreading her work and passion worldwide.", "07", "Ian", "artPerformance", "Taisia Plesi", "taisiaplesi.jpeg");
        $gandireaCritica = new Article("Gândirea critică din școlile din România", "România se clasează pe locul 125 din 141 de state la capitolul ,,predarea gândirii critice” în Raportul Competitivității Globale 2019 făcut de Forumul Economic Mondial.", "10", "Ian", "gandireaCritica", "Diana Georgescu", "unknown.jpeg");
        $addictedToSugar = new Article("Are We Addicted To Sugar?", "	Sweets – those things we just can’t stay away from, despite how hard we try to impose a no-sugar diet. It’s in their nature; they’re just too good. Who can say no to a piece of chocolate? But have you ever wondered why we just can’t seem to refuse them?", "17", "Ian", "addictedToSugar", "Catinca Apostol", "catinca.jpeg");
        $lumileCelorlalti = new Article("Cum te poți pierde în lumile celorlalți", "Să te pierzi în lumile celorlalți… Este acel moment când te priveṣti pe tine însuți din capătul unui metrou, cu sinele tău adevărat în capătul opus. O infinitate de suflete vă desparte. Suflete ṣi personalități pe care le-ai avut sau pe care le vei avea pentru a te redescoperi, pentru a-ți regăsi realitatea.", "19", "Ian", "lumileCelorlalti", "Ana Negoiță", "unknown.jpeg");
        $movieStar = new Article("What makes a movie star?", "Everybody says, ‘You impress me as a guy who never wanted to be a movie star’. I say: ‘Everybody in the world wants to be a movie star’.  -Rip Torn", "22", "Ian", "movieStar", "Ilona Dragomir", "unknown.jpeg");
        $necrologul = new Article("Necrologul chiulului din Sava", "De data aceasta mi-am propus să scriu despre un prieten bun de-al nostru, al tuturor, care a murit, săracul, acum câteva zile. Cum s-a întâmplat asta? Într-un accident stupid, așa cum se întâmplă de obicei băieților buni.", "25", "Ian", "necrologul", "Mihai Stănescu", "mihaistanescu.jpeg");
        $carti2021 = new Article("Am citit cele mai populare cărți din 2021 în locul tău", "În cadrul oricărei rețele de socializare există, inevitabil, un colțișor rezervat special pentru cărți. Fie că vorbim de TikTok, Instagram sau YouTube, în 2021 am petrecut mai mult timp ca oricând în acele părți ale internetului, iar câteva cărți îmi apăreau inevitabil în primele două minute.", "28", "Ian", "carti2021", "Ioana Jeleboglu", "unknown.jpeg");
        $spirituality = new Article("spirituality 101", "Spiritualitatea e un concept atât de simplu, dar în același timp atât de greu de înțeles pentru cineva care nu vrea să dea timp procesului.", "07", "Feb", "spirituality", "Alexandra Vladu", "alexandravladu.jpg");
        $theWay = new Article("The way", "", "09", "Feb", "theWay", "Anastasia Hangiu", "anastasiahagiu.jpg");
        $europa2000 = new Article("Europa 2000", "În apropiere de Honningsvåg se afla un sat peste care trona permafrostul și aerul glaciar, ce înțepa nasurile care nu erau brăzdate de cute sau tinere. Toți sătenii aveau nasul plecat, înfruntau aerul în plin, îl despicau, le intra în ochi. De aceea, copiii vorbeau de bunici că nu aveau ochi, deoarece erau aproape înveliți în piele.", "11", "Feb", "europa2000", "Călin Mihai Tănase", "unknown.jpeg");


        $articles = array(
//            ADD HERE
//            ADD HERE
//            ADD HERE
            $europa2000,
            $theWay,
            $spirituality,
            $carti2021,
            $necrologul,
            $movieStar,
            $lumileCelorlalti,
            $addictedToSugar,
            $gandireaCritica,
            $artPerformance,
            $boobcInPandemie,
            $whenIGrowUp,
            $eticaBrazilor,
            $choseHim,
            $povesteDeCraciun,
            $destinulUltim,
            $fabricaDeMancare,
            $midtermStress,
            $spotifyWrapped,
            $nothingScarier,
            $merryCovid,
            $red,
            $justThisOnce,
            $movies35,
            $anarchy,
            $sentimente,
            $youngAndFamous,
            $inteligentaLaModa,
            $glimpse,
            $logomania,
            $hauntedPlaces,
            $negemenele,

//            DO NOT ADD HERE

        );

        return $articles;
    }

    public function getDatabaseBlogEn()
    {
        $youngAndFamous = new Article("Young and Famous - a blessing or a curse", "Life in the spotlight seems so very glamorous – until it isn’t. We’ve all seen the documentaries – monsters hiding in plain sight, contracts that no one benefits from, the intrigues and games in the backstage. Yet, somehow, the life of celebrities has maintained its appeal; no one is thrown off, most want it all the same. ", "12", "Nov", "youngAndFamous", "Catinca Apostol", "catinca.jpeg");
        $anarchy = new Article("anarchy", "", "17", "Nov", "anarchy", "Nereia Crișan", "nereiacrisan.jpeg");
        $movies35 = new Article("35 Movies that break the 4th wall", "Let’s take a square room- got 4 standing walls. There’s an actor drinking water inside of it. How can we film the action? If we don’t move the camera, then we can only film the action from one perspective, while covering the wall behind us. So the actor uses three walls, because the camera occupies the fourth. The actor never looks into the camera, so he never uses the fourth wall.", "21", "Nov", "35movies", "Ilona Dragomir", "unknown.jpeg");
        $justThisOnce = new Article("just this once", "", "24", "Nov", "justThisOnce", "Anastasia Hangiu", "anastasiahagiu");
        $red = new Article("Red (Taylor's Version)", "If you've met me, you already know Taylor Swift's discography is the soundtrack of my life. After her masters controversy, I thought my favorite album was lost for good; taxi cabs and busy streets, they'd never bring it back to me... ", "27", "Nov", "red", "Ilinca Sotirescu", "ilincasotirescu.jpeg");
        $merryCovid = new Article("Merry Covid Christmas ", "It’s been almost two years since humanity has had to deal with the massive health crisis brought over by Covid-19. It was first discovered in Wuhan, China at the end of 2019, hence the name, but the exact cause still remains unclear. After that, it was slowly transmitted to the rest of the country.", "29", "Nov", "merryCovid", "Taisia Plesi", "taisiaplesi.jpeg");
        $nothingScarier = new Article("Nothing scarier than change", "", "9", "Dec", "nothingScarier", "Mihaela Filipescu", "unknown.jpeg");
        $midtermStress = new Article("Midterm stress", "Midterms. The result of months’ worth of work and lessons you most probably didn’t learn beforehand. Those horrifying two to three weeks when most students try to get up to date with all the schoolwork, staying up, only functioning on caffeine, and waking up at 6 am only to roam the school halls like exhausted zombies.", "14", "Dec", "midtermStress", "Anastasia Mihai", "unknown.jpeg");
        $artPerformance = new Article("Art performance: Marina Abramović", "Marina Abramović is a Serbian conceptual and performance artist, as well as a writer and filmmaker. She is rightfully considered a founder of what we know today as “art performance” having a life-long dedicated career and spreading her work and passion worldwide.", "07", "Ian", "artPerformance", "Taisia Plesi", "taisiaplesi.jpeg");


        $articles = array(
            $artPerformance,
            $midtermStress,
            $nothingScarier,
            $merryCovid,
            $red,
            $justThisOnce,
            $movies35,
            $anarchy,
            $youngAndFamous,
        );

        return $articles;
    }


    public function getDatabaseLiteratura()
    {
        $negemenele = new Article("negemenele germinează în floare", "", "29", "Oct", "negemenele", "Ioana Barbu", "ioanabarbu.jpeg");
        $fabricaDeMancare = new Article("Fabrica de mâncare K", "Nimeni nu putea nega importanța acestui templu industrial făcător de minuni, fabrica de mâncare K era o construcție vitală pentru concetățenii cu fețele stinse. Vopsită în verde, acoperită de zgârie-norii care se înălțau amenințător peste fabrică, nu ocupa o suprafață mare, însă de aici porneau cele trei linii de tren care duceau către centrul metropolei, de unde se obținea rația zilnică de hrană, artere într-o inimă.", "17", "Dec", "fabricaDeMancare", "Călin Mihai Tănase", "unknown.jpeg");
        $povesteDeCraciun = new Article("O poveste de Crăciun", "	Era o zi superbă de iarnă, iar Niclaus schia fericit pe pârtia muntelui din apropierea casei în care locuia. Fulgii îi împărtășeau voioșia, dansând neosteniți în jurul lui. Nici vântul nu se lăsa mai prejos, șuierând melodios printre ramurile pline de zăpadă ale copacilor, de-a lungul pârtiei, răscolind zăpada, norii și parcă împingându-l de la spate pe schior … tot înainte, tot înainte … ", "22", "Dec", "povesteDeCraciun", "Ioana Busuioc", "unknown");
        $boobcInPandemie = new Article("Boboc în pandemie", "Știți povestea aceea când un angajat scoate din priză serverul ca să-și încarce telefonul și toată activitatea firmei se oprește și nimeni nu înțelege ce se întâmplă? Exact asta am trăit cu toții, numai că ,,ceva” a scos din priză... LUMEA. Ne uitam speriați și confuzi unii la alții.", "30", "Dec", "bobocInPandemie", "Diana Burja", "unknown.jpeg");
        $lumileCelorlalti = new Article("Cum te poți pierde în lumile celorlalți", "Să te pierzi în lumile celorlalți… Este acel moment când te priveṣti pe tine însuți din capătul unui metrou, cu sinele tău adevărat în capătul opus. O infinitate de suflete vă desparte. Suflete ṣi personalități pe care le-ai avut sau pe care le vei avea pentru a te redescoperi, pentru a-ți regăsi realitatea.", "19", "Ian", "lumileCelorlalti", "Ana Negoiță", "unknown.jpeg");
        $carti2021 = new Article("Am citit cele mai populare cărți din 2021 în locul tău", "În cadrul oricărei rețele de socializare există, inevitabil, un colțișor rezervat special pentru cărți. Fie că vorbim de TikTok, Instagram sau YouTube, în 2021 am petrecut mai mult timp ca oricând în acele părți ale internetului, iar câteva cărți îmi apăreau inevitabil în primele două minute.", "28", "Ian", "carti2021", "Ioana Jeleboglu", "unknown.jpeg");
        $europa2000 = new Article("Europa 2000", "În apropiere de Honningsvåg se afla un sat peste care trona permafrostul și aerul glaciar, ce înțepa nasurile care nu erau brăzdate de cute sau tinere. Toți sătenii aveau nasul plecat, înfruntau aerul în plin, îl despicau, le intra în ochi. De aceea, copiii vorbeau de bunici că nu aveau ochi, deoarece erau aproape înveliți în piele.", "11", "Feb", "europa2000", "Călin Mihai Tănase", "unknown.jpeg");


        $articles = array(
            $europa2000,
            $carti2021,
            $lumileCelorlalti,
            $boobcInPandemie,
            $povesteDeCraciun,
            $fabricaDeMancare,
            $negemenele
        );

        return $articles;
    }

    public function getDatabaseLiterature()
    {
        $anarchy = new Article("anarchy", "", "17", "Nov", "anarchy", "Nereia Crișan", "nereiacrisan.jpeg");
        $whenIGrowUp = new Article("When I Grow Up- A Story About Beds", "It got really cold after 3 am in his room. Regardless of the heating system - for which his parents paid a great deal of money, regardless of the blue and white blanket he found hidden in a stocking 2 years before. It always gets cold after 3. That's about the time when you start noticing things.", "28", "Dec", "whenIGrowUp", "Clara Pistol", "unknwon.jpeg");


        $articles = array(
            $whenIGrowUp,
            $anarchy
        );

        return $articles;
    }


    public function getDatabasePoezie()
    {
        $hauntedPlaces = new Article("Top 5 most haunted places in Romania", "Halloween is a world known celebration where people dress up as scary characters or real life people, decorate their houses and carve out pumpkins. However, many forget the roots of this holiday, as the initially frightening and sinister costumes have been wrapped in advertising campaigns and children stories, now not having such a grotesque look.", "31", "Oct", "hauntedPlaces", "Taisia Plesi", "taisiaplesi.jpeg");
        $justThisOnce = new Article("just this once", "", "24", "Nov", "justThisOnce", "Anastasia Hangiu", "anastasiahagiu.jpg");
        $nothingScarier = new Article("Nothing scarier than change", "", "9", "Dec", "nothingScarier", "Mihaela Filipescu", "unknown.jpeg");
        $choseHim = new Article("I'm sorry I chose him", "", "22", "Dec", "choseHim", "Nereia Crisan", "nereiacrisan.jpeg");
        $theWay = new Article("The way", "", "09", "Feb", "theWay", "Anastasia Hangiu", "anastasiahagiu.jpg");


        $articles = array(
            $theWay,
            $choseHim,
            $nothingScarier,
            $justThisOnce,
            $hauntedPlaces
        );

        return $articles;
    }

    public function getDatabaseProza()
    {
        $fabricaDeMancare = new Article("Fabrica de mâncare K", "Nimeni nu putea nega importanța acestui templu industrial făcător de minuni, fabrica de mâncare K era o construcție vitală pentru concetățenii cu fețele stinse. Vopsită în verde, acoperită de zgârie-norii care se înălțau amenințător peste fabrică, nu ocupa o suprafață mare, însă de aici porneau cele trei linii de tren care duceau către centrul metropolei, de unde se obținea rația zilnică de hrană, artere într-o inimă.", "17", "Dec", "fabricaDeMancare", "Călin Mihai Tănase", "unknown.jpeg");
        $povesteDeCraciun = new Article("O poveste de Crăciun", "	Era o zi superbă de iarnă, iar Niclaus schia fericit pe pârtia muntelui din apropierea casei în care locuia. Fulgii îi împărtășeau voioșia, dansând neosteniți în jurul lui. Nici vântul nu se lăsa mai prejos, șuierând melodios printre ramurile pline de zăpadă ale copacilor, de-a lungul pârtiei, răscolind zăpada, norii și parcă împingându-l de la spate pe schior … tot înainte, tot înainte … ", "22", "Dec", "povesteDeCraciun", "Ioana Busuioc", "unknown.jpeg");
        $whenIGrowUp = new Article("When I Grow Up- A Story About Beds", "It got really cold after 3 am in his room. Regardless of the heating system - for which his parents paid a great deal of money, regardless of the blue and white blanket he found hidden in a stocking 2 years before. It always gets cold after 3. That's about the time when you start noticing things.", "28", "Dec", "whenIGrowUp", "Clara Pistol", "unknwon.jpeg");
        $boobcInPandemie = new Article("Boboc în pandemie", "Știți povestea aceea când un angajat scoate din priză serverul ca să-și încarce telefonul și toată activitatea firmei se oprește și nimeni nu înțelege ce se întâmplă? Exact asta am trăit cu toții, numai că ,,ceva” a scos din priză... LUMEA. Ne uitam speriați și confuzi unii la alții.", "30", "Dec", "bobocInPandemie", "Diana Burja", "unknown.jpeg");
        $lumileCelorlalti = new Article("Cum te poți pierde în lumile celorlalți", "Să te pierzi în lumile celorlalți… Este acel moment când te priveṣti pe tine însuți din capătul unui metrou, cu sinele tău adevărat în capătul opus. O infinitate de suflete vă desparte. Suflete ṣi personalități pe care le-ai avut sau pe care le vei avea pentru a te redescoperi, pentru a-ți regăsi realitatea.", "19", "Ian", "lumileCelorlalti", "Ana Negoiță", "unknown.jpeg");
        $europa2000 = new Article("Europa 2000", "În apropiere de Honningsvåg se afla un sat peste care trona permafrostul și aerul glaciar, ce înțepa nasurile care nu erau brăzdate de cute sau tinere. Toți sătenii aveau nasul plecat, înfruntau aerul în plin, îl despicau, le intra în ochi. De aceea, copiii vorbeau de bunici că nu aveau ochi, deoarece erau aproape înveliți în piele.", "11", "Feb", "europa2000", "Călin Mihai Tănase", "unknown.jpeg");



        $articles = array(
            $europa2000,
            $lumileCelorlalti,
            $boobcInPandemie,
            $whenIGrowUp,
            $povesteDeCraciun,
            $fabricaDeMancare
        );

        return $articles;
    }


    public function getDatabaseCritica()
    {
        $red = new Article("Red (Taylor's Version)", "If you've met me, you already know Taylor Swift's discography is the soundtrack of my life. After her masters controversy, I thought my favorite album was lost for good; taxi cabs and busy streets, they'd never bring it back to me... ", "27", "Nov", "red", "Ilinca Sotirescu", "ilincasotirescu.jpeg");
        $carti2021 = new Article("Am citit cele mai populare cărți din 2021 în locul tău", "În cadrul oricărei rețele de socializare există, inevitabil, un colțișor rezervat special pentru cărți. Fie că vorbim de TikTok, Instagram sau YouTube, în 2021 am petrecut mai mult timp ca oricând în acele părți ale internetului, iar câteva cărți îmi apăreau inevitabil în primele două minute.", "28", "Ian", "carti2021", "Ioana Jeleboglu", "unknown.jpeg");


        $articles = array(
            $carti2021,
            $red
        );

        return $articles;
    }

    public function getDatabaseFashion()
    {
        $logomania = new Article("The rebirth of logo mania", "When you think logos, you either think tacky or statement. From hypebeast culture to subtle wealth show offs, logos have been playing a huge part in the fashion industry for a century. ", "4", "Nov", "logomania", "Alessia Grecu", "unknown.jpeg");

        $articles = array(
            $logomania
        );

        return $articles;
    }

    public function getDatabaseLimbi()
    {
        $glimpse = new Article("a glimpse can never be enough", "", "5", "Nov", "glimpse", 'Anastasia Hangiu', "anastasiahagiu.jpg");
        $logomania = new Article("The rebirth of logo mania", "When you think logos, you either think tacky or statement. From hypebeast culture to subtle wealth show offs, logos have been playing a huge part in the fashion industry for a century. ", "4", "Nov", "logomania", "Alessia Grecu", "unknown.jpeg");
        $youngAndFamous = new Article("Young and Famous - a blessing or a curse", "Life in the spotlight seems so very glamorous – until it isn’t. We’ve all seen the documentaries – monsters hiding in plain sight, contracts that no one benefits from, the intrigues and games in the backstage. Yet, somehow, the life of celebrities has maintained its appeal; no one is thrown off, most want it all the same. ", "12", "Nov", "youngAndFamous", "Catinca Apostol", "catinca.jpeg");
        $anarchy = new Article("anarchy", "", "17", "Nov", "anarchy", "Nereia Crișan", "nereiacrisan.jpeg");
        $movies35 = new Article("35 Movies that break the 4th wall", "Let’s take a square room- got 4 standing walls. There’s an actor drinking water inside of it. How can we film the action? If we don’t move the camera, then we can only film the action from one perspective, while covering the wall behind us. So the actor uses three walls, because the camera occupies the fourth. The actor never looks into the camera, so he never uses the fourth wall.", "21", "Nov", "35movies", "Ilona Dragomir", "unknown.jpeg");
        $red = new Article("Red (Taylor's Version)", "If you've met me, you already know Taylor Swift's discography is the soundtrack of my life. After her masters controversy, I thought my favorite album was lost for good; taxi cabs and busy streets, they'd never bring it back to me... ", "27", "Nov", "red", "Ilinca Sotirescu", "ilincasotirescu.jpeg");
        $merryCovid = new Article("Merry Covid Christmas ", "It’s been almost two years since humanity has had to deal with the massive health crisis brought over by Covid-19. It was first discovered in Wuhan, China at the end of 2019, hence the name, but the exact cause still remains unclear. After that, it was slowly transmitted to the rest of the country.", "29", "Nov", "merryCovid", "Taisia Plesi", "taisiaplesi.jpeg");
        $nothingScarier = new Article("Nothing scarier than change", "", "9", "Dec", "nothingScarier", "Mihaela Filipescu", "unknown.jpeg");
        $midtermStress = new Article("Midterm stress", "Midterms. The result of months’ worth of work and lessons you most probably didn’t learn beforehand. Those horrifying two to three weeks when most students try to get up to date with all the schoolwork, staying up, only functioning on caffeine, and waking up at 6 am only to roam the school halls like exhausted zombies.", "14", "Dec", "midtermStress", "Anastasia Mihai", "unknown.jpeg");
        $whenIGrowUp = new Article("When I Grow Up- A Story About Beds", "It got really cold after 3 am in his room. Regardless of the heating system - for which his parents paid a great deal of money, regardless of the blue and white blanket he found hidden in a stocking 2 years before. It always gets cold after 3. That's about the time when you start noticing things.", "28", "Dec", "whenIGrowUp", "Clara Pistol", "unknwon.jpeg");
        $addictedToSugar = new Article("Are We Addicted To Sugar?", "	Sweets – those things we just can’t stay away from, despite how hard we try to impose a no-sugar diet. It’s in their nature; they’re just too good. Who can say no to a piece of chocolate? But have you ever wondered why we just can’t seem to refuse them?", "17", "Ian", "addictedToSugar", "Catinca Apostol", "catinca.jpeg");
        $movieStar = new Article("What makes a movie star?", "Everybody says, ‘You impress me as a guy who never wanted to be a movie star’. I say: ‘Everybody in the world wants to be a movie star’.  -Rip Torn", "22", "Ian", "movieStar", "Ilona Dragomir", "unknown.jpeg");
        $theWay = new Article("The way", "", "09", "Feb", "theWay", "Anastasia Hangiu", "anastasiahagiu.jpg");


        $articles = array(
            $theWay,
            $movieStar,
            $addictedToSugar,
            $whenIGrowUp,
            $midtermStress,
            $nothingScarier,
            $merryCovid,
            $red,
            $movies35,
            $anarchy,
            $youngAndFamous,
            $glimpse,
            $logomania
        );

        return $articles;
    }

    public function getDatabaseDiverse()
    {
        $inteligentaLaModa = new Article("Când va fi și inteligența la modă?", "Printre tendințele actuale, probabil una dintre cele mai pregnante este aceea de a reabilita – și câteodată chiar a preaslăvi – ceea ce odată am desconsiderat sau denigrat. Una dintre categoriile de oameni care suferă cel mai mult, dar o fac fără să bată toba, sunt oamenii inteligenți. De ce au ei soarta asta? Nu cumva sună a discriminare? Și nu va veni cândva și rândul lor să fie „repuși în drepturi”?", "10", "Nov", "inteligentaLaModa", "Mihai Stanescu", "mihaistanescu.jpeg");
        $spotifyWrapped = new Article("spotify wrapped", "Iată-ne ajunși la final de an. Revelionul se apropie cu pași repezi, iar zilele sunt numărate până Moș Crăciun va veni la noi. Cu toate acestea, primul eveniment important al lunii decembrie este Spotify Wrapped.", "11", "Dec", "spotifyWrapped", "Alexandra Vladu", "alexandravladu.jpg");
        $destinulUltim = new Article("Destinul Ultim al Universului", "Destinul universului a fost dezbătut doar în filosofie și religie pentru mult timp. De câteva decenii însă, lucrurile s-au schimbat. Dezvoltarea științei, a cosmologiei fizice, mai exact, a făcut ca acest subiect să fie studiat și din punct de vedere științific. Destinul universului este un subiect care unește toți locuitorii acestei lumi, deoarece este vorba despre soarta finală a tot ce a fost, tot ce este și tot ce va fi vreodată.", "19", "Dec", "destinulUltim", "Matei Dăianu", "unknown.jpeg");
        $eticaBrazilor = new Article("Etica brazilor de Crăciun", "E mai bine să cumperi brad real sau artificial? <br> Sărbătorile de iarnă au revenit și în mijlocul petrecerilor, cadourilor și decorațiunilor e bradul, simbolul speranței și al nemuririi. Indiferent ce fel de brad ai, te-ai întrebat probabil la un moment dat: care e varianta mai bună pentru mine și pentru mediu – un brad natural sau unul de plastic?", "26", "Dec", "eticaBrazilor", "Parascheva Toboșaru", "unknown.jpeg");
        $gandireaCritica = new Article("Gândirea critică din școlile din România", "România se clasează pe locul 125 din 141 de state la capitolul ,,predarea gândirii critice” în Raportul Competitivității Globale 2019 făcut de Forumul Economic Mondial.", "10", "Ian", "gandireaCritica", "Diana Georgescu", "unknown.jpeg");
        $necrologul = new Article("Necrologul chiulului din Sava", "De data aceasta mi-am propus să scriu despre un prieten bun de-al nostru, al tuturor, care a murit, săracul, acum câteva zile. Cum s-a întâmplat asta? Într-un accident stupid, așa cum se întâmplă de obicei băieților buni.", "25", "Ian", "necrologul", "Mihai Stănescu", "mihaistanescu.jpeg");


        $articles = array(
            $necrologul,
            $gandireaCritica,
            $eticaBrazilor,
            $destinulUltim,
            $spotifyWrapped,
            $inteligentaLaModa
        );

        return $articles;
    }


    public function getDatabaseDezvoltare()
    {
        $sentimente = new Article("Sentimente", "	Oh! Să fii adolescent înseamnă să treci prin atâtea schimbări și emoții, încât, în majoritatea timpului, te simți chiar și tu confuz și pierdut.", "15", "Nov", "sentimente2", "Alexandra Vladu", "alexandravladu.jpg");

        $articles = array(
            $sentimente
        );

        return $articles;
    }

    public function getDatabaseEvenimente()
    {
        $spirituality = new Article("spirituality 101", "Spiritualitatea e un concept atât de simplu, dar în același timp atât de greu de înțeles pentru cineva care nu vrea să dea timp procesului.", "07", "Feb", "spirituality", "Alexandra Vladu", "alexandravladu.jpg");


        $articles = array(
            $spirituality,
        );

        return $articles;
    }


    public function getBlogCode($articles)
    {
        $code = ' ';

        for ($i = 0; $i < sizeof($articles); $i++) {
            $article = $articles[$i];

            $codePerItem = '
                    
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <a href="' . $article->getUrl() . '.html"> <img class="card-img rounded-0" src="' . $article->getUrl() . '.jpeg" alt=""></a>
                            <div href="' . $article->getUrl() . '.html" class="blog_item_date">
                                <h3>' . $article->getDay() . '</h3>
                                <p>' . $article->getMonth() . '</p>
                            </div>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="' . $article->getUrl() . '.html">
                                <h2>
                                    ' . $article->getTitle() . '
                                </h2>
                            </a>
                            <p>
                                ' . $article->getDescription() . '
                            </p>
                        </div>
                    </article>
                    
                    ';

            $code .= $codePerItem;
        }

        return $code;
    }


    public function getIndexCode($articles)
    {
        $code = ' ';
        $noOfArticlesFromHomePage = 7;

        for ($i = 0; $i < $noOfArticlesFromHomePage; $i++) {
            $article = $articles[$i];
            $fullDate = $article->getDay() . ' ' . $article->getMonth();

//            var $title;
//            var $description;
//            var $day;
//            var $month;
//            var $url;
//            var $authorName;
//            var $authorUrl;

            $codePerItem = '
                    
                    <div class="owl-item" style="width: 330px; margin-right: 30px;">
                        <div class="owl-item active" style="width: 330px; margin-right: 30px;">
                            <div class="single_blog">
                                <div class="thumb">
                                    <a href="' . $article->getUrl() . '.html">
                                        <img src="' . $article->getUrl() . '.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="blog_content">
                                    <a href="dixitInVersuri.html">
                                        <span class="date">' . $fullDate . '
                                    </a>
                                    <a href="' . $article->getUrl() . '.html">
                                        <h3>
                                            ' . $article->getTitle() . '
                                        </h3>
                                    </a>
                                    <div class="owner_info">
                                        <div class="author_thumb">
                                            <img src="' . $article->getAuthorUrl() . '" alt="">
                                        </div>
                                        <div class="info">
                                            <a href="' . $article->getUrl() . '.html">
                                                <h4>
                                                    ' . $article->getAuthorName() . '
                                                </h4>
                                            </a>
                                            <p>Redactor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ';

            $code .= $codePerItem;
        }

        return $code;
    }


}

?>