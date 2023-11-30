-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 19. 19:32
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kondi`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `edzoink`
--

CREATE TABLE `edzoink` (
  `id` int(15) NOT NULL,
  `edzo_nev` varchar(50) NOT NULL,
  `edzo_fajta` varchar(50) NOT NULL,
  `edzo_leiras` varchar(255) NOT NULL,
  `edzo_kontakt` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `edzoink`
--

INSERT INTO `edzoink` (`id`, `edzo_nev`, `edzo_fajta`, `edzo_leiras`, `edzo_kontakt`, `img`) VALUES
(1, 'Nagy Dávid', 'Személyi edző', 'Nagy Dávid vagyok személyi edző. 10 éve foglalkozok sportoktatással. Rengeteg versenyen vettem részt, ahol mind a versenyzőim, de még régebben én is kiemelkedő helyezést értünk el. ', 'nagydavid01@gmail.com', '../Pic/edzo1.jpg'),
(2, 'Varga Kevin', 'Crossfit oktató', 'Varga Kevinnek hívnak és Crossfittel foglalkozok már lassan 5. éve. Szenvedélyem a hivatásom, én is rendszeresen szoktam crossfitezni, illetve persze oktatni is.', 'vkevin1998@gmail.com', '../Pic/edzo2.jpg'),
(3, 'Árgyelán Bálint', 'Erőnléti edző', 'Árgyelán Bálintnak hívnak tanulmányaimat az ELTE-n végeztem el. Az erőnléti edzést sokan nem tartják fontosnak, viszont ugyan olyan értékkel rendelkezik, mint a többi edzésforma. Magas intenzitás sok ismétlésszám.', 'argybalint@gmail.com', '../Pic/edzo3.jpg'),
(4, 'Kis Nikolett', 'Táplálkozási szakértő', 'Kis Nikolett vagyok, de a többiek csak Nikinek szoktak szólítani. Étkezéssel kapcsolatos kérdésekkel én fogok tudni választ adni.', 'kisniki1999@gmail.com', '../Pic/edzo4.jpg'),
(5, 'Erdei Miklós', 'Box edző', 'Erdei Miklósnak hívnak és különféle boxoktatással foglalkozom. 12 éve kezdtem el kick-boxolni, majd különböző küzdősport fajtákat is kipróbáltam, a legjobban a thai box nyerte el a tetszésemet.', 'emiki002@gmail.com', '../Pic/edzo5.jpg'),
(6, 'Kun Fruzsina', 'Yoga oktató', 'Kun Fruzsina vagyok, yoga oktató. 5 éve végeztem az egyetemen, ahol mesterszakot végeztem. A jógának mindenféle részét nagyon szívesen oktatom (pl.:alakformáló jóga).', 'kfruzsi@gmail.com', '../Pic/edzo6.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `felhasznalo_ID` int(10) NOT NULL,
  `vezeteknev` varchar(50) NOT NULL,
  `keresztnev` varchar(50) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefonszam` varchar(50) DEFAULT NULL,
  `varos` varchar(50) DEFAULT NULL,
  `leiras` varchar(255) DEFAULT NULL,
  `profilkep` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`felhasznalo_ID`, `vezeteknev`, `keresztnev`, `jelszo`, `email`, `telefonszam`, `varos`, `leiras`, `profilkep`) VALUES
(29, 'Roman', 'Roman', '$2y$10$3dINhWmNxGQjdyJyvevnGunj1R2EDR3FSFMvL9Y/tqAsMsktgPUju', 'roman@roman.hu', NULL, NULL, NULL, NULL),
(31, 'Molnár ', 'Roland', '$2y$10$qLpFW7UpScufaB6WTu5CkuuoAcBM4HFpfC1.jGfvE7srT/o3Qtkna', 'molnarroland2003@gmail.com', '06304233643', 'Békéscsaba', 'Rolandnak hívnak 19 éves vagyok, és Békéscsabán születtem.', 'hatter11.jpg'),
(33, 'Kis', 'József', '$2y$10$R/H1pTFmbNozzpftPoQoVup/BrPbJSTniAl8OE2f73JnYglJe8126', 'kisjozsi1@gmail.com', NULL, NULL, NULL, NULL),
(34, 'Nagy', 'Péter', '$2y$10$46ZPAy3MElCWXyT99Andx./KBtHdkIqPkxgOScS82eOxZpm3yhWf2', 'nagypeti@gmail.com', '', 'Békéscsaba', '', 'edzo6.jpg'),
(35, 'kajgf', 'ldklvnsd', '$2y$10$hDMDmP1QcfllQ7rW3WP2b.Pk663Y4xSypFxa8cKv45kNeztE4Qf5e', 'hsfdshd@kjdshf.fdoigj', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelesek`
--

CREATE TABLE `rendelesek` (
  `id` int(15) NOT NULL,
  `vasarlo_id` int(15) NOT NULL,
  `rendeles_datuma` date NOT NULL,
  `rendeles_osszege` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `rendelesek`
--

INSERT INTO `rendelesek` (`id`, `vasarlo_id`, `rendeles_datuma`, `rendeles_osszege`) VALUES
(31, 6, '2023-03-19', 7380),
(32, 7, '2023-03-19', 13370),
(33, 8, '2023-03-20', 8480),
(34, 9, '2023-04-04', 3690),
(35, 10, '2023-04-12', 4790);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termekek`
--

CREATE TABLE `termekek` (
  `id` int(13) NOT NULL,
  `nev` varchar(70) NOT NULL,
  `leiras` varchar(100) NOT NULL,
  `ar` int(11) NOT NULL,
  `keszlet` int(10) NOT NULL,
  `feltoltes_datuma` date NOT NULL,
  `termek_tipus` varchar(60) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `termekek`
--

INSERT INTO `termekek` (`id`, `nev`, `leiras`, `ar`, `keszlet`, `feltoltes_datuma`, `termek_tipus`, `img`) VALUES
(1, '1 kg GYMROLL fehérje', 'Finom, könnyen oldódó és intenzív ízvilágú tejsavó fehérje. Többféle ízben kapható', 7990, 67, '2023-03-07', 'feherje', 'feherje.jpg'),
(2, '500 ml GYMROLL shaker', 'Dizájnos, csomosodásgátlóval ellátva tökéletes felhasználói élményt nyújt.', 3690, 32, '2023-03-01', 'shaker', 'shaker.png'),
(3, '500 mg GYMROLL ízesítetlen kreatin', 'A folyamatos formában maradás érdekében szükséges naponta fogyasztani kreatint.', 5990, 29, '2023-02-25', 'kreatin', 'kreatin.png'),
(4, '60 kapszulás GYMROLL edzés előtti', 'Ha edzés közben ki akarod hozni magadból a maximumot, akkor ezt neked találták ki!', 4790, 87, '2023-03-29', 'edzeselotti', 'edzeselotti.png'),
(5, '2,3 kg GYMROLL epres fehérje', 'Nagyobb kiszerelés, jobb íz, mindig jobban megéri.', 14990, 55, '2023-03-16', 'feherje', '3kgfeherje.png'),
(6, '1 kg GYMROLL limeos kreatin', 'Frissítő ízvilág, csakhogy bírd a mindennapi edzéseket, illetve gátolja izmaid kiszáradását.', 9990, 14, '2023-03-10', 'kreatin', '1kgkreatin.png'),
(7, '500 ml GYMROLL shaker kék', 'Dizájnos, fehérje szűrővel ellátva.', 3690, 10, '2023-03-20', 'shaker', 'kekshaker.png'),
(8, '300 g GYMROLL almás edzés előtti', 'Amennyiben úgy akarsz edzeni, mint a híres testépítők, akkor ezt az edzés előttit neked találták ki!', 5490, 28, '2023-03-12', 'edzeselotti', 'almasedzeselotti.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlok`
--

CREATE TABLE `vasarlok` (
  `vasarlo_id` int(15) NOT NULL,
  `vezeteknev` varchar(40) NOT NULL,
  `keresztnev` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `megye` varchar(100) NOT NULL,
  `varos` varchar(100) NOT NULL,
  `utca` varchar(100) NOT NULL,
  `hazszam` varchar(50) NOT NULL,
  `telefonszam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `vasarlok`
--

INSERT INTO `vasarlok` (`vasarlo_id`, `vezeteknev`, `keresztnev`, `email`, `megye`, `varos`, `utca`, `hazszam`, `telefonszam`) VALUES
(6, 'Kis', 'Jenő', 'molnarroland2003@gmail.com', 'Békés', 'Békéscsaba', 'sfasd', '123', '23234324324'),
(7, 'akjdfh', 'sjdgj', 'klasjd@skmdfj.vnk', 'oiufoiqwefhew', 'welkfj', 'lksjdgk', 'lsdjgi', 'lkfjlksd'),
(8, 'Molnár ', 'Roland', 'molnarroland2003@gmail.com', 'Békés', 'Békéscsaba', 'Nagyrét', '1729/1', '06307559817'),
(9, 'Blaha', 'Lujza', 'blujza@gmail.com', 'Békés', 'Szentes', 'Petőfi', '23', '76567575676'),
(10, 'sjhc', 'LKJSCLK', 'molnarroland2003@gmail.com', 'békés', 'opjas', 'oijieoifjiosd', 'jifjoiwe', '19öu49ö832');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `edzoink`
--
ALTER TABLE `edzoink`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`felhasznalo_ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vasarlo_id` (`vasarlo_id`);

--
-- A tábla indexei `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `vasarlok`
--
ALTER TABLE `vasarlok`
  ADD PRIMARY KEY (`vasarlo_id`),
  ADD UNIQUE KEY `telefonszam_2` (`telefonszam`),
  ADD UNIQUE KEY `telefonszam_3` (`telefonszam`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `edzoink`
--
ALTER TABLE `edzoink`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `felhasznalo_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `vasarlok`
--
ALTER TABLE `vasarlok`
  MODIFY `vasarlo_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD CONSTRAINT `rendelesek_ibfk_1` FOREIGN KEY (`vasarlo_id`) REFERENCES `vasarlok` (`vasarlo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
