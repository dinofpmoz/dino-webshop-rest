<?php

use App\Artikl;
use Illuminate\Database\Seeder;

class ArtikliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertVideoigre();
        $this->insertMobilniUređaji();
        $this->insertVozila();

        factory(App\Artikl::class, 100)->create();
    }

    public function insertVideoigre() {
        $artikl = new Artikl([
            'naziv' => 'FIFA 20 PS4 Black Friday ',
            'opis' => 'Prodajem DIGITALNU FIFA 20 za PS4 kao i mnostvo drugih igrica.

            Sta znaci digitalna igra?

            To znaci da igru koju zelite mozete kupiti dosta jeftinije nego sto bi platili CD.

            ORIGINALNU igru downloadujete preko Play Station radnje kao npr sto downloadujete neku aplikaciju na vas mobitel preko oficijelne radnje za mobilne aplikacije, poput vibera, whatsappa, facebooka i slicno. Igra Vam stoji na Vasem Play Stationu uvijek.

            Placate meni a ja Vam onda kupujem igru preko Play Station radnje a igricu Vam instaliram ja licno ili vi sami uz moju asistenciju, sve po zeljama.





            Dobre strane kupovine digitalnih igara:

            Manje zagrijavanje konzole

            Nema mogucnosti ostecenja lasera kao kod igranja igara na CD-u

            Manji troskovi kupovine igara

            Losih strana nema :)
            ',
            'cijena' => 29,
            'stanje' => 10,
            'img_path' => 'https://media.gamestop.com/i/gamestop/11094734/FIFA-20-Champion-Edition?$pdp$',
            'kategorija_id' => 10,
            'user_id' => 1
        ]);
        $artikl->save();

        $artikl = new Artikl([
            'naziv' => ' Gran Turismo Sport HITS PS4 ',
            'opis' => 'KUPOVINA NA RATE BEZ KAMATA!!! www.mobilnitelefoni.ba | KARTIČNO PLAĆANJE | 3D BOX | BANJA LUKA | 065 333 345 | KUPOVINA NA RATE ',
            'cijena' => 39,
            'stanje' => 10,
            'img_path' => 'https://external.webstorage.gr/Product-Images/1426241/ps4-gt-hits-400-1426241.jpg',
            'kategorija_id' => 10,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'Pro Evolution Soccer 2020 PES 2020 PS4 Black Friday ',
            'opis' => 'Prodajem DIGITALNI PES 2020 za PS4 kao i mnostvo drugih igrica.

            Sta znaci digitalni?

            To znaci da igru koju zelite mozete kupiti dosta jeftinije nego sto bi platili CD.

            ORIGINALNU igru downloadujete preko Play Station radnje kao npr sto downloadujete neku aplikaciju na vas mobitel preko oficijelne radnje za mobilne aplikacije, poput vibera, whatsappa, facebooka i slicno. Igra Vam stoji na Vasem Play Stationu uvijek.

            Sve se placa online a igricu Vam instaliram ja licno ili vi, sve po zeljama.





            Dobre strane kupovine digitalnih igara:

            Manje zagrijavanje konzole

            Nema mogucnosti ostecenja lasera kao kod igranja igara na CD-u

            Manji troskovi kupovine igara

            Losih strana nema :)',
            'cijena' => 21,
            'stanje' => 10,
            'img_path' => 'https://cdn.pji.nu/product/standard/800/5162661.jpg',
            'kategorija_id' => 10,
            'user_id' => 1
        ]);
        $artikl->save();



        $artikl = new Artikl([
            'naziv' => 'GTA V - 5 PREMIUM (PS4 - PLAYSTATION 4)',
            'opis' => 'The Grand Theft Auto V: Premium Online Edition & Whale Shark Card Bundle includes the complete Grand Theft Auto V story experience, free access to the ever evolving Grand Theft Auto Online and all existing gameplay upgrades and content including The Doomsday Heist, Gunrunning, Smuggler’s Run, Bikers and much more. You’ll also get the Criminal Enterprise Starter Pack, the fastest way to jumpstart your criminal empire in Grand Theft Auto Online, plus a Whale Shark Cash Card worth $3,500,000 in-game GTA dollars to spend in GTA Online.',
            'cijena' => 69,
            'stanje' => 10,
            'img_path' => 'https://www.picclickimg.com/d/l400/pict/163052590590_/Grand-Theft-Auto-V-Premium-Edition-GTA.jpg',
            'kategorija_id' => 10,
            'user_id' => 1
        ]);
        $artikl->save();
    }

    public function insertMobilniUređaji() {
        $artikl = new Artikl([
            'naziv' => 'Iphone 6',
            'opis' => 'Iphone 6 sve je u ekstra stanju sem displeja malo je napukao vidi se na slikama ali me smeta pri radu radi i otisak prsta i sve.
            Kome smeta sto je displej napukao to kosta 100km da se zamijeni
            Moze i zamjena ponudite',
            'cijena' => 120,
            'stanje' => 1,
            'img_path' => 'https://cdn.mos.cms.futurecdn.net/365c03a7a21f5a736b2c783b3b70f15d-970-80.jpg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'IPHONE 6 16GB GOLD ',
            'opis' => 'Na prodaju IPHONE 6 16GB GOLD TELEFON JE NOV NE KORISTEN. U zamjenu se cijena koriguje. Zamjene iskljucivo lično, za regularne TELEFONE!
            Vase ponude saljite u pp, ili za ozbiljne kupce kontakt:062656343',
            'cijena' => 330,
            'stanje' => 1,
            'img_path' => 'https://apollo-singapore.akamaized.net/v1/files/3349s629phwm3-PK/image;s=1080x1080',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'IPhone 6 plus',
            'opis' => 'IPhone 6 plus u dobrom stanju nova baterija promjenjena radi savrseno',
            'cijena' => 320,
            'stanje' => 1,
            'img_path' => 'https://i.roamcdn.net/hz/zo/listing-thumb-543w/51e70eb6204c59457d6959062ac7fa28/-/hzfiles/zo/picture/qrv969x/17ff866cdda9bdffc19a4d38a3795d0df0bfb1a2.jpeg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'IPhone 6S 32GB ',
            'opis' => 'Mobitel je u odlicnom stanju. Sve originalno na njemu. Jako brz i bez ikakvih problema u radu, 32 GB memorije.
            Kontakt u inbox ili na broj +387 62 987 307',
            'cijena' => 320,
            'stanje' => 1,
            'img_path' => 'https://brain-images-ssl.cdn.dixons.com/5/8/10151585/u_10151585.jpg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'IPhone 6S 64GB Rosegold ',
            'opis' => 'Mobitel iPhone 6S 64GB Rosegold
            Mobitel se nalazi u perfektnom stanju, maximalno ocuvan, nikad nije ispao i sl.
            Koristila zenska ruka.
            Mobitel ima zastitno staklo od prvog dana koristenja i gel masku!
            Fabricki otkljucan za sve mreze, nema iCloud!
            Najnoviji iOS verzija 13.2.2
            ',
            'cijena' => 290,
            'stanje' => 1,
            'img_path' => 'https://i5.walmartimages.com/asr/a8e48a38-3402-4ef7-848b-a0c6e8f8e927_1.6111030de41a4372b734941fd827933a.jpeg?odnWidth=450&odnHeight=450&odnBg=ffffff',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => 'Iphone x',
            'opis' => 'Koristen.

            Malo napukao displey. Telefon je u funkciji. ',
            'cijena' => 755,
            'stanje' => 1,
            'img_path' => 'https://media.wired.com/photos/5b22c5c4b878a15e9ce80d92/master/w_582,c_limit/iphonex-TA.jpg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => ' Iphone X 64gb Space gray ',
            'opis' => 'Apple iPhone X 64gb Space Gray


            Stanje: 9/10 kao sa slika


            Oprema: org punjac, org USB kabal


            iCloud free, sim free


            100% ispravan, par ostecenja na rubu telefona vidljivo na slikama


            Kontakt i Viber : 062 777 491


            Bez zamijena, cijena fix',
            'cijena' => 1059,
            'stanje' => 1,
            'img_path' => 'https://www.techrific.com.au/image/cache/data/TCF/APPLE/iphone%20X/apple%20iphone%20X%2064Gb%20grey-550x400.jpg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();


        $artikl = new Artikl([
            'naziv' => ' Iphone x 256GB ',
            'opis' => 'Tel u dobrom stanju.


            Na poklopcu ima malo napuknice.



            Bez zamjena.',
            'cijena' => 1050,
            'stanje' => 1,
            'img_path' => 'https://www.techrific.com.au/image/cache/data/TCF/APPLE/iphone%20X/apple%20iphone%20X%2064Gb%20grey-550x400.jpg',
            'kategorija_id' => 3,
            'user_id' => 1
        ]);
        $artikl->save();
    }

    public function insertVozila() {
        $artikl = new Artikl([
            'naziv' => ' BMW 530 top full 2014/2015 topp full ',
            'opis' => 'Automatik, dvozonska automatska klima, redizajn, bixenon, 190kw,258ks.top stanje, navigacija, itd ',
            'cijena' => 32950,
            'stanje' => 1,
            'img_path' => 'https://images.hgmsites.net/med/2015-bmw-5-series-gran-turismo-5dr-535i-gran-turismo-rwd-angular-front-exterior-view_100495186_m.jpg',
            'kategorija_id' => 1,
            'user_id' => 1
        ]);
        $artikl->save();

        $artikl = new Artikl([
            'naziv' => ' PEUGEOT 3008 2,0 BLUEHDI (-9201-ID) ',
            'opis' => '

            Cijena bez poreza :  19.900 KM


            Cijena do registracije : 23.490 KM

            www.zoom-auto.com



            063-716-658 --- 039-706-589---063-470-550
            ',
            'cijena' => 23490,
            'stanje' => 1,
            'img_path' => 'https://images.sandicliffe.co.uk/sandicliffe-shop/Peugeot-3008-2-0-BlueHDi-180-GT-5-door-EAT6-0.jpg',
            'kategorija_id' => 1,
            'user_id' => 1
        ]);
        $artikl->save();

        $artikl = new Artikl([
            'naziv' => 'Touareg 2010 godina MOZE ZAMJENA',
            'opis' => 'Touareg 2010 godina
            Reg do 04.2020god
            2 kljuca
            Auto je bez ikakvih ulaganja moguce sve provjere
            Zamjenjeno diskovi i plocice
            Ulje i svi filteri

            Moze zamjena za odgovarajuce

            062 044 888',
            'cijena' => 40000,
            'stanje' => 1,
            'img_path' => 'https://upload.wikimedia.org/wikipedia/commons/8/85/VW_Touareg_I_V6_TDI_Black_Magic.JPG',
            'kategorija_id' => 1,
            'user_id' => 1
        ]);
        $artikl->save();

        $artikl = new Artikl([
            'naziv' => ' Mercedes-Benz CLS 400 d 4MATIC 2019 REGISTROVAN ',
            'opis' => '
            CLS 400 CDI 4M

            REGISTROVAN
            SERVIS URAĐEN NA 41000
            TOP PONUDA
            Sve informacije 061 696 704
            ',
            'cijena' => 134000,
            'stanje' => 1,
            'img_path' => 'https://cdn2.autoexpress.co.uk/sites/autoexpressuk/files/styles/gallery_adv/public/2018/03/18c0156_015.jpg?itok=vxjnTdBi',
            'kategorija_id' => 1,
            'user_id' => 1
        ]);
        $artikl->save();

        $artikl = new Artikl([
            'naziv' => ' Mercedes-Benz ML 350 CDI BlueTEC ',
            'opis' => 'Vozilo mozete pogledati svakim danom u nasem prodajnom salonu koji se nalazi na Magistralnom putu Tuzla Srebrenik 1.5 km od petlje Sicki prema Srebreniku.
            Nasa vozila mozete pregledati u ovlastenom servisu po vasoj zelji.
            Sve na jednom mjestu uz kupovinu vaseg automobila pruzamo vam mogucnost da za vas zavrsimo i registraciju uz najpovoljnije uslove,takodjer vam pruzamo mogucnost kupovine putem Leasinga uz povoljne uslove.

            061 716 327 ili 061 164 195',
            'cijena' => 61900,
            'stanje' => 1,
            'img_path' => 'https://i.ebayimg.com/00/s/NDUwWDgwMA==/z/em0AAOSwFrtbRTGL/$_86.JPG',
            'kategorija_id' => 1,
            'user_id' => 1
        ]);
        $artikl->save();
    }
}
