<?php

define('TITLE', 'Upekla');

class Config {

    public $category = [
        'dorty' => [
            'title' => 'Dorty',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'description' => '',
            'products' => [],
            'description' => ''
        ],
        'kolace' => [
            'title' => 'Koláče',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'products' => [],
            'description' => ''
        ],
        'sladkosti' => [
            'title' => 'Sladkosti',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'products' => [],
            'description' => ''
       ],
        'vanoce' => [
            'title' => 'Vánoce',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'products' => [],
            'description' => ''
        ],
        'velikonocni-nabidka' => [
            'title' => 'Velikonoční nabídka',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'products' => [],
            'description' => ''
        ],
    ];
    public $products = [
       /*'vanoce' => [
            'vanocni-cukrovi' => [
                'title' => 'Vánoční cukroví',
                'template' => 'products/vanocni-cukrovi.php',
                'class' => 'sub-page',
                'price' => '1740',
                'ico' => 'sweets',
                'tags' => 'Mix 10 druhů',
                'description' => 'Vánoční mix 10 tradičních druhů vykouzlí úsměv na tváří a vytvoří tu pravou vánoční atmosféru.'
            ],
            'vanocka' => [
                'title' => 'Vánočka',
                'template' => 'products/vanocka.php',
                'class' => 'sub-page',
                'price' => '540',
                'ico' => 'sweets',
                'tags' => 'brusinky, mandle',
                'description' => 'Sametově hebká. S brusinkami a mandlemi.'
            ],
           'vanocni-vanilkovy-krem' => [
                'title' => 'Vánoční vanilkový krém',
                'template' => 'products/vanocni-vanilkovy-krem.php',
                'class' => 'sub-page',
                // 'price' => '390 - 790',
                // 'ico' => 'sweets',
                // 'tags' => 'rum, vanilka, smetana',
                'description' => 'Z důvodu změny legislativy bohužel již nemůžeme nabízet. Moc nás to mrzí a omlouváme se.',
                'info' => 'Z důvodu změny legislativy bohužel již nemůžeme nabízet. Moc nás to mrzí a omlouváme se.'
            ]
        ],*/
       /*'velikonocni-nabidka' => [
            'velikonocni-mazanec' => [
                'title' => 'Velikonoční mazanec',
                'template' => 'products/velikonocni-mazanec.php',
                'class' => 'sub-page',
                'price' => '310',
                'ico' => 'sweets',
                'tags' => 'brusinky, mandle, mléko',
                'description' => 'Sametově hebký. S mandlemi a brusinkami. Vynikající.'
            ],
            'vanilkovy-krem' => [
                'title' => 'Vanilkový krém',
                'template' => 'products/vanilkovy-krem.php',
                'class' => 'sub-page',
                'price' => '370-470',
                'ico' => 'sweets',
                'tags' => 'rum, vanilka, smetana',
                'description' => 'Lahodné spojení rumu, vanilky a smetany.'
            ]
        ],*/
        'dorty' => [
            'darovaci-sek' => [
                'title' => 'Darovací šek',
                'template' => 'products/darovaci-sek.php',
                'class' => 'sub-page',
                'price' => 'od 100',
                'ico' => 'cake',
                'tags' => 'poukaz, dorty, kolace, sladkosti',
                'description' => 'Dárkové šeky v hodnotě 100, 200, 300, 500 a 1000 Kč. Můžete zakoupit u nás v Písku i v Příbrami.'
            ],
            'dynovy-cheesecake' => [
                'title' => 'Dýňový cheesecake',
                'template' => 'products/dynovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '950',
                'ico' => 'cake',
                'tags' => 'dýně, sušenky, smetana',
                'description' => 'Svěží dort s příjemnou příchutí  skořice, zázvoru a hřebíčku.'
            /*],
            'cheesecake-s-kavou' => [
                'title' => 'Cheesecake s kávou',
                'template' => 'products/cheesecake-s-kavou.php',
                'class' => 'sub-page',
                'price' => '830',
                'ico' => 'cake',
                'tags' => 'kakao, káva, smetana',
                'description' => 'Lahodná kombinace kakaových sušenek jako základu a nadýchané náplně s jemnou kávovou příchutí.'*/
            ],
            'kokosovy-dort' => [
                'title' => 'Kokosový dort s čokoládou',
                'template' => 'products/kokosovy-dort.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => 'kakao, kokos, smetana',
                'description' => 'Božský šťavnatý dort s bílou a hořkou čokoládou, plný kokosu, smetany a s kapkou rumu.'
            ],
            'bananovy-dort-s-karamelem-a-liskovymi-orechy' => [
                'title' => 'Banánový dort s karamelem a lískovými ořechy',
                'template' => 'products/bananovy-dort-s-karamelem-a-liskovymi-orechy.php',
                'class' => 'sub-page',
                'price' => '1060',
                'ico' => 'cake',
                'tags' => 'med, banány, smetana',
                'description' => 'Kakaový korpus naplněný vanilkovým našlehaným krémem, karamelem a zkaramelizovanými banány.'
            ],
            'bananovy-dort' => [
                'title' => 'Banánový dort',
                'template' => 'products/bananovy-dort.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => 'mascarpone, banány, smetana',
                'description' => 'Šťavnatý banánový korpus plněný lehkým vanilkovým krémem, domácím karamelem a zkaramelizovanými banány.'
            ],
            'citronovy-cheesecake' => [
                'title' => 'Citrónový cheesecake',
                'template' => 'products/citronovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'citron, tvaroh',
                'description' => 'Sametový, lehký a osvěžující dort. Nádherná kombinace kakaa a citrónu.'
            ],
            'citronovy-dort-s-makem' => [
                'title' => 'Citrónový dort s mákem',
                'template' => 'products/citronovy-dort-s-makem.php',
                'class' => 'sub-page',
                'price' => '1250',
                'ico' => 'cake',
                'tags' => 'bez mouky, citron, mascarpone',
                'description' => 'Vláčný makový korpus a svěží citrónový krém. Ozdobený medailonky z bílé čokolády a máku. Bez mouky.'
            ],
            'cokoladovy-dort-s-cokoladovym-kremem' => [
                'title' => 'Čokoládový dort s čokoládovým krémem',
                'template' => 'products/cokoladovy-dort-s-cokoladovym-kremem.php',
                'class' => 'sub-page',
                'price' => '1060',
                'ico' => 'cake',
                'tags' => 'čokoláda, kakao, smetana',
                'description' => 'Šťavnatý čokoládový korpus s čokoládovým krémem z másla, čokolády a smetany s vrstvičkou višňové zavařeniny svařené s kapkou višňovice.'
            /*],
            'cokoladovy-dort-s-cokoladovym-mascarpone' => [
                'title' => 'Čokoládový dort s čokoládovým mascarpone',
                'template' => 'products/cokoladovy-dort-s-cokoladovym-mascarpone.php',
                'class' => 'sub-page',
                'price' => '920',
                'ico' => 'cake',
                'tags' => 'čokoláda, kakao, mascarpone',
                'description' => 'Šťavnatý čokoládový korpus odlehčený krémem z mléčné čokolády rozpuštěné ve šlehačce a mascarpone.'*/
            ],
            'cokoladovy-cheesecake' => [
                'title' => 'Čokoládový cheesecake',
                'template' => 'products/cokoladovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'čokoláda, sušenky, čerstvý sýr',
                'description' => 'Úžasná kombinace hutné čokolády a lehkého tvarohu.'
            ],
            'dvoupatrovy-dort-s-coko-salem' => [
                'title' => 'Dvoupatrový dort s čoko šálem',
                'template' => 'products/dvoupatrovy-dort-s-coko-salem.php',
                'class' => 'sub-page',
                'price' => '2880',
                'ico' => 'cake',
                'tags' => 'čokoláda, ovoce, smetana',
                'description' => 'Nadýchaný vanilkový korpus s lehkým vanilkovým krémem, s hořko mléčným čokoládovým šálem a kopicí čerstvého ovoce.'
            ],
            'karamelovy-cheesecake' => [
                'title' => 'Karamelový cheesecake',
                'template' => 'products/karamelovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'čokoláda, karamel, mascarpone',
                'description' => 'Vrstva tvarohu s rozpuštěnou bílou čokoládou na karamelovém sušenkovém základu. Navrch našlehaný karamelový krém'
            ],
            'makovy-dort-s-mascarpone-a-ovocem' => [
                'title' => 'Makový dort s mascarpone a ovocem',
                'template' => 'products/makovy-dort-s-mascarpone-a-ovocem.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => 'bez mouky, ovoce, smetana',
                'description' => 'Velice lehký letní dort. Nadýchaný makový korpus, šlehačka s mascarpone a ovoce v želé.'
            /*],
            'makovy-cheesecake' => [
                'title' => 'Makový cheesecake',
                'template' => 'products/makovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '830',
                'ico' => 'cake',
                'tags' => 'mák, tvaroh, smetana',
                'description' => 'Svěží cheesecake s mákem, tvarohem a smetanou na tenké vrstvě křehkého těsta.'*/
            ],
            'mandlovy-dort' => [
                'title' => 'Mandlový dort',
                'template' => 'products/mandlovy-dort.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => 'bez mouky, bez laktózy, mandle',
                'description' => 'Vrstvy sněhových plátů plných mletých mandlí s jemným žloutkovým krémem. Prosypané nasekanými mandlemi.'
            ],
            'medovnik-s-karamelovym-kremem' => [
                'title' => 'Medovník s karamelovým krémem',
                'template' => 'products/medovnik-s-karamelovym-kremem.php',
                'class' => 'sub-page',
                'price' => '1060',
                'ico' => 'cake',
                'tags' => 'karamel, med',
                'description' => 'Medové pláty promazané našlehaným karamelovým krémem'
            ],
            'mocca-dort' => [
                'title' => 'Mocca dort',
                'template' => 'products/mocca-dort.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'bez mouky, bez laktózy, kokos',
                'description' => 'Sněhové kokosové pláty plněné jemným kávovým krémem.'
            ],
            'mrkvovy-dort' => [
                'title' => 'Mrkvový dort',
                'template' => 'products/mrkvovy-dort.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'mrkev, ořechy, skořice',
                'description' => 'Vláčný dort s ořechy s vrstvou jemného krému. 12 mrkviček z cukrové hmoty.'
            ],
            'ovocny-dort-s-mascarpone' => [
                'title' => 'Ovocný dort s mascarpone',
                'template' => 'products/ovocny-dort-s-mascarpone.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => 'ovoce, smetana, mascarpone',
                'description' => 'Vynikající letní dort. Vrstva mascarpone se šlehačkou a kysanou smetanou na nadýchaném piškotu, s  ovocem zalitým želé.'
            /*],
            'ovocny-cheesecake' => [
                'title' => 'Ovocný cheesecake',
                'template' => 'products/ovocny-cheesecake.php',
                'class' => 'sub-page',
                'price' => '890',
                'ico' => 'cake',
                'tags' => 'ovoce, smetana, tvaroh',
                'description' => 'Poctivá smetanovo tvarohová náplň na tenké vrstvě těsta s čerstvým ovocem zalitým želé.'*/
            ],
            'pernikovy-cheesecake' => [
                'title' => 'Perníkový cheesecake',
                'template' => 'products/pernikovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'med, kakao, mascarpone',
                'description' => 'Cheesecake s čokoládou, mandlemi, karamelovou šlehačkou a korpusem, který voní po perníčkách'
            ],
            'marcipanovy-dort' => [
                'title' => 'Marcipánový dort',
                'template' => 'products/marcipanovy-dort.php',
                'class' => 'sub-page',
                'price' => '1120',
                'ico' => 'cake',
                'tags' => 'pudink, smetana, vanilka',
                'description' => 'Nadýchaný vanilkový korpus s lehkým vanilkovým krémem a šlehačkou. Potažený marcipánem a ozdobený růžičkou.'
            ],
            'pusinkovy-dort' => [
                'title' => 'Pusinkový dort',
                'template' => 'products/pusinkovy-dort.php',
                'class' => 'sub-page',
                'price' => '1180',
                'ico' => 'cake',
                'tags' => 'arašídy, smetana, karamel',
                'description' => 'Slavnostní dort s vrstvami karamelu se slanými buráky, tmavé čokolády, mascarpone s bílou čokoládou a flambovanými pusinkami.'
            ],
            'vetrnikovy-dort' => [
                'title' => 'Větrníkový dort',
                'template' => 'products/vetrnikovy-dort.php',
                'class' => 'sub-page',
                'price' => '1110',
                'ico' => 'cake',
                'tags' => 'karamel, smetana, vanilka',
                'description' => 'Nadýchané vrstvy odpalovaného těsta s lehkým vanilkovým krémem z pravé vanilky a s karamelovou šlehačkou z domácího karamelu.'
            ],
            'fit-dort' => [
                'title' => 'Fit dort',
                'template' => 'products/fit-dort.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => 'bez mouky, kakao, maliny',
                'description' => 'Kakaový korpus s mandlovou moukou, smetanovým krémem a vrstvou malin v želé.'
            /*],
            'boruvkovy-cheesecake' => [
                'title' => 'Borůvkový cheesecake',
                'template' => 'products/boruvkovy-cheesecake.php',
                'class' => 'sub-page',
                'price' => '830',
                'ico' => 'cake',
                'tags' => ' tvaroh, borůvky, kakao',
                'description' => 'Smetanový krém s tvarohem a borůvkami na sušenkovém kakaovém základu.'*/
            ],
            'cheesecake-s-makem' => [
                'title' => 'Cheesecake s mákem',
                'template' => 'products/cheesecake-s-makem.php',
                'class' => 'sub-page',
                'price' => '970',
                'ico' => 'cake',
                'tags' => ' tvaroh, mák, bílá čokoláda',
                'description' => 'Smetanový krém s tvarohem a mákem, kapkou rumu a špetkou skořice na sušenkovém kakaovém základu.'
            ],
            'dort-pavlova' => [
                'title' => 'Dort Pavlova',
                'template' => 'products/dort-pavlova.php',
                'class' => 'sub-page',
                'price' => '1180',
                'ico' => 'cake',
                'tags' => ' bez mouky, šlehačka, ovoce',
                'description' => 'Sněhový korpus se šlehačkou s mascarpone nazdobený čerstvým sezónním ovocem.'

                ],
            'ovocny-dort-s-cokosalem' => [
                'title' => 'Ovocný dort s čoko šálem',
                'template' => 'products/ovocny-dort-s-cokosalem.php',
                'class' => 'sub-page',
                'price' => '1440',
                'ico' => 'cake',
                'tags' => ' čokoláda, ovoce, vanilka',
                'description' => 'Nadýchaný vanilkový korpus s lehkým vanilkovým krémem, s hořko mléčným nebo bílým čokoládovým šálem a kopou čerstvého ovoce.'

                ],
            'kokosovy-dort-s-kokosovym-kremem' => [
                'title' => 'Kokosový dort s kokosovým krémem',
                'template' => 'products/kokosovy-dort-s-kokosovym-kremem.php',
                'class' => 'sub-page',
                'price' => '990',
                'ico' => 'cake',
                'tags' => ' bez mouky, kokos, kokosová šlehačka',
                'description' => 'Lehoučký jako obláček.'

            ],
            'svatecni-dort' => [
                'title' => 'Sváteční dort',
                'template' => 'products/svatecni-dort.php',
                'class' => 'sub-page',
                'price' => '1340',
                'ico' => 'cake',
                'tags' => ' vanilka, pudink, bílá čokoláda',
                'description' => 'Vanilkový korpus s vanilkovým krémem, čerstvým ovocem a s bílou čokoládou po obvodu. Ozdobený perličkami a pusinkami.'
            ],
            'slavnostni-dort' => [
                'title' => 'Slavnostní dort',
                'template' => 'products/slavnostni-dort.php',
                'class' => 'sub-page',
                'price' => '1340',
                'ico' => 'cake',
                'tags' => ' kakao, maliny, bílá čokoláda',
                'description' => 'Kakaový korpus s malinovým krémem a bílou čokoládou po obvodu. Ozdobený perličkami a pusinkami'

            ],
            'cokoladovy-dort-s-ovocem' => [
                'title' => ' Čokoládový dort s ovocem',
                'template' => 'products/cokoladovy-dort-s-ovocem.php',
                'class' => 'sub-page',
                'price' => '1340',
                'ico' => 'cake',
                'tags' => ' kakao, čokoláda, ovoce',
                'description' => 'Kakaový korpus s krémem z mléčné čokolády, šlehačky a mascarpone. Pokrytý čokoládovým krémem. Vrstva višňové marmelády svařené s kapkou višňovice. Ozdobený čerstvým ovocem.'
            ],
        ],
        'kolace' => [
            'jablecny-kolac-s-vanilkovym-kremem' => [
                'title' => 'Jablečný koláč s vanilkovým krémem',
                'template' => 'products/jablecny-kolac-s-vanilkovym-kremem.php',
                'class' => 'sub-page',
                'price' => '980',
                'ico' => 'pie',
                'tags' => 'karamel, mandle, jablka',
                'description' => 'Dokonalé spojení křehkého máslového těsta, zkaramelizované jablečné náplně, našlehaného vanilkového krému a mandlí.'
            ],
            'velikonocni-mazanec' => [
                'title' => 'Velikonoční mazanec',
                'template' => 'products/velikonocni-mazanec.php',
                'class' => 'sub-page',
                'price' => '470',
                'ico' => 'pie',
                'tags' => 'brusinky, mandle, mléko',
                'description' => 'Sametově hebký. S mandlemi a brusinkami. Vynikající.'
              ],
            /*'bananova-babovka' => [
                'title' => 'Banánová bábovka',
                'template' => 'products/bananova-babovka.php',
                'class' => 'sub-page',
                'price' => '650',
                'ico' => 'pie',
                'tags' => 'banány, ovoce',
                'description' => 'Vláčná, šťavnatá a voňavá bábovka plná banánů.'
            ],*/
            'bananovy-chlebicek-banana-bread' => [
                'title' => 'Banánový chlebíček (Banana bread)',
                'template' => 'products/bananovy-chlebicek-banana-bread.php',
                'class' => 'sub-page',
                'price' => '710',
                'ico' => 'pie',
                'tags' => 'banány, ovoce',
                'description' => 'Vláčný, šťavnatý a voňavý chlebíček plný banánů.'
            /*],
            'boruvkovy-kolac-s-drobenkou' => [
                'title' => 'Borůvkový koláč s drobenkou',
                'template' => 'products/boruvkovy-kolac-s-drobenkou.php',
                'class' => 'sub-page',
                'price' => '490',
                'ico' => 'pie',
                'tags' => 'borůvky, ovoce, tvaroh',
                'description' => 'Voňavý borůvkový koláč s našlehaným tvarohem a křupavou drobenkou.'*/
            ],
            'dvojctihodne-kolacky' => [
                'title' => 'Dvojctihodné koláčky',
                'template' => 'products/dvojctihodne-kolacky.php',
                'class' => 'sub-page',
                'price' => '55',
                'ico' => 'pie',
                'tags' => 'kynuté, povidla, tvaroh',
                'description' => 'Vláčné a nadýchané koláčky s povidly navrch a tvarohem uvnitř.'
            ],
            'orechovy-kolac-s-cokoladou' => [
                'title' => 'Ořechový koláč s čokoládou',
                'template' => 'products/orechovy-kolac-s-cokoladou.php',
                'class' => 'sub-page',
                'price' => '950',
                'ico' => 'pie',
                'tags' => 'bez mouky, čokoláda, ořechy',
                'description' => 'Šťavnatý kakaový koláč s mletými lískovými ořechy, politý čokoládou složenou z čokolády, másla a šlehačky a po obvodu posypaný opraženými lískovými ořechy.'
            ],
            /*'orechovy-kolac-s-karamelem' => [
                'title' => 'Ořechový koláč s karamelem',
                'template' => 'products/orechovy-kolac-s-karamelem.php',
                'class' => 'sub-page',
                'price' => '780',
                'ico' => 'pie',
                'tags' => 'karamelem, smetana, ořechy',
                'description' => 'Opražené domácí vlašské ořechy zalité vláčným jemně nahořklým karamelem na křehkém těstě.'
            ],*/
            'skoricove-sneky' => [
                'title' => 'Skořicové šneky',
                'template' => 'products/skoricove-sneky.php',
                'class' => 'sub-page',
                'price' => '810',
                'ico' => 'pie',
                'tags' => 'kynuté, skořice, vanilka',
                'description' => 'Máslem napuštěné, obalené ve skořici, extra sladké. Jsou naprosto neodolatelné.'
            ],
        ],
        'sladkosti' => [
            'cookies' => [
                'title' => 'Cookies',
                'template' => 'products/cookies.php',
                'class' => 'sub-page',
                'price' => '55',
                'ico' => 'candy',
                'tags' => 'čokoláda, ovoce, mandle',
                'description' => 'Křehké sušenky s rozpuštěnou bílou čokoládou, nasekanými kousky mléčné čokolády, s mandlemi a brusinkami.'
            ],
            'linecka-kolecka' => [
                'title' => 'Linecká kolečka',
                'template' => 'products/linecka-kolecka.php',
                'class' => 'sub-page',
                'price' => '55',
                'ico' => 'candy',
                'tags' => 'marmeláda',
                'description' => 'Vynikající křehké linecké těsto s malinovou marmeládou.'
            /*],
            'marokanky' => [
                'title' => 'Marokánky',
                'template' => 'products/marokanky.php',
                'class' => 'sub-page',
                'price' => '65',
                'ico' => 'candy',
                'tags' => 'čokoláda, ovoce, mandle',
                'description' => 'Vláčné a šťavnaté marokánky, plné ovoce a mandlí, máčené v čokoládě.''*/
            ],
            'mega-pusinky-s-cokoladou-nebo-bez' => [
                'title' => 'Mega pusinky s čokoládou nebo bez',
                'template' => 'products/mega-pusinky-s-cokoladou-nebo-bez.php',
                'class' => 'sub-page',
                'price' => '80',
                'ico' => 'candy',
                'tags' => 'bez mouky, čokoláda',
                'description' => 'Vyšlehaný bílek s nasekanou mléčnou čokoládou. Navrch křehké, uvnitř vláčné.'
            ],
        ]
    ];
    public $pages = [
        'default' => [
            'title' => 'Po čertech dobré dezerty',
            'template' => 'homepage.php',
            'class' => 'homepage',
            'footer' => '',
            'description' => 'Vychutnejte si dorty, koláče a jiné dobroty z naší cukrárny a nechte se unést na vlně ďábelského pokušení.'
        ],
        'o-nas' => [
            'title' => 'O nás',
            'template' => 'o-nas.html',
            'class' => 'sub-page',
            'footer' => '',
            'description' => ''
        ],
        'cukrarny' => [
            'title' => 'Cukrárny',
            'template' => 'cukrarny.html',
            'class' => 'sub-page',
            'footer' => '',
            'description' => ''
        ],
        'produkty' => [
            'title' => 'Produkty',
            'template' => 'produkty.php',
            'class' => 'sub-page',
            'footer' => 'footer--secondary',
            'category' => [],
            'description' => ''
        ],
        'napiste-nam' => [
            'title' => 'Napište nám',
            'template' => 'napiste-nam.php',
            'class' => 'sub-page',
            'footer' => 'footer--secondary',
            'description' => ''
        ],
        'informace-o-cookies' => [
            'title' => 'Informace o zpracovaní cookies',
            'template' => 'informace-o-cookies.html',
            'class' => 'sub-page',
            'footer' => '',
            'description' => ''
        ],
        'zasady-ochrany-soukromi' => [
            'title' => 'Zásady ochrany soukromí',
            'template' => 'zasady-ochrany-soukromi.html',
            'class' => 'sub-page',
            'footer' => '',
            'description' => ''
        ],
        '404' => [
            'title' => '404',
            'template' => '404.php',
            'class' => 'page-404',
            'footer' => '',
            'description' => ''
        ],
    ];
    public $title;
    public $description;
    public $page_name;
    public $page;
    public $page_category;
    public $page_product;
    public $body_class;
    public $footer_class;
    public $template;
    public $page_config;
    public $nofollow;

    public function __construct($get) {
        $this->set_data();
        $this->set_page($get['page']);
    }

    public function set_data() {

        foreach ($this->category as $key => $val) {
            if (isset($this->products[$key])) {
                $this->category[$key]['products'] = $this->products[$key];
            }
        }

        $this->pages['produkty']['category'] = $this->category;
    }

    public function set_page_name() {

        $this->page_name = isset($this->page_config['title']) && !empty($this->page_config['title']) ? $this->page_config['title'] : '';
    }

    public function set_title() {

        $this->title = isset($this->page_config['title']) && !empty($this->page_config['title']) ? $this->page_config['title'] . ' - ' . TITLE : TITLE;
    }

    public function set_nofollow() {

        $this->nofollow = isset($this->page_config['nofollow']) && ($this->page_config['nofollow']) ? 'noindex, nofollow' : 'index, follow';
    }

    public function set_description() {

        $this->description = isset($this->page_config['description']) && !empty($this->page_config['description']) ? $this->page_config['description'] : '';
    }

    public function set_page_config() {

        $this->page_config = $this->pages[$this->page];

        if (!empty($this->page_category)) {
            $this->page_config = $this->pages[$this->page]['category'][$this->page_category];
        }

        if (!empty($this->page_product)) {
            $this->page_config = $this->pages[$this->page]['category'][$this->page_category]['products'][$this->page_product];
        }
    }

    public function set_page($page = null) {

        $page = explode('/', $page);


        $this->page = empty($page[0]) ? 'default' : (isset($this->pages[$page[0]]) ? $page[0] : '404');


        if (isset($page[1]) && !empty($page[1])) {
            if (!isset($this->pages[$this->page]['category'][$page[1]])) {
                $this->page = '404';
            } else {
                $this->page_category = $page[1];
            }
        }

        if (isset($page[2]) && !empty($page[2])) {
            if (!isset($this->pages[$this->page]['category'][$page[1]]['products'][$page[2]])) {
                $this->page = '404';
            } else {
                $this->page_product = $page[2];
            }
        }

        $this->set_page_config();
        $this->set_title();
        $this->set_description();
        $this->set_page_name();
        $this->set_template();
        $this->set_body_class();
        $this->set_footer_class();
        $this->set_nofollow();
    }

    public function set_body_class() {
        $this->body_class = $this->page_config['class'];
    }

    public function set_template() {

        $this->template = $this->page_config['template'];
    }

    public function set_footer_class() {
        $this->footer_class = $this->page_config['footer'];
        if ($this->page == 'produkty') {
            $this->footer_class = $this->pages[$this->page]['footer'];
        }

        if ($this->page == 'produkty' && !empty($this->page_product)) {
            $this->footer_class = '';
        }
    }

    public function get_title() {

        return $this->title;
    }

    public function get_description() {
        return $this->description;
    }

    public function get_page_name() {

        return $this->page_name;
    }

    public function get_page() {
        return $this->page;
    }

    public function get_page_category() {
        return $this->page_category;
    }

    public function get_nofollow() {
        return $this->nofollow;
    }

    public function get_page_category_title() {
        return $this->pages[$this->page]['category'][$this->page_category]['title'];
    }

    public function get_page_product_title() {
        return $this->pages[$this->page]['category'][$this->page_category]['products'][$this->page_product]['title'];
    }

    public function get_page_product() {
        return $this->page_product;
    }

    public function get_body_class() {
        return $this->body_class;
    }

    public function get_template() {
        return $this->template;
    }

    public function get_footer_class() {
        return $this->footer_class;
    }

    public function get_products_by_category($category, $slug) {

        if (empty($category)) {
            return $this->products;
        }

        foreach ($this->products as $products_key => $product) {
            if ($category !== $products_key) {
                unset($this->products[$products_key]);
            }

            foreach ($product as $product_key => $product_val) {
                if ($slug == $product_key) {
                    unset($this->products[$products_key][$product_key]);
                }
            }
        }

        return $this->products;
    }

    public function get_products($category = null, $slug = null, $rand = false, $main = null) {
        $products = [];
        $i = 0;
        $main_product = [];
        foreach ($this->get_products_by_category($category, $slug) as $products_key => $product) {
            foreach ($product as $product_key => $product_val) {
                if ($main != $product_key) {
                    $products[$i] = $product_val;
                    $products[$i]['category'] = $products_key;
                    $products[$i++]['slug'] = $product_key;
                } else {
                    $main_product[0] = $product_val;
                    $main_product[0]['category'] = $products_key;
                    $main_product[0]['slug'] = $product_key;
                }
            }
        }


        if ($rand) {
            shuffle($products);
        }

        if (!is_null($main)) {
            $products = $this->addToFirst($products, $main_product);
        }

        return $products;
    }

    public function addToFirst($array, $insert) {
        $products = $insert;
        $i = 1;
        foreach ($array as $v) {
            $products[$i++] = $v;
        }


        return $products;
    }

    public function get_product($product = null) {

        if (is_null($product)) {
            return "";
        }


        foreach ($this->products as $fproduct) {
            if (isset($fproduct[$product])) {
                return $fproduct[$product]['title'];
            }
        }

        return "";
    }

    public function get_product_price() {
        if (!empty($this->page_product && !empty($this->page_category))) {

            return isset($this->products[$this->page_category][$this->page_product]) ? $this->products[$this->page_category][$this->page_product]['price'] . ' Kč' : '';
        }
    }

}

$config = new Config($_GET);
?>
