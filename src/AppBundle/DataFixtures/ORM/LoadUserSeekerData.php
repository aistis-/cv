<?php

/**
 * Created by PhpStorm.
 * User: monika
 * Date: 17.4.21
 * Time: 19.24
 */

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\UserSeeker;

class LoadUserSeekerData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $seeker1 = new UserSeeker();
        $seeker1->setName('Jonas');
        $seeker1->setSurname('Jonauskas');
        $seeker1->setCity('Vilnius');
        $seeker1->setBirthday(new DateTime(1990-02-15));
        $seeker1->setIntroduction('Vadybos magistras, turintis vadovavimo darbo patirties medicinos vadybos, gamybos, informacinių technologijų srityse. Atvykau gyventi ir dirbti į Vilnių, norėčiau pasidalinti savo darbo patirtimi ir prisidėti prie Jūsų įstaigos veiklos rezultatų gerinimo.');
        $seeker1->setPhone('+370661255879');
        $seeker1->setPhoto('profile-img.jpg');
        $seeker1->setProfession('IT guru');
        $seeker1->setEmail('jonas@email.com');
        $seeker1->setPassword('123456');

        $seeker2 = new UserSeeker();
        $seeker2->setName('Onutė');
        $seeker2->setSurname('Petraškaitė');
        $seeker2->setCity('Kaunas');
        $seeker2->setBirthday(new DateTime(1965-04-18));
        $seeker2->setIntroduction('Aukštasis išsilavinimas (VGTU, Inžinerinė Informatika: bakalauro ir magistro diplomai). Daugiau negu 3 metų patirtis dirbant IT įmonėje (analitikė/testuotoja/sistemų konsultantė/administratorė). IT sprendimų ir sistemų – DVS, PVS, pagrįstų Microsoft SharePoint ir Microsoft Project Server technologija.');
        $seeker2->setPhone('+370651266886');
        $seeker2->setPhoto('profile-img.jpg');
        $seeker2->setProfession('IT konsultantė');
        $seeker2->setEmail('onutė@email.com');
        $seeker2->setPassword('123456');

        $seeker3 = new UserSeeker();
        $seeker3->setName('Sandra');
        $seeker3->setSurname('Steponaitytė');
        $seeker3->setCity('Kaišiadorys');
        $seeker3->setBirthday(new DateTime(1980-06-10));
        $seeker3->setIntroduction('Pastaruosius metus dirbdama finansų analitiku įgyjau daug patirties  rengdama ir pristatydama įvairias įmonės veiklos analizes įvairiais pjūviais įmonės vadovybei bei akcininkams. Dirbau su skirtingomis finansų valdymo bei MS Office programomis, dalyvavau diegiant programas bei prisidėjau prie įmonės valdymo gerinimo (kaštų/pelno centrų nustatymas,duomenų pagal šiuos centrus rinkimas, analizė  bei ataskaitų ruošimas).Esu imli naujovėms, atsakinga.');
        $seeker3->setPhone('+370651266777');
        $seeker3->setPhoto('profile-img.jpg');
        $seeker3->setProfession('Finansų analitikė');
        $seeker3->setEmail('sandra@email.com');
        $seeker3->setPassword('123456');

        $seeker4 = new UserSeeker();
        $seeker4->setName('Andrius');
        $seeker4->setSurname('Lapkauskas');
        $seeker4->setCity('Vilnius');
        $seeker4->setBirthday(new DateTime(1975-04-28));
        $seeker4->setIntroduction('Ieškau kūrybingo darbo pardavimų, rinkodaros arba reklamos srityse. Mano patirtis prekyboje siekia 18 metų. Paskutiniai 5 metai -  elektroninės parduotuvės vadovas. Pagal profesiją - mokytojas, treneris. Svarbią  vietą mano gyvenime užima kūryba, esu 3 knygų autorius.');
        $seeker4->setPhone('+370651255444');
        $seeker4->setPhoto('profile-img.jpg');
        $seeker4->setProfession('Pardavimų vadybininkas');
        $seeker4->setEmail('andrius@email.com');
        $seeker4->setPassword('123456');

        $seeker5 = new UserSeeker();
        $seeker5->setName('Rokas');
        $seeker5->setSurname('Daukša');
        $seeker5->setCity('Kaunas');
        $seeker5->setBirthday(new DateTime(1989-02-15));
        $seeker5->setIntroduction('Domiuosi it naujiemomis ir stengiuosi pritaikyti jas darbe.');
        $seeker5->setPhone('+370661433333');
        $seeker5->setPhoto('profile-img.jpg');
        $seeker5->setProfession('IS administratorius');
        $seeker5->setEmail('rokas@email.com');
        $seeker5->setPassword('123456');

        $seeker6 = new UserSeeker();
        $seeker6->setName('Virgilijus');
        $seeker6->setSurname('Gerulaitis');
        $seeker6->setCity('Vilnius');
        $seeker6->setBirthday(new DateTime(1971-02-21));
        $seeker6->setIntroduction('Esu Android mobiliųjų aplikacijų programuotojas, taip pat dirbu su Magento - Magento 2 platforma, Laravel, ImpressPage. Esu nuolat tobulėjantis programavimo srityje, ieškantis naujovių ir mylintis savo profesiją.');
        $seeker6->setPhone('+370661478995');
        $seeker6->setPhoto('profile-img.jpg');
        $seeker6->setProfession('Android programuotojas');
        $seeker6->setEmail('virgilijus@email.com');
        $seeker6->setPassword('123456');

        $seeker7 = new UserSeeker();
        $seeker7->setName('Antanas');
        $seeker7->setSurname('Grigas');
        $seeker7->setCity('Prienai');
        $seeker7->setBirthday(new DateTime(1989-12-19));
        $seeker7->setIntroduction('Esu informacinių sistemų inžinierius, įgyjęs profesinio bakalauro laipsnį 2014m. Turiu patirties atliekant darbus su kompiuteriu ir jų komponentais, naudotis ir administruoti programines įrangas (MS Office paketas, grafinių elementų redaktoriai, internetinių svetainių turinio valdymo sistemos, vartotojų indentifikavimo sistema, antivirusinė įranga). Esu atsakingas ir kruopštus, sugebu dirbti kolektyve bei atlikti paskirtas užduotis asmeniškai....');
        $seeker7->setPhone('+370661478966');
        $seeker7->setPhoto('profile-img.jpg');
        $seeker7->setProfession('Informacinių sistemų inžinierius');
        $seeker7->setEmail('antanas@email.com');
        $seeker7->setPassword('123456');

        $seeker8 = new UserSeeker();
        $seeker8->setName('Laima');
        $seeker8->setSurname('Ivaškevičiūtė');
        $seeker8->setCity('Klaipėda');
        $seeker8->setBirthday(new DateTime(1985-05-19));
        $seeker8->setIntroduction('12m. patirties dirbant su privačiais ir verslo klientais ir esu tai ko šiai dienai reikia sėkmingiems pardavimams ir gerų santykių išlaikymui. Siekianti tikslo, komunikabili, pareiginga, greitai perimanti naujoves.  Patinka dirbti įdomų, atsakingą  darbą, bendraujant, bendradarbiaujant su klientais ir kolegomis.');
        $seeker8->setPhone('+370661474569');
        $seeker8->setPhoto('profile-img.jpg');
        $seeker8->setProfession('Vadybininkė');
        $seeker8->setEmail('laima@email.com');
        $seeker8->setPassword('123456');

        $seeker9 = new UserSeeker();
        $seeker9->setName('Karolis');
        $seeker9->setSurname('Strockis');
        $seeker9->setCity('Rietavas');
        $seeker9->setBirthday(new DateTime(1975-05-19));
        $seeker9->setIntroduction('Ieškau darbo elektronikos, automatikos, elektros, gamybos, energetikos, IT srityse. Neturiu žalingų įpročių. Suprantu techninę anglų kalbą. Turiu gerus darbo kompiuteriu įgūdžius. Noriu visapusiškai tobulėti, dirbti ir mokytis darbo vietoje.');
        $seeker9->setPhone('+370661477111');
        $seeker9->setPhoto('profile-img.jpg');
        $seeker9->setProfession('Elektronikos inžinierius');
        $seeker9->setEmail('karolis@email.com');
        $seeker9->setPassword('123456');

        $seeker10 = new UserSeeker();
        $seeker10->setName('Aistė');
        $seeker10->setSurname('Rugytė');
        $seeker10->setCity('Alytus');
        $seeker10->setBirthday(new DateTime(1997-02-12));
        $seeker10->setIntroduction('Esu pilnametė moksleivė ir ieškau darbo visai vasarai. Noriu užsidirbti, todėl darbą atliksiu atsakingai ir su šypsena.');
        $seeker10->setPhone('+370661466666');
        $seeker10->setPhoto('profile-img.jpg');
        $seeker10->setProfession('Pardavimų vadybininkė');
        $seeker10->setEmail('aiste@email.com');
        $seeker10->setPassword('123456');

        $seeker11 = new UserSeeker();
        $seeker11->setName('Ovidijus');
        $seeker11->setSurname('Gaižauskas');
        $seeker11->setCity('Kaunas');
        $seeker11->setBirthday(new DateTime(1982-07-27));
        $seeker11->setIntroduction('Baigiau KTU skaičiavimo technikos fakultetą taikomosios matematikos specialybę ir įgijau informatikos magistro laipsnį. Turiu sukaupęs nemažą patirtį kaip IT specialistas (programuotojas, sistemų bei tinklų inžinierius) ir kaip serviso bei pardavimo padalinių vadovas. Pasižymiu gerais organizaciniais sugebėjimais, atsakingumu bei motyvuotumu, visuomet siekiu užsibrėžto tikslo, esu lojalus ir noriu tobulėti. Domintų IT specialisto, IS, OS, DB adm...');
        $seeker11->setPhone('+370661411111');
        $seeker11->setPhoto('profile-img.jpg');
        $seeker11->setProfession('Projektų vadovas');
        $seeker11->setEmail('ovidijus@email.com');
        $seeker11->setPassword('123456');

        $manager->persist($seeker1);
        $manager->persist($seeker2);
        $manager->persist($seeker3);
        $manager->persist($seeker4);
        $manager->persist($seeker5);
        $manager->persist($seeker6);
        $manager->persist($seeker7);
        $manager->persist($seeker8);
        $manager->persist($seeker9);
        $manager->persist($seeker10);
        $manager->persist($seeker11);

        $manager->flush();
    }








}